<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  public function __invoke(User $user)
  {
    $route = 'user.index';
    $userData = [];

    if (auth()->check() && $user->id == auth()->user()->id) {
      $route = 'profile.index';
    }

    $userData['id'] = $user->id;
    $userData['name'] = $user->name;
    $userData['email'] = $user->email;
    $userData['role'] = $user->role;
    $userData['profile_image'] = $user->profile_image;
    $userData['cover_image'] = $user->cover_image;
    $userData['liked_posts_count'] = count($user->likedPosts);
    $userData['liked_post'] = $user->likedPosts;

    $roles = User::getRoles();
    $rolesColor = User::getRoleColor();

    return view($route, compact('userData', 'roles', 'rolesColor'));
  }
}
