<?php

namespace App\Http\Controllers;
use App\Models\Ruangan;
use Illuminate\Http\Request;


class RuanganController extends Controller
{
    public function index()
    {
    //
    $ruangan = Ruangan::all();
    return view('ruangan', ['ruangan' => $ruangan]);
    }   

    public function tambah()
    {
    	return view('ruangan_tambah');
    }


    public function store(Request $request)
    {
    	$this->validate($request,[
           	'kode' => 'required',
			'nama' => 'required',
			'pj' => 'required'
    	]);
 
        Ruangan::create([
            'kode' => $request->kode,
			'nama' => $request->nama,			
    		'pj' => $request->pj
    	]);
 
    	return redirect('/ruangan');
    }

    public function edit($id)
    {
       $ruangan = Ruangan::find($id);
       return view('ruangan_edit', ['ruangan' => $ruangan]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
           'kode' => 'required',
           'nama' => 'required',
           'pj' => 'required'
        ]);
    
        $ruangan = Ruangan::find($id);
        $ruangan->kode = $request->kode;
        $ruangan->nama = $request->nama;
        $ruangan->pj = $request->pj;
        
        $ruangan->save();
        return redirect('/ruangan');
    }

    public function delete($id)
    {
        $ruangan = Ruangan::find($id);
        $ruangan->delete();
        return redirect('/ruangan');
    }

}
