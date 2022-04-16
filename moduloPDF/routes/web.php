<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; //captura todo lo que nos envia el formulario
use App\Models\Producto;

//Página principal
Route::get('productos', function(){
	$productos = Producto::all();

	return view('paginaPrincipal', compact('productos'));
})->name('inicio');

//Formulario para crear un nuevo producto
Route::get('productos/crear', function(){
	return view('crear');
})->name('crear');

//Creando el producto
Route::post('productos', function(Request $request){
	
	$nuevoProducto = new Producto;
	//La columna descripion de la base de datos será igual a lo que se capturo en el input descripcion
	$nuevoProducto->descripcion = $request->input('descripcion');
	$nuevoProducto->precio = $request->input('precio');
	$nuevoProducto->save();

	return redirect()->route('inicio')->with('info', 'Producto creado exitosamente');

})->name('lista');



Route::get('descargar', 'App\Http\Controllers\PDFController@descargarPDF')->name('descargarPDF');
Route::get('ver', 'App\Http\Controllers\PDFController@verPDF')->name('verPDF');

