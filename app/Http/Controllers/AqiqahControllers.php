<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aqiqah; 
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB; 
use Auth; 
use Session;

class AqiqahControllers extends Controller
{
    //
     public function index(Request $request, Builder $htmlBuilder)
     {
         if ($request->ajax()) {
             $aqiqah = Aqiqah::all();
             return Datatables::of($aqiqah)
                 ->addColumn('action', function($aqiqahs){
                     return view('datatable._action', [
                         'model'    => $aqiqahs,
                         'form_url' => route('aqiqah.destroy', $aqiqahs->id),
                         'edit_url' => route('aqiqah.edit', $aqiqahs->id)
                         ]);
                 })->make(true);
         }
         $html = $htmlBuilder
          ->addColumn(['data' => 'harga_1', 'name' => 'harga_1', 'title' => 'Paket Hemat'])
          ->addColumn(['data' => 'harga_2', 'name' => 'harga_2', 'title' => 'Paket Standard'])
          ->addColumn(['data' => 'harga_3', 'name' => 'harga_3', 'title' => 'Paket Spesial'])
          ->addColumn(['data' => 'harga_4', 'name' => 'harga_4', 'title' => 'Paket Kambing Guling']) 
          ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);
 
          return view('hargaaqiqah')->with(compact('html'));   
      }  
      
    public function edit($id)
    {
        //
        $hargaaqiqah = Aqiqah::find($id);
        return view('hargaaqiqahedit')->with(compact('hargaaqiqah'));
    }
    public function update(Request $request, $id)
    {  
       Aqiqah::where('id', $id) ->update([ 
           'harga_1' =>$request->harga_1,
           'harga_2'=>$request->harga_2,
           'harga_3'=>$request->harga_3,
           'harga_4'=>$request->harga_4
           ]);
        return redirect()->route('aqiqah.index');
    }
}
