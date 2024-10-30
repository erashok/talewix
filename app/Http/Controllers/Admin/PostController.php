<?php

namespace App\Http\Controllers\Admin;
use App\Models\category;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\PostFormRequest;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
     public function create(){
        $category = Category:: where('status','1')->get();
        return view('admin.post.create', compact('category'));
    }

    public function store(PostFormRequest $request)
    {
        // Validate and extract the data
        $data = $request->validated();
        
        // Create a new Post instance
        $post = new Post;
        $post->category_id = $data['category_id'];
        $post->name = $data['name'];
        $post->slug = Str::slug($data['slug']);
        $post->short_description = $data['short_description'];
        $post->description = $data['description'];
    
        // Handle tags: Convert comma-separated string to array and limit to 5
        $tags = explode(',', $data['tags']);
        $tags = array_map('trim', $tags);
        if (count($tags) > 5) {
            return redirect()->back()->withErrors(['tags' => 'You can only add up to 5 tags.'])->withInput();
        }
        $post->tags = json_encode($tags);
    
        // Handle YouTube Frame (optional)
        $post->yt_frame = $data['yt_frame'] ?? null;
    
        // Handle image upload
        if ($request->hasFile('thum_image')) {
            try {
                $file = $request->file('thum_image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload/post'), $filename);
                $post->thum_image = $filename;
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['thum_image' => 'Image upload failed. Please try again.'])->withInput();
            }
        } else {
            $post->thum_image = 'default-image.jpg'; // Use a default image if none is uploaded
        }
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->meta_keyword = $data['meta_keyword'];
        $post->ads_main = $request->boolean('ads_main') ? '1' : '0';
        $post->ads_sidebar = $request->boolean('ads_sidebar') ? '1' : '0';
        $post->right_sidebar = $request->boolean('right_sidebar') ? '1' : '0';
        $post->status = $request->boolean('status') ? '1' : '0';
        $post->created_by = Auth::user()->id;
        $post->save();
        return redirect('/admin/posts')->with('message', 'Post Added Successfully');
    }
        public function edit($post_id){
            $category = Category::where('status','1')->get();
            $post = Post::find($post_id);
            return view('admin.post.edit', compact('post','category'));
        }

        public function update(PostFormRequest $request, $post_id)
        {
            $data = $request->validated();
            $post = Post::find($post_id);
        
            $post->category_id = $data['category_id'];
            $post->name = $data['name'];
            $post->slug = Str::slug($data['slug']);
            $post->short_description = $data['short_description'];
            $post->description = $data['description'];
        
            if (!empty($data['tags'])) {
                $tags = explode(',', $data['tags']);
                $tags = array_map('trim', $tags);
                if (count($tags) > 5) {
                    return redirect()->back()->withErrors(['tags' => 'You can only add up to 5 tags.'])->withInput();
                }
        
                $post->tags = json_encode($tags);
            } else {
                $post->tags = null;
            }
        
            $post->yt_frame = $data['yt_frame'] ?? null;
        
            try {
                if ($request->hasFile('thum_image')) {
                    $file = $request->file('thum_image');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $file->move('upload/post/', $filename);
                    $post->thum_image = $filename;
                } else {
                    // If no new image is uploaded, keep the existing one
                    $post->thum_image = $post->thum_image;
                }
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['thum_image' => 'Image upload failed.'])->withInput();
            }
        
            $post->meta_title = $data['meta_title'];
            $post->meta_description = $data['meta_description'];
            $post->meta_keyword = $data['meta_keyword'];
            
            // Removed the line that updates status
            // $post->status = $request->boolean('status') ? '1' : '0';
            
            $post->created_by = Auth::user()->id;
        
            // Use the update method to save changes
            $post->update();
        
            return redirect('admin/posts')->with('message', 'Post updated Successfully');
        }
        
            public function destroy($post_id){
                $post = Post::find($post_id);
                $post->delete();
                return redirect('admin/posts')->with('message', 'Post delete Successfully');
            }
    
}