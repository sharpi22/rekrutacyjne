<?php

namespace App\Supplier;

use App\Event\IntegrationEvents;
use App\Exception\InvalidSupplierException;
use App\Listener\ProductsListener;
use App\Parser\FactoryInterface as ParserFactoryInterface;

use Symfony\Component\EventDispatcher\EventDispatcher;

class Factory implements FactoryInterface
{
    const SUPPLIER_1 = 'Supplier1';
    const SUPPLIER_2 = 'Supplier2';
    const SUPPLIER_3 = 'Supplier3';

    protected ParserFactoryInterface $parserFactory;

    protected EventDispatcher $eventDispatcher;

    public function __construct(ParserFactoryInterface $parserFactory)
    {
        $this->parserFactory = $parserFactory;
        //$this->eventDispatcher = $eventDispatcher;

       // $this->eventDispatcher->addListener(
         //   IntegrationEvents::SUPPLIER_GET_PRODUCTS,
           // array(new ProductsListener(), 'logProducts')
        //);
    }

    public function getSupplier($supplierName): SupplierInterface
    {
        if(class_exists($supplierName)){
            return new $supplierName;
        } else {
            throw new InvalidSupplierException('Supplier class '.$supplierName.'not found');
        }
       }
}
