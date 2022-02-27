<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\User\UpdateRequest;

class UpdateController extends Controller
{
  public function __invoke(UpdateRequest $request, User $user)
  {
    $data = $request->validated();
    if (isset($data['profile_image'])) {
      $data['profile_image'] = Storage::disk('public')->put('/images/profile', $data['profile_image']);
    }
    if (isset($data['cover_image'])) {
      $data['cover_image'] = Storage::disk('public')->put('/images/profile/cover', $data['cover_image']);
    }
    $user->update($data);

    $roles = User::getRoles();
    $rolesColor = User::getRoleColor();

    return view('admin.user.show', compact('user', 'roles', 'rolesColor'));
  }
}
