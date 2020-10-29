<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\barang;
use App\Models\Barang;
use App\Models\Barang_Detail;



class BarangController extends Controller
{
    
    /* INDEX RELASI

    public function index(){
   	 $barang = Barang::all();
    	 return view('barang',['barang' => $barang]);
   }
   */

    public function index()
    {
        //
        $barang = Barang::all();
        return view('barang', ['barang' => $barang]);
    }  

    public function tambah()
    {
    	return view('barang_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
           	'kode' => 'required',
			'nama' => 'required'
    	]);
 
        Barang::create([
            'kode' => $request->kode,
			'nama' => $request->nama			
       	]);
 
    	return redirect('/barang');
    }

    public function edit($id)
    {
       $barang = barang::find($id);
       return view('barang_edit', ['barang' => $barang]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
           'kode' => 'required',
           'nama' => 'required'
        ]);
    
        $barang = barang::find($id);
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        
        $barang->save();
        return redirect('/barang');
    }

    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }


}
