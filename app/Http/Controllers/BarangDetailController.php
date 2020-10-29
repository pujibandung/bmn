<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;
use App\Models\BarangDetail;

class BarangDetailController extends Controller
{
    //
    public function index($barang_id)
    {

    $barang_detail = BarangDetail::where('barang_id', $barang_id)->get();  
    return view('barang_detail', ['barang_detail' => $barang_detail]);

    }

   public function tambah($barang_id)
    {
        return view('barang_detail_tambah', ['barang_id' => $barang_id]);       
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
           	'kode_barang_detail' => 'required',
            'nama' => 'required',
            'barang_id' => 'required'
    	]);
 
        BarangDetail::create([
            'kode_barang_detail' => $request->kode_barang_detail,
            'nama' => $request->nama,
            'barang_id' => $request->barang_id
            			
       	]);
 
      //return view('barang_detail', ['barang_id' => $request->barang_id]);   
      $barang_id = $request->barang_id;
      $barang_detail = BarangDetail::where('barang_id', $barang_id)->get();
      

      return view('barang_detail', ['barang_detail' => $barang_detail]);
    
        
    }


    public function delete($id)
    {
               
        $barang_detail = BarangDetail::find($id);
       // $barang_id = $request->barang_id;
        $barang_detail->delete();


        $barang_id = $barang_detail->barang_id;
      
     

    $barang_detail = BarangDetail::where('barang_id', $barang_id)->get();  
    return view('barang_detail', ['barang_detail' => $barang_detail]);
    }


    public function edit($id)
    {
       $barang_detail = BarangDetail::find($id);
       return view('barang_detail_edit', ['barang_detail' => $barang_detail]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
           'kode_barang_detail' => 'required',
           'nama' => 'required'
        ]);
    
        $barang_detail = BarangDetail::find($id);
        $barang_detail->kode_barang_detail = $request->kode_barang_detail;
        $barang_detail->nama = $request->nama;
        
        $barang_detail->save();
        $barang_id = $barang_detail->barang_id;
        
        $barang_detail = BarangDetail::where('barang_id', $barang_id)->get();  
        return view('barang_detail', ['barang_detail' => $barang_detail]);

     
    }





 }   

