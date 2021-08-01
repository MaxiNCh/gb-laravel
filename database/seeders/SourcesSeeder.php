<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Seeder;

class SourcesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Source::insert([
      [
        'url' => 'https://news.yandex.ru/auto.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/auto_racing.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/army.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/gadgets.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/index.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/martial_arts.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/communal.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/health.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/games.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/internet.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/cyber_sport.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/movies.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/cosmos.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/culture.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/championsleague.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/music.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'url' => 'https://news.yandex.ru/nhl.rss',
        'created_at' => now(),
        'updated_at' => now(),
      ],
    ]);
  }
}
