<?php

namespace Pc\Designpatterns\CreationalPattern\ProtoType;

class BaseInvoice implements InvoicePrototype
{

    public string $title;
    public array $items = [];
    public string $note = '';

    public function __construct()
    {
        $this->title = 'Standard Invoice';
        $this->items = [['name' => 'Consulting Service', 'price' => 1000]];
    }

    public function clone(): InvoicePrototype
    {
        return clone $this;
    }


    public function __clone(): void
    {
        // Custom logic for cloning can be added here
        // For example, if you want to reset some properties
        // $this->note = '';
    }
}