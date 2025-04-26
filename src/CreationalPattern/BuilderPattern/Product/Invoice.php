<?php

namespace Pc\Designpatterns\CreationalPattern\BuilderPattern\Product;

abstract class Invoice
{
    public string $invoiceNumber;
    public string $customerName;
    public string $customerEmail;
    public string $invoiceDate;
    public array $items;
    public string $type;
    public string $tax;
    public string $notes;
    public string $status;


}