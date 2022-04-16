<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Producto;

class PDFController extends Controller
{
	//Te muestra en una pagina web
    public function descargarPDF(){
        $productos = Producto::all();
    	$pdf = PDF::loadView('formatoPDF', compact('productos'));
    	return $pdf->download('productos.pdf');
    }

	 public function verPDF(){
	 	$productos = Producto::all();
		$pdf = PDF::loadView('formatoPDF', compact('productos'));
		return $pdf->stream('productos.pdf');
	}
}
