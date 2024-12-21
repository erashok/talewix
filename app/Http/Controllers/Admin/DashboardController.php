<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index(){
        $categories = category::count();
        $posts = Post::count();
        $users = User::where('role_as','0')->count();
        $admins = User::where('role_as','1')->count();
        return view('admin.dashboard', compact('categories', 'posts', 'users', 'admins'));
    }
     public function useraccount(){
        return view('admin.useraccount');
    }
}
