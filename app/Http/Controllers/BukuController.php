<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::all();
        return view('listbuku',['bukus'=>$bukus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("listbuku");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'author' => 'required',
            'sinopsis' => 'required',
            'penerbit' => 'required'
        ]);

        /* $buku = new Buku;

        $buku->judul = $request->input('judul');
        $buku->author = $request->input('author');
        $buku->sinopsis = $request->input('sinopsis');
        $buku->penerbit = $request->input('penerbit');

        $buku->save(); */
        $input = $request->all();
        $buku = Buku::create($input);
        return redirect('listbuku')->with('success', 'Buku baru telah disubmit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view("editbuku",["buku"=>$buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'author' => 'required',
            'sinopsis' => 'required',
            'penerbit' => 'required'
        ]);

        $buku = Buku::find($id)->update($request->all());
        return redirect("listbuku")->with('success','Data telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);

        $buku->delete();

        return back()->with('success','Penghapusan berhasil');
    }
}
