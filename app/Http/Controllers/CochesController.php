<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coches;
use App\Marcas;
class CochesController extends Controller
{
  
  public function Index() {
   
   $coches = Coches::all();
  $marcas = Marcas::all();
   return view('coches.coches_list')
   ->with('coches', $coches)
   ->with('marcas', $marcas);
  }
  
  public function Marcas() {
    
    $marcas = Marcas::all();
    return view('coches.marcas_list')
    ->with('marcas', $marcas);
  }
  
  public function listar_coches() {
    
    $coches = Coches::all();
    $max = count($coches);
    for($i = 0; $i < $max; $i++) {
      $coches[$i] -> marca_nombre = $coches[$i] -> marcas;
    }
    return json_encode($coches);
  }
  
  public function Delete(Request $request) {
    $id = $request->input('id');
    $coche = Coches::find($id); 
    $coche -> delete();
  }
  
  public function Edit(Request $request) {
    $id = $request->input('id_edit');
    $nombre = $request->input('nombre_edit');
    $caract = $request->input('carac_edit');
    $marca_id = $request->input('marca_edit');
    $coche = Coches::find($id); 
    $coche -> marca_id = $marca_id;
    $coche -> caracteristica = $caract;
    $coche -> nombre = $nombre;
    $coche -> save();
  }
  
  public function Add(Request $request) {
    $coche = new Coches;
    $coche->nombre = $request->input('nombre');
    $coche->caracteristica = $request->input('carac');
    $coche->marca_id = $request->input('marca');
    $coche->save();
  }
}
