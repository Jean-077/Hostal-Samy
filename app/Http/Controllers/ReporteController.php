<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Barryvdh\DomPDF\Facade as Pdf;

class ReporteController extends Controller
{
    public function index(){
        return view('reportes.index');
    }
    public function clientepdf(){
        $clientes = Cliente::all();
        $pdf = Pdf::loadView('pdf.invoice', compact('clientes'));
        return $pdf->download('lista_clientes.pdf');
    }

    
}
