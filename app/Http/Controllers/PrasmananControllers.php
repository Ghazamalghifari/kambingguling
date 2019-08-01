<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prasmanan; 
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB; 
use Auth; 
use Session;

class PrasmananControllers extends Controller
{
    //
     public function index(Request $request, Builder $htmlBuilder)
     {
         if ($request->ajax()) {
             $prasmanan = Prasmanan::all();
             return Datatables::of($prasmanan)
                 ->addColumn('action', function($prasmanans){
                     return view('datatable._action', [
                         'model'    => $prasmanans,
                         'form_url' => route('prasmanan.destroy', $prasmanans->id),
                         'edit_url' => route('prasmanan.edit', $prasmanans->id)
                         ]);
                 })->make(true);
         }
         $html = $htmlBuilder
          ->addColumn(['data' => 'harga_1', 'name' => 'harga_1', 'title' => 'Paket A'])
          ->addColumn(['data' => 'harga_2', 'name' => 'harga_2', 'title' => 'Paket B'])
          ->addColumn(['data' => 'harga_3', 'name' => 'harga_3', 'title' => 'Paket C']) 
          ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);
 
          return view('hargaprasmanan')->with(compact('html'));   
      }  
      
    public function edit($id)
    {
        //
        $hargaprasmanan = Prasmanan::find($id);
        return view('hargaprasmananedit')->with(compact('hargaprasmanan'));
    }
    public function update(Request $request, $id)
    {  
       Prasmanan::where('id', $id) ->update([ 
           'harga_1' =>$request->harga_1,
           'harga_2'=>$request->harga_2,
           'harga_3'=>$request->harga_3 
           ]);
        return redirect()->route('prasmanan.index');
    }
}
