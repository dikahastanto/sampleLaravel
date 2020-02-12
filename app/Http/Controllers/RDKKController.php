<?php

namespace App\Http\Controllers;
use App\RDKK;
use Illuminate\Http\Request;

class RDKKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RDKK::paginate(10);
        return view('admin.tampilRDKK')->with(['listData' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inputRDKK');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $input = RDKK::insert($data);
        $respon = array();
        if ($input) {
            $respon = [
                'afterInput' => true,
                'sukses' => true,
                'msg' => 'Berhasil Input Data RDKK'
            ];
        } else {
            $respon = [
                'afterInput' => true,
                'sukses' => false,
                'msg' => 'Gagal Input Data RDKK'
            ];
        }
        return redirect()->route('showRDKK')->with($respon);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RDKK::where('idRDKK', $id)->first();
        return view('admin.formeditRDKK')->with(['data' => $data]);
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
        $data = $request->all();
        unset($data['_token']);
        $update = RDKK::where('idRDKK', $id)
                        ->update($data);
        $respon = array();
        if ($update) {
            $respon = [
                'afterInput' => true,
                'sukses' => true,
                'msg' => 'Berhasil Update Data RDKK'
            ];
        } else {
            $respon = [
                'afterInput' => true,
                'sukses' => false,
                'msg' => 'Gagal Update RDKK'
            ];
        }
        return redirect()->route('showRDKK')->with($respon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = RDKK::where('idRDKK', $id)->delete();
        $respon = array();
        if ($delete) {
            $respon = [
                'afterInput' => true,
                'sukses' => true,
                'msg' => 'Berhasil Menghapus Data RDKK'
            ];
        } else {
            $respon = [
                'afterInput' => true,
                'sukses' => false,
                'msg' => 'Gagal Menghapus RDKK'
            ];
        }
        return redirect()->route('showRDKK')->with($respon);

    }
}
