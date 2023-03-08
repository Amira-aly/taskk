<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    // get
    // http://127.0.0.1:8000/api/posts
    public function index(){
        return Post::orderBy('id', 'DESC')->get();
    }
}
