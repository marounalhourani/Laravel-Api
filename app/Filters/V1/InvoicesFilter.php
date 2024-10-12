<?php

namespace App\Filters\V1;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter{

protected $safeParms =
[
'customerId'=>['eq'],
'amount'=>['eq','lt','lte','gt','gte'],
'status'=>['eq','ne'],
'billedDate'=>['eq','lt','lte','gt','gte'],
'paidDate'=>['eq','lt','lte','gt','gte'],

];

protected $columnMap =
[
  'customer_id'=>'customerId',
  'billed_date'=>'billderDate',
  'paid_date'=>'paidDate',


];
protected $operatorMap = [
'eq'=>'=',
'lt'=>'<',
'lte'=>'≤',
'gt'=>'>',
'gte'=>'≥',
'ne'=>'!='
];


}