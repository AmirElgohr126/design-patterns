<?php

namespace Pc\Designpatterns\CreationalPattern\BuilderPattern\Contracts;

use Pc\Designpatterns\CreationalPattern\BuilderPattern\Product\Invoice;

/**
 * Interface InvoiceBuilder
 * @package Pc\Designpatterns\CreationalPattern\BuilderPattern\Contracts
 *
 * This interface defines the methods for building an invoice.
 * It allows setting various properties of the invoice such as invoice number, customer details, items, tax, due date, notes, and status.
 */
interface InvoiceBuilder
{
    public function setInvoiceNumber(string $invoiceNumber): self;

    public function setCustomer(string $customerName , string $customerEmail): self;

    public function addItem(string $name ,string $description, float $amount): self;

    public function setTax(float $tax): self;

    public function setDueDate(string $dueDate): self;

    public function addNotes(string $notes): self;

    public function setStatus(string $status): self;

}