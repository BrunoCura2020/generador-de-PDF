<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//otras forma de hacer
//use Barryvdh\DomPDF\Facade as PDF;
use PDF; //llamando solamente al alias
use App\Models\Producto;

class PDFController extends Controller
{
	//Te muestra en una pagina web
    public function PDF(){
        $productos = Producto::all();
    	$pdf = PDF::loadView('productos', compact('productos'));
    	return $pdf->stream('productos.pdf');
    }

    public function PDFProductos(){
    	//Nos trae todos los productos de nuesta BD sacados de los modelos
    	$productos = Producto::all();
    	$pdf = PDF::loadView('productos', compact('productos'));//compact obtiene los resultados en una array para iterar
    	return $pdf->download('productos.pdf');
    }
}


