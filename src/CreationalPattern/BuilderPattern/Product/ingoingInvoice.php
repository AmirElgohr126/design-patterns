<?php

namespace Pc\Designpatterns\CreationalPattern\BuilderPattern\Product;

class ingoingInvoice extends Invoice
{

    public function __construct()
    {
        $this->type = 'ingoing';
    }


}