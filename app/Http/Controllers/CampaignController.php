<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CampaignController extends Controller
{
    public function index(){
    	$posts = Post::all();
        return view('organization.campaigns', compact('posts'));
    }
    public function welcome(){
        $post = Post::all();
        return view('welcome', compact('post'));
    }
}
