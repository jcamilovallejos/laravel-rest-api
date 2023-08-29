<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\CustomerResource;
use App\Models\Customer;
use App\Http\Resources\Api\V1\CustomerCollection;

class CustomerController extends Controller
{
    public function index(){
        return new CustomerCollection(Customer::paginate());
    }

    public function show(Customer $customer){
        return new CustomerResource($customer);
    }
}
