<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
     function showCustomers(){
         $data = Customer::all();
        return view ('customerlist', ['customers' => $data]);
     }

     function deleteCustomer($ID){
          $data = Customer::find($ID);
          $data -> delete();
          return redirect('customerslist');
     }

     function showCustomerToEdit($ID){
          $data = Customer::find($ID);
          return view ('customereditform', ['data' => $data]);
  
      }
  
      function updateData(Request $req){
          $data = Customer::find($req -> id);   
          $data -> custname = $req -> custname; 
          $data -> c_address = $req -> c_address; 
          $data -> c_phone = $req -> c_phone; 
          $data -> save();
          return redirect('customerslist');
      }





}
