<?php

namespace Pc\Designpatterns\CreationalPattern\BuilderPattern\Factory;

use Pc\Designpatterns\CreationalPattern\BuilderPattern\Product\ingoingInvoice;
use Pc\Designpatterns\CreationalPattern\BuilderPattern\Product\outgoingInvoice;
use Pc\Designpatterns\CreationalPattern\BuilderPattern\Product\returnedInvoice;

class InvoiceFactory
{
    public static function createInvoice($type)
    {
        switch ($type) {
            case 'ingoing':
                return new ingoingInvoice();
            case 'outgoing':
                return new outgoingInvoice();
            case 'returned':
                return new returnedInvoice();
            default:
                throw new \InvalidArgumentException("Invalid invoice type");
        }
    }
}