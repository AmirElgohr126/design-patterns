<?php

namespace Pc\Designpatterns\CreationalPattern\BuilderPattern\Builders;

use Pc\Designpatterns\CreationalPattern\BuilderPattern\Contracts\InvoiceBuilder;
use Pc\Designpatterns\CreationalPattern\BuilderPattern\Factory\InvoiceFactory;
use Pc\Designpatterns\CreationalPattern\BuilderPattern\Product\Invoice;

abstract class  AbstractInvoiceBuilder implements InvoiceBuilder
{

    protected Invoice $invoice;

    public function __construct(string $type='outgoing')
    {
        $this->invoice = InvoiceFactory::createInvoice($type);
    }

    public function reset(string $type = 'outgoing'): void
    {
        $this->invoice = InvoiceFactory::createInvoice($type);
    }


    public function setInvoiceNumber(string $invoiceNumber): InvoiceBuilder
    {
        $this->invoice->invoiceNumber = $invoiceNumber;
        return $this;
    }

    public function setCustomer(string $customerName, string $customerEmail): InvoiceBuilder
    {
        $this->invoice->customerName = $customerName;
        $this->invoice->customerEmail = $customerEmail;
        return $this;
    }

    public function addItem(string $name, string $description, float $amount): InvoiceBuilder
    {
        $this->invoice->items[] =
            [
                'name' => $name,
                'description' => $description,
                'amount' => $amount
            ];
        return $this;
    }


    public function setTax(float $tax): InvoiceBuilder
    {
        $this->invoice->tax = $tax;
        return $this;
    }

    public function setDueDate(string $dueDate): InvoiceBuilder
    {
        $this->invoice->invoiceDate = $dueDate;
        return $this;
    }

    public function addNotes(string $notes): InvoiceBuilder
    {
        $this->invoice->notes = $notes;
        return $this;
    }

    public function setStatus(string $status): InvoiceBuilder
    {
        $this->invoice->status = $status;
        return $this;
    }

    abstract public function getInvoice(): mixed;



}