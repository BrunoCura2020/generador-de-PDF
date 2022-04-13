<?php

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
	Route::get('productos', function(){
	$productos = Producto::orderBy('created_at', 'desc')->get();
	return view('productos.index', compact('productos'));
})->name('productos.index');

Route::get('productos/create', function(){
	return view('productos.create');
})->name('productos.create');

Route::post('productos', function(Request $request){
	$newProducto = new Producto;
	$newProducto->descripcion = $request->input('descripcion');
	$newProducto->precio = $request->input('precio');
	$newProducto->save();

	return redirect()->route('productos.index')->with('info', 'Producto creado exitosamente.');
})->name('productos.store');

Route::delete('productos/{id}', function($id){
	$producto = Producto::findOrFail($id);
	$producto->delete();
	return redirect()->route('productos.index')->with('info', 'Producto eliminado exitosamente');
})->name('productos.destroy');

Route::get('productos/{id}/editar', function($id){
	$producto = Producto::findOrFail($id);
	return view('productos.edit', compact('producto'));
})->name('productos.editar');

Route::put('/producto/{id}', function(Request $request, $id){
	$producto = Producto::findOrFail($id);
	$producto->descripcion = $request->input('descripcion');
	$producto->precio = $request->input('precio');
	$producto->save();
	return redirect()->route('productos.index')->with('info', 'Producto actualizado exitosamente.');

})->name('productos.update');

});
//Route::get('/pdf', 'PDFController@PDF')->name('descargarPDF');
//Route::get('/pdf', 'App\Http\Controllers\PDFController@PDF')->name('descargarPDF');
Route::get('/pdfproductos', 'App\Http\Controllers\PDFController@PDFProductos')->name('descargarPDFproductos');
Route::get('/pdf', 'App\Http\Controllers\PDFController@PDF')->name('verPDFproductos');
Auth::routes();
