<?php

namespace App\Parser;

use http\Header\Parser;
use Symfony\Component\DomCrawler\Crawler;

class Supplier1Parser implements ParserInterface{

    const _SOURCE_FILE_ = string $projectDir;

    public function _construct(Crawler $crawler)
    {
        $this->crawler = $crawler;
             
    }

    public static function getType(): string
    {
        return 'xml';
    }

    public function parse(string $content): array
    {

    }

}