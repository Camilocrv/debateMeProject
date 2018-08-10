<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  public function getUsers()
  {
    $user = DB::table('users')->get();
    return view('layouts/welcomeView', ['users' => $user]);
  }
  public function getPosts()
  {
    $posts = DB::table('posts')->get();
    return view('layouts/welcomeView', ['posts' => $posts]);
  }
  // public function getComments()
  // {
  //   $comments = DB::table('');
  // }
}
