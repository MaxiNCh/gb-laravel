<?php

namespace App\Http\Controllers;

use App\Contracts\SocialInterface;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
  public function login(string $driver = 'vkontakte')
  {
    return Socialite::driver($driver)->redirect();
  }

  public function callback(SocialInterface $social, $driver = 'vkontakte')
  {
    $social->userInit(
      Socialite::driver($driver)->user()
    );
    return redirect()->route('main');
  }
}
