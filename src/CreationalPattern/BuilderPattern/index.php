<?php

namespace Pc\Designpatterns\CreationalPattern\BuilderPattern;

use Pc\Designpatterns\CreationalPattern\BuilderPattern\App\InvoiceDirector;
use Pc\Designpatterns\CreationalPattern\BuilderPattern\Builders\HTMLInvoiceBuilder;

require __DIR__ . '/../../../vendor/autoload.php';

//$builder = new PDFInvoiceBuilder('outgoing');
//$director = new InvoiceDirector($builder);
//
//$director->buildInvoice();
//$invoice = $builder->getInvoice();
//echo '<pre>';
//var_dump($invoice);

$htmlBuilder = new HTMLInvoiceBuilder('outgoing');
$director = new InvoiceDirector($htmlBuilder);
$director->buildInvoice();
$htmlInvoice = $htmlBuilder->getInvoice();

// Save to file or output
file_put_contents('invoice.html', $htmlInvoice);
echo $htmlInvoice;