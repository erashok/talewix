<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\User;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Plan;

class FrontendController extends Controller
{
    public function index()
    {
        $all_categories = Category::where('status', '1')
            ->take(9)
            ->get();
        $latest_posts = Post::where('status', '1')
            ->orderBy('created_at', 'DESC')
            ->take(6)
            ->get();
        $right_sidebar = Post::where('status', '1')
            ->orderBy('created_at', 'DESC')
            ->take(1)
            ->get();
        return view('frontend.index', compact('all_categories', 'latest_posts', 'right_sidebar'));
    }

    public function viewcategoryPost(string $category_slug)
    {
        $category = Category::where('slug', $category_slug)
            ->where('status', '1')
            ->first();

        if ($category) {
            $post = Post::where('category_id', $category->id)
                ->where('status', '1')
                ->get();
            foreach ($post as $reaspost) {
                $reaspost->reading_time = $reaspost->reading_time; // Access the attribute
            }
            return view('frontend.post.index', compact('post', 'category'));
        } else {
            return redirect('/')->with('error', 'Category not found or inactive.');
        }
    }

    public function viewpost(string $category_slug, string $post_slug)
    {
        $category = Category::where('slug', $category_slug)
            ->where('status', '1')
            ->first();

        if ($category) {
            $post = Post::where('category_id', $category->id)
                ->where('slug', $post_slug)
                ->where('status', '1')
                ->first();
            $latest_posts = Post::where('category_id', $category->id)
                ->where('status', '1')
                ->orderBy('created_at', 'DESC')
                ->get()
                ->take(6);
            return view('frontend.post.view', compact('post', 'latest_posts'));
        } else {
            return redirect('/')->with('error', 'Category not found or inactive.');
        }
    }

    public function newstory()
    {
        $categories = Category::where('status', '1')->get();
        if ($categories->isEmpty()) {
            return redirect()
                ->back()
                ->with('error', 'No categories found.');
        }
        return view('frontend.post.new-story', compact('categories'));
    }

    public function addstory(Request $request)
{
    
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'short_description' => 'required|string',
        'description' => 'required|string',
        'tags' => 'nullable|string', 
        'thum_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    // Create a new post
    $post = new Post();
    $post->category_id = $request->category_id;
    $post->name = $request->name;
    $post->short_description = $request->short_description;
    $post->description = $request->description;
    $post->user_id = Auth::id(); 
    $post->user_name = Auth::user()->name;
    $post->slug = Str::slug($request->name);
    
    
    $tags = [];
    if (!empty($request->tags)) {
       
        $tagItems = explode(',', $request->tags);
        foreach ($tagItems as $jsonString) {
            $decoded = json_decode($jsonString, true);
            
            if ($decoded && isset($decoded['value'])) {
                $tags[] = trim($decoded['value']);
            }
        }
    }

    if (count($tags) > 3) {
        return redirect()->back()->withErrors(['tags' => 'You can only add up to 5 tags.'])->withInput();
    }

    $tagsString = implode(',', $tags);
    $post->tags = $tagsString;
    if ($request->hasFile('thum_image')) {
        $file = $request->file('thum_image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('upload/post/'), $filename);
        $post->thum_image = $filename;
    } else {
        $post->thum_image = 'default-image.jpg';
    }
    $post->created_by = Auth::user()->id;
    $post->status = 1;
    $post->save(); 

    return redirect('/profile')->with('message', 'Post Added Successfully'); // Redirect back with success message
}
    public function showpost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('frontend.post.showpost', compact('post'));
    }

    public function showPostDetails($username, $slug)
    {
        $user = User::where('user_slug', $username)->firstOrFail();
        $post = Post::where('slug', $slug)->where('user_id', $user->id)->firstOrFail();
        return view('post.show', compact('user', 'post'));
    }
    
    public function userprofile()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $posts = Post::where('status', '1')
                ->where('created_by', $user->id)
                ->orderBy('created_at', 'desc')
                ->get();
            return view('frontend.post.profile', compact('posts', 'user'));
        }
        return redirect()
            ->route('login')
            ->with('error', 'Please log in to view your profile.');
    }
    public function showProfile($id)
        {
            $user = User::findOrFail($id);
            $posts = Post::where('status', '1')
                         ->where('created_by', $id)
                         ->orderBy('created_at', 'desc')
                         ->get();
        
        return view('frontend.post.profile', compact('posts', 'user'));
        }
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string|min:1',
        ]);
        $query = $request->input('query');
        $posts = Post::where('name', 'like', "%{$query}%")
            ->orWhere('short_description', 'like', "%{$query}%")
            ->get();

        return view('frontend.post.search', compact('posts', 'query'));
    }
    public function plans()
    {
        $plans = Plan::all();
        return view('frontend.post.plans', compact('plans'));
    }
    public function getLogout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/login');
    }
    public function editProfile(Request $request)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()
                ->back()
                ->with('error', 'You need to be logged in to update your profile.');
        }
    
        // Retrieve the currently authenticated user
        $user = User::find(Auth::id());
        if (!$user) {
            return redirect()
                ->back()
                ->with('error', 'User not found.');
        }
    
        // Validate the request data
        $request->validate(
            [
                'name' => 'required|string|max:50',
                'short_bio' => 'nullable|string|max:500',
                'address' => 'nullable|string|max:500',
                'user_slug' => ['required', 'string', 'max:200', Rule::unique('users', 'user_slug')->ignore($user->id)],
                'pro_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'remove_image' => 'nullable|boolean' // Check if the remove image option was selected
            ],
            [
                'user_slug.unique' => 'The username is already taken. ' . $this->generateUsernameSuggestions($request->user_slug),
            ]
        );
    
        // Update user information
        $user->name = $request->name;
        $user->short_bio = $request->short_bio;
        $user->address = $request->address;
        $user->user_slug = $request->user_slug;
    
        // Check if the user wants to remove the profile image
        if ($request->has('remove_image') && $request->remove_image) {
            // Remove old image if it exists
            if ($user->pro_img && $user->pro_img !== 'default-image.jpg') {
                $oldImagePath = public_path('upload/user_img/' . $user->pro_img);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Remove the old image from the filesystem
                }
                $user->pro_img = 'default-image.jpg'; // Set to default image
            }
        } elseif ($request->hasFile('pro_img')) {
            // Remove old image if it exists
            if ($user->pro_img && $user->pro_img !== 'default-image.jpg') {
                $oldImagePath = public_path('upload/user_img/' . $user->pro_img);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Remove the old image
                }
            }
    
            // Upload and save the new image
            $file = $request->file('pro_img');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/user_img/'), $filename);
            $user->pro_img = $filename; // Save the new filename to the user model
        }
    
        // Save the updated user information
        $user->save();
    
        // Return response based on request type
        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Profile updated successfully!',
                'imageUrl' => asset('upload/user_img/' . ($user->pro_img ?? 'default-image.jpg')),
            ]);
        }
    
        return redirect()
            ->back()
            ->with('message', 'Profile updated successfully.');
    }
    
    private function generateUsernameSuggestions($user_slug)
    {
        $suggestions = [$user_slug . rand(1, 99), $user_slug . '_' . rand(1, 99), $user_slug . 'user'];

        return implode(', ', $suggestions);
    }

    public function destroy($id)
{
    $post = Post::findOrFail($id);

    if ($post->user_id !== Auth::id()) {
        return redirect()->back()->withErrors(['error' => 'Unauthorized action.']);
    }

    // Delete the post
    $post->delete();

    // Redirect with success message
    return redirect()->back()->with('success', 'Post deleted successfully.');
}
    public function about()
    {
        return view('frontend.page.about');
    }
}
