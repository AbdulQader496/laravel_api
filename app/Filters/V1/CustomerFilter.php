<?php 

namespace App\Filters\V1;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class CustomerFilter extends ApiFilter {
    protected $allowedParms = [
        'postalCode' => ['eq', 'gt', 'lt'],
        'name' => ['er'],
        'type' => ['eq'],
        'email' => ['er'],
        'address' => ['eq'],
        'city' => ['er'],
        'state' => ['eq'],
        'country' => ['eq']
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}