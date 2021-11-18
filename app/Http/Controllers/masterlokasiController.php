<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\masterlokasi;

class masterlokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masterlokasi = masterlokasi::all();
        return view('masterlokasi.index', ['masterlokasi' => $masterlokasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterlokasi.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kodelokasi' => 'required',
            'namalokasi' => 'required'
        ]);

        masterlokasi::create($validated);
        return redirect('/masterlokasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $masterlokasi = masterlokasi::where('namalokasi','LIKE','%'.$request->namalokasi.'%')->get();
        return view('masterlokasi.index', ['masterlokasi' => $masterlokasi, 'input' => $request->namalokasi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = masterlokasi::All()->firstWhere('id', $id);
        return view('masterlokasi.edit', ['masterlokasi' => $data]);
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
        masterlokasi::where('id', $id)
            ->update ([
                'kodelokasi' => $request->kodelokasi,
                'namalokasi' => $request->namalokasi
            ]);
            return redirect('/masterlokasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        masterlokasi::destroy('id', $id);
        return redirect('/masterlokasi');
    }
}
