<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\News;
use Illuminate\Support\Str;
use App\Contracts\ParserInterface;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserService implements ParserInterface
{
  public function getParsedData(string $url): array
  {
    $xml = XMLParser::load($url);

    return $xml->parse([
      'title' => ['uses' => 'channel.title'],
      'link' => ['uses' => 'channel.link'],
      'description' => ['uses' => 'channel.description'],
      'image' => ['uses' => 'channel.image.url'],
      'news'  => ['uses' => 'channel.item[title,link,guid,description,pubDate]'],
    ]);
  }

  public function prepareNews(array $parsedData): array
  {
    $preparedNews = array();
    foreach ($parsedData['news'] as $key => $news) {
      $preparedNews[$key]['title'] = $news['title'];
      $preparedNews[$key]['description'] = $news['description'];
      $preparedNews[$key]['slug'] = Str::slug($news['title']);
      $preparedNews[$key]['category_id'] = '11'; // Заглушка. Все новости из категории спорт
      $preparedNews[$key]['author'] = 'Yandex News';
      $preparedNews[$key]['status'] = 'PUBLISHED';
      $preparedNews[$key]['created_at'] = now();
      $preparedNews[$key]['updated_at'] = now();
    }

    return $preparedNews;
  }
}
