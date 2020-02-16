<?php

namespace App\Http\Controllers;
use App\RUT;
use Illuminate\Http\Request;

class RUTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RUT::paginate(10);
        return view('admin.tampilRUT')->with(['listData' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = RUT::insert($request->all());
        $respon;
        if ($input) {
            $respon = [
                'sukses' => true,
                'msg' => 'Berhasil Input Data RUT'
            ];
        } else {
            $respon = [
                'sukses' => false,
                'msg' => 'Gagal Input Data RUT'
            ];
        }
        return $respon;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        $data = RUT::where('nik', $nik)->first();
        $respon;
        if ($data) {
            $respon = [
                'sukses' => true,
                'msg' => 'Berhasil Mendapatkan Data',
                'result' => $data
            ];
        } else {
            $respon = [
                'sukses' => false,
                'msg' => 'Anda Belum Mengisi RUT',
                'result' => null
            ];
        }
        return $respon;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
