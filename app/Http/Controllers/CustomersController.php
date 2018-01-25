<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import customer model
use App\Customer;
class CustomersController extends Controller
{
    /** Shows all collection of the model
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view("customers.index", ["customers" => $customers]);
    }

    /** display the view to  form to create a new customer
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = new Customer();
        return view("customers.create", ["customer" => $customer]);
    }

    /** the create form sends the info to store to save the customer
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->schema = $request->esquema;
        $customer->rfc = $request->rfc;
        $customer->curp = $request->curp;
        $customer->dob = $request->dob;

        if ($customer->save())
            return redirect("/customers");
        else
            return view("customers.create", ["customer" => $customer]);

    }

    /**  shows product with ID
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /** shos form to edit product with that Id
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $customer = Customer::find($id);
        return view("customers.edit", ["customer" => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->schema = $request->esquema;
        $customer->rfc = $request->rfc;
        $customer->curp = $request->curp;
        $customer->dob = $request->dob;

        if ($customer->save())
            return redirect("/customers");
        else
            return view("customers.edit", ["customer" => $customer]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Customer::destroy($id);
        return redirect('/customers');

    }
}
