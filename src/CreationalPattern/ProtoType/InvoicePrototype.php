<?php

namespace Pc\Designpatterns\CreationalPattern\ProtoType;

interface InvoicePrototype
{
    public function clone(): InvoicePrototype;

}