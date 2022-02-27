<?php

namespace App\Http\Controllers\Profile;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LikedController extends Controller
{
  public function __invoke()
  {
    $userData = [];
    $userData['name'] = Auth::user()->name;
    $userData['email'] = Auth::user()->email;
    $userData['role'] = Auth::user()->role;
    $userData['profile_image'] = Auth::user()->profile_image;
    $userData['cover_image'] = Auth::user()->cover_image;
    $userData['liked_posts_count'] = count(auth()->user()->likedPosts);
    $userData['liked_post'] = auth()->user()->likedPosts;

    $roles = User::getRoles();
    $rolesColor = User::getRoleColor();

    return view('profile.liked', compact('userData', 'roles', 'rolesColor'));
  }
}
