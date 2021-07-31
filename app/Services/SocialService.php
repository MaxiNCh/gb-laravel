<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User as Model;
use App\Contracts\SocialInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Contracts\User;

class SocialService implements SocialInterface
{
  public function userInit(User $user): bool
  {
    $userData = Model::where(['email' => $user->getEmail()])->first();
    if ($userData) {
      $userData->name = $user->getName();
      $userData->avatar = $user->getAvatar();

      if ($userData->save()) {
        Auth::loginUsingId($userData->id);

        return true;
      }
    } else {
      $newUser = new Model();
      $newUser->email = $user->getEmail();
      $newUser->name = $user->getName();
      $newUser->password = Hash::make('password');
      $newUser->avatar = $user->getAvatar();
      $newUser->save();
    }

    // throw new \Exception('Could not save user');
  }
}
