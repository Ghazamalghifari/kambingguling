<?php

namespace App\Http\Controllers;
use App\Tentang; 
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB; 
use Auth; 
use Session;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    //
     public function index(Request $request, Builder $htmlBuilder)
     {
         if ($request->ajax()) {
             $tentang = Tentang::all();
             return Datatables::of($tentang)
                 ->addColumn('action', function($tentangs){
                     return view('datatable._action', [
                         'model'    => $tentangs,
                         'form_url' => route('tentang.destroy', $tentangs->id),
                         'edit_url' => route('tentang.edit', $tentangs->id),
                         'confirm_message' => 'Yakin Mau Mengapus Sekolah ' . $tentangs->nama_sekolah . '?'
                         ]);
                 })->make(true);
         }
         $html = $htmlBuilder
          ->addColumn(['data' => 'tentang_kami', 'name' => 'tentang_kami', 'title' => 'Tentang'])
          ->addColumn(['data' => 'gmail', 'name' => 'gmail', 'title' => 'Gmail'])
          ->addColumn(['data' => 'facebook', 'name' => 'facebook', 'title' => 'Facebook'])
          ->addColumn(['data' => 'instagram', 'name' => 'instagram', 'title' => 'Instagram'])
          ->addColumn(['data' => 'whatsapp', 'name' => 'whatsapp', 'title' => 'Whatsapp'])
          ->addColumn(['data' => 'telphone', 'name' => 'telphone', 'title' => 'Telphone'])
          ->addColumn(['data' => 'alamat', 'name' => 'alamat', 'title' => 'Alamat'])
          ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);
 
          return view('tentang')->with(compact('html'));   
      }  
      
    public function edit($id)
    {
        //
        $tentang = Tentang::find($id);
        return view('tentangedit')->with(compact('tentang'));
    }

}
