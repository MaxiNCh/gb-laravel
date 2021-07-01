<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  protected array $categories = [
    [
      'id' => 0,
      'title' => 'Sport',
      'news' => [
        [
          'id' => 0,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 1,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 2,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 3,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 4,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ]
      ]
    ],
    [
      'id' => 1,
      'title' => 'Politic',
      'news' => [
        [
          'id' => 0,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 1,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 2,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 3,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 4,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ]
      ]
    ],
    [
      'id' => 2,
      'title' => 'Culture',
      'news' => [
        [
          'id' => 0,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 1,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 2,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 3,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 4,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ]
      ]
    ],
    [
      'id' => 3,
      'title' => 'Hi-tech',
      'news' => [
        [
          'id' => 0,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 1,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 2,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 3,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ],
        [
          'id' => 4,
          'title' => 'Some title',
          'text' => 'The Str::random method generates a random string of the specified length. This function uses PHP random_bytes function'
        ]
      ]
    ]
  ];
}
