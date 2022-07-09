<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() {

        $clientes = Cliente::all();

        return view('clientes.index', compact('clientes'));
    }
    public function create() {
        return view('clientes.create');
    }

    public function store(Request $request) {
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->dni = $request->dni;
        $cliente->correo = $request->correo;

        $cliente->save();

        return redirect()->route('clientes.index');
    }

    public function show(Cliente $cliente) {
                
        return view('clientes.show',compact('cliente')); 
    }

    public function edit(Cliente $cliente) {
        //$cliente = Cliente::find($id);

       return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente){
        
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->dni = $request->dni;
        $cliente->correo = $request->correo;
        
        $cliente->save();
        
        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente) {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }



}
