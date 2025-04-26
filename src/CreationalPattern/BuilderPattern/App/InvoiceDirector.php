<?php

namespace Pc\Designpatterns\CreationalPattern\BuilderPattern\App;
use Pc\Designpatterns\CreationalPattern\BuilderPattern\Contracts\InvoiceBuilder;
class InvoiceDirector
{

    public array $items = [
        [
            'name' => 'Item 1',
            'description' => 'Description for item 1',
            'amount' => 100.00
        ],
        [
            'name' => 'Item 2',
            'description' => 'Description for item 2',
            'amount' => 200.00
        ],
        [
            'name' => 'Item 3',
            'description' => 'Description for item 3',
            'amount' => 300.00
        ]
    ];
    private InvoiceBuilder $builder;
    public function __construct (InvoiceBuilder $invoiceBuilder) {
        $this->builder = $invoiceBuilder;
    }


    public function addItems(array $data): self
    {
        foreach ($data as $item) {
            $this->builder->addItem($item['name'],$item['description'], $item['amount']);
        }
        return $this;
    }


    public function buildInvoice():void
    {
        $this->addItems($this->items);
        $this->builder
            ->setCustomer('amir','amirnagy886@gmail.com')
            ->setInvoiceNumber('INV-001')
            ->setTax(10.00)
            ->setDueDate('2023-10-01')
            ->addNotes('Thank you for your business!')
            ->setStatus('Paid');
    }


}