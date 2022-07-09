<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Habitacione;
use App\Models\Categoria;
use App\Models\Piso;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index() {

        $habitaciones = Habitacione::all();
        $categorias = Categoria::all();
        $pisos = Piso::all();
        return view('reservas.index',compact('habitaciones', 'categorias','pisos'));
    }
    public function create(Habitacione $habitacion){
        $habitaciones = Habitacione::all();
        $categorias = Categoria::all();
        $pisos = Piso::all();
        return view('reservas.create', compact('habitacion', 'categorias','pisos'));
    }
    public function store(){
        
    }
}
