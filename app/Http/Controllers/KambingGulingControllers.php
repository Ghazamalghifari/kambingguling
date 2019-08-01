<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KambingGuling; 
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB; 
use Auth; 
use Session;

class KambingGulingControllers extends Controller
{
    //
     public function index(Request $request, Builder $htmlBuilder)
     {
         if ($request->ajax()) {
             $kambingguling = KambingGuling::all();
             return Datatables::of($kambingguling)
                 ->addColumn('action', function($kambinggulings){
                     return view('datatable._action', [
                         'model'    => $kambinggulings,
                         'form_url' => route('kambingguling.destroy', $kambinggulings->id),
                         'edit_url' => route('kambingguling.edit', $kambinggulings->id)
                         ]);
                 })->make(true);
         }
         $html = $htmlBuilder
          ->addColumn(['data' => 'harga_1', 'name' => 'harga_1', 'title' => 'Paket Standard'])
          ->addColumn(['data' => 'harga_2', 'name' => 'harga_2', 'title' => 'Paket Medium'])
          ->addColumn(['data' => 'harga_3', 'name' => 'harga_3', 'title' => 'Paket Spesial'])
          ->addColumn(['data' => 'harga_4', 'name' => 'harga_4', 'title' => 'Paket Komplit']) 
          ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);
 
          return view('hargakambingguling')->with(compact('html'));   
      }  
      
    public function edit($id)
    {
        //
        $hargakambingguling = KambingGuling::find($id);
        return view('hargakambinggulingedit')->with(compact('hargakambingguling'));
    }
    public function update(Request $request, $id)
    {  
       KambingGuling::where('id', $id) ->update([ 
           'harga_1' =>$request->harga_1,
           'harga_2'=>$request->harga_2,
           'harga_3'=>$request->harga_3,
           'harga_4'=>$request->harga_4
           ]);
        return redirect()->route('kambingguling.index');
    }
}
