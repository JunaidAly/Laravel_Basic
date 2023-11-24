<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    function getCustomer()
    {
        // $customerModel=new Customer();
        // $data=$customerModel->getCustomer();
        // return response()->json($data);
        echo "hello";   
    }
}
