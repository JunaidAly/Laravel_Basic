<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\CustomerController;
// class Customer extends Model
// {
//     use HasFactory;
//     protected $table = "customer";
//     protected $primary_key = 'customer-id';
//     function getCustomer()
//     {
//         $data= DB::table('customer')->get();
//         // dd($data);
//         return $data;
//     }
// }

class Customer
{
    function getCustomer()
    {
        $data= DB::table('customer')->get();
        // dd($data);
        return $data;
    }  
}
