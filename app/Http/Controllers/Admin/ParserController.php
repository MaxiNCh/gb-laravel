<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\ParserInterface;
use App\Http\Controllers\Controller;
use App\Models\News;

class ParserController extends Controller
{
  public function __invoke(Request $request, ParserInterface $parser)
  {
    $parsedData = $parser->getParsedData("https://news.yandex.ru/sport.rss");
    $preparedNews = $parser->prepareNews($parsedData);
    $news = News::insert($preparedNews);

    if ($news) {
      return redirect()->route('admin.news.index');
    }

    return back()->with('error', 'Problem with saving news');
  }
}
