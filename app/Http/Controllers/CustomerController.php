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

    function actualizar($id) {
        $cliente = DB::table('customers')
                        ->where('customerNumber', $id)
                        ->first();
        return view('clientes-actualizar', compact('cliente'));
    }

    function guardar() {
        print_r($_POST);
        DB::table('customers')->insert([
            'customerName' => $_POST['contactFirstName'],
            'contactFirstName' => $_POST['contactFirstName'],
            'contactLastName' => $_POST['contactLastName'],
            'phone' => $_POST['phone'],
            'addressLine1' => $_POST['addressLine1'],
            'city' => 'Lima',
            'country' => 'Peru'
        ]);
        return redirect()->route('clientes');
    }

    function editar($id) {
        DB::table('customers')
        ->where('customerNumber', $id)
        ->update([
            'customerName' => $_POST['contactFirstName'],
            'contactFirstName' => $_POST['contactFirstName'],
            'contactLastName' => $_POST['contactLastName'],
            'phone' => $_POST['phone'],
            'addressLine1' => $_POST['addressLine1'],
            'city' => 'Lima',
            'country' => 'Peru'
        ]);
        return redirect()->route('clientes');
    }
}

