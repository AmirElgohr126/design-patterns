<?php
namespace Pc\Designpatterns\CreationalPattern\ProtoType;

require __DIR__ . '/../../../vendor/autoload.php';

$baseInvoice = new BaseInvoice();
$baseInvoice->title = 'Invoice for Client ABC';
$baseInvoice->items[] = ['name' => 'Design', 'price' => 500];


$clientInvoice = $baseInvoice->clone();
$clientInvoice->title = 'Invoice for Client XYZ';
echo '<pre>';
var_dump($baseInvoice, $clientInvoice); // Different objects, same base

