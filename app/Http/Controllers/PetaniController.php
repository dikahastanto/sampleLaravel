<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petani;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $password = $pas = Hash::make($request->password);
        $data = $request->all();
        $data['password'] = $password;
        // var_dump($password);

        $input = Petani::create($data);
        $respon = array();
        if ($input) {
            $respon = [
                'afterInput' => true,
                'sukses' => true,
                'msg' => 'Berhasil Input Data Petani'
            ];
        } else {
            $respon = [
                'afterInput' => true,
                'sukses' => false,
                'msg' => 'Gagal Input Data Petani'
            ];
        }
        return redirect()->route('forminputpetani')->with($respon);
    }

    public function login (Request $request) {
        $nik = $request->nik;
        $password = $request->password;

        $response = null;
        $user = Petani::where('nik', $nik)->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {
                $apiToken = base64_encode(Str::random(40));
                $user->update([
                    'token' => $apiToken
                ]);
                $response = [
                    'sukses' => true,
                    'msg' => 'Berhasil Login',
                    'user' => $user,
                    'token' => $apiToken
                ];
            } else {
                $response = [
                    'sukses' => false,
                    'msg' => 'Password Salah'
                ];
            }
        } else {
            $response = [
                'sukses' => false,
                'msg' => 'NIK Tidak Terdaftar'
            ];
        }
        return $response;
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
