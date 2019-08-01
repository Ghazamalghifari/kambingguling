<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NasiBox; 
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB; 
use Auth; 
use Session;

class NasiBoxControllers extends Controller
{
    //
     public function index(Request $request, Builder $htmlBuilder)
     {
         if ($request->ajax()) {
             $nasibox = NasiBox::all();
             return Datatables::of($nasibox)
                 ->addColumn('action', function($nasiboxs){
                     return view('datatable._action', [
                         'model'    => $nasiboxs,
                         'form_url' => route('nasibox.destroy', $nasiboxs->id),
                         'edit_url' => route('nasibox.edit', $nasiboxs->id)
                         ]);
                 })->make(true);
         }
         $html = $htmlBuilder
          ->addColumn(['data' => 'harga_1', 'name' => 'harga_1', 'title' => 'Paket A'])
          ->addColumn(['data' => 'harga_2', 'name' => 'harga_2', 'title' => 'Paket B'])
          ->addColumn(['data' => 'harga_3', 'name' => 'harga_3', 'title' => 'Paket C']) 
          ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);
 
          return view('harganasibox')->with(compact('html'));   
      }  
      
    public function edit($id)
    {
        //
        $harganasibox = NasiBox::find($id);
        return view('harganasiboxedit')->with(compact('harganasibox'));
    }
    public function update(Request $request, $id)
    {  
       NasiBox::where('id', $id) ->update([ 
           'harga_1' =>$request->harga_1,
           'harga_2'=>$request->harga_2,
           'harga_3'=>$request->harga_3 
           ]);
        return redirect()->route('nasibox.index');
    }
}
