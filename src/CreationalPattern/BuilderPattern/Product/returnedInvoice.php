<?php

namespace Pc\Designpatterns\CreationalPattern\BuilderPattern\Product;

class returnedInvoice extends Invoice
{

    public function __construct()
    {
        $this->type = 'returned';
    }
}