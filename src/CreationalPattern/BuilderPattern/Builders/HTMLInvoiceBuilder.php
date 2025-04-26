<?php

namespace Pc\Designpatterns\CreationalPattern\BuilderPattern\Builders;


class HTMLInvoiceBuilder extends AbstractInvoiceBuilder
{


    public function getInvoice(): string
    {
        $builtInvoice = $this->generateHTML();
        $this->reset();
        return $builtInvoice;
    }

    private function generateHTML(): string
    {
        $html =
            '<!DOCTYPE html>
<html>
<head>
    <title>Invoice ' . htmlspecialchars($this->invoice->invoiceNumber) . '</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .invoice-header { margin-bottom: 20px; }
        .customer-info { margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .total { font-weight: bold; text-align: right; }
        .notes { margin-top: 20px; }
    </style>
</head>
<body>
    <div class="invoice-header">
        <h1>Invoice: ' . htmlspecialchars($this->invoice->invoiceNumber) . '</h1>
        <p>Date: ' . htmlspecialchars($this->invoice->invoiceDate) . '</p>
        <p>Status: ' . htmlspecialchars($this->invoice->status) . '</p>
        <p>Type: ' . htmlspecialchars($this->invoice->type) . '</p>
    </div>
    
    <div class="customer-info">
        <h2>Customer Information</h2>
        <p>Name: ' . htmlspecialchars($this->invoice->customerName) . '</p>
        <p>Email: ' . htmlspecialchars($this->invoice->customerEmail) . '</p>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>';

        $total = 0;
        foreach ($this->invoice->items as $item) {
            $html .= '
            <tr>
                <td>' . htmlspecialchars($item['name']) . '</td>
                <td>' . htmlspecialchars($item['description']) . '</td>
                <td>$' . number_format($item['amount'], 2) . '</td>
            </tr>';
            $total += $item['amount'];
        }

        $html .= '
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2" class="total">Subtotal:</td>
                <td>$' . number_format($total, 2) . '</td>
            </tr>
            <tr>
                <td colspan="2" class="total">Tax (' . htmlspecialchars($this->invoice->tax) . '%):</td>
                <td>$' . number_format($total * ($this->invoice->tax / 100), 2) . '</td>
            </tr>
            <tr>
                <td colspan="2" class="total">Total:</td>
                <td>$' . number_format($total * (1 + $this->invoice->tax / 100), 2) . '</td>
            </tr>
        </tfoot>
    </table>';

        if (!empty($this->invoice->notes)) {
            $html .= '
    <div class="notes">
        <h3>Notes</h3>
        <p>' . nl2br(htmlspecialchars($this->invoice->notes)) . '</p>
    </div>';
        }

        $html .= '
</body>
</html>';

        return $html;
    }
}