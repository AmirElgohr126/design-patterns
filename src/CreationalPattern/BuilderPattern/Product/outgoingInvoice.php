<?php

namespace Pc\Designpatterns\CreationalPattern\BuilderPattern\Product;

class outgoingInvoice extends Invoice
{

    public function __construct()
    {
        $this->type = 'outgoing';
    }
}