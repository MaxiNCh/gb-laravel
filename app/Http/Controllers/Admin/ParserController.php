<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\ParserInterface;
use App\Http\Controllers\Controller;
use App\Jobs\NewsJob;
use App\Models\News;
use App\Models\Source;

class ParserController extends Controller
{
  public function __invoke(Request $request, ParserInterface $parser)
  {

    $sources = Source::all('url');

    foreach ($sources as $source) {
      NewsJob::dispatch($source->url);
    };

    return back()->with('message', 'Operation Successful !');
  }
}
