<?php

namespace App\Parser;

use App\Exception\InvalidParserException;
use http\Header\Parser;
use App\Parser\Supplier1Parser;
use App\Parser\FactoryInterface as ParserFactoryInterface;

class Factory implements ParserFactoryInterface{

    public function getParser(string $type): ParserInterface
    {
            if(class_exists($type)){
                return new $type;
            } else {
                throw new InvalidParserException('Parser '.$type.'not exists');
            }
    }
}