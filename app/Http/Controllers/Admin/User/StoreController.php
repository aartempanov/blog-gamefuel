<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Jobs\StoreUserJob;

class StoreController extends Controller
{
  public function __invoke(StoreRequest $request)
  {
    $data = $request->validated();
    $data['profile_image'] = Storage::disk('public')->put('/images/profile', $data['profile_image']);
    $data['cover_image'] = Storage::disk('public')->put('/images/profile/cover', $data['cover_image']);

    StoreUserJob::dispatch($data);

    return redirect()->route('admin.user.index');
  }
}
