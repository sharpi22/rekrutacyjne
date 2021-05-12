<?php

namespace App\Supplier;

const _DOMAIN_NAME_ = 'public.test';

class Supplier1 extends SupplierAbstract
{
    public static function getName(): string
    {
        return 'supplier1';
    }

    public static function getResponseType(): string
    {
        return 'xml';
    }

    protected function parseResponse(): array
    {
        return $this->parser->parse($this->getResponse());
    }

    protected function getResponse(): string|bool
    {
        return file_get_contents('http://'._DOMAIN_NAME_.'/suppliers/supplier1.xml');
    }
}
