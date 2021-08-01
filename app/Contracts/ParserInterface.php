<?php

declare(strict_types=1);

namespace App\Contracts;

interface ParserInterface
{
  public function getParsedData(string $url): array;
  public function saveNews(string $url): void;
}
