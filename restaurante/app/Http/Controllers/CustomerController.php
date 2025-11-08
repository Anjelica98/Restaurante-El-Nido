<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();  //returna todos los clientes de un restaurante
        return view('customers.index', compact('customers'));
    }




    public function create(){
        return view('customers.create'); //returna la vista, es decir el formulario que vemos de crear un cliente      
    }

    public function store(Request $request){
             $request->validate([
            'customerno' => 'required',    //almacena los datos que hemos introducido al crear un cliente
            'name' => 'required',          //se vera esta relación en el form del blade
            'phone' => 'required',
            'address' => 'required',
        ]);
         Customer::create($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    public function destroy(Customer $customer){
                $customer->delete();
            return redirect()->route('customers.index')->with('success', 'Customer deleted successfully!');
    }


    public function edit(Customer $customer){
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer){
            $customer->update($request->only(['customerno', 'name', 'phone', 'address']));
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');

    }
}
