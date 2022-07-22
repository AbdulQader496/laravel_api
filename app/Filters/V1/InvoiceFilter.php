<?php 

namespace App\Filters\V1;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class InvoiceFilter extends ApiFilter {
    protected $allowedParms = [

        'customerId' => ['er'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['er', 'ne'],
        'billedDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'paidDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],

    ];

    protected $columnMap = [

        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];
}