<?php

declare(strict_types=1);

namespace App\Contracts;

use Laravel\Socialite\Contracts\User;

interface SocialInterface
{
  public function userInit(User $user): bool;
}
