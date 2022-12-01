<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    function listar() {
        $clientes = Customer::get();
        return dd($clientes);
    }

    function index() {
        $listado = DB::table("customers")->get();
        return view('clientes', compact('listado'));
    }

    function registrar() {
        return view('clientes-registrar');
    }

    function guardar() {
        DB::table('customers')->insert([
            'customerName' => 'Cualquiercosa',
            'contactFirstName' => $_POST['contacFirstName'],
            'contactLastName' => $_POST['contactLastName'],
            'phone' => $__POST['phone'],
            'addressLine1' => $_POST['addresLine1'],
            'city' => 'Lima',
            'country' => 'Peru'
        ]);
        return redirect()->route('clientes');
    }
}

