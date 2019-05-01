<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Pendaftaran;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('username_admin')){
            $no = 1;
            //Chart Jenis Kelamin dan Umur 
            $datas = Pendaftaran::all();
            $anak_p = Pendaftaran::where('tgl_lahir','>=','2002-01-01')->where('jk','perempuan')->count();
            $anak_l = Pendaftaran::where('tgl_lahir','>=','2002-01-01')->where('jk','laki-laki')->count();

            $remaja_p = Pendaftaran::where('tgl_lahir','<','2002-01-01')->where('tgl_lahir','>=','1992-01-01')->where('jk','perempuan')->count();
            $remaja_l = Pendaftaran::where('tgl_lahir','<','2002-01-01')->where('tgl_lahir','>=','1992-01-01')->where('jk','laki-laki')->count();

            $dewasa_l = Pendaftaran::where('tgl_lahir','<','1992-01-01')->where('jk','laki-laki')->count();
            $dewasa_p = Pendaftaran::where('tgl_lahir','<','1992-01-01')->where('jk','perempuan')->count();

            //Chart Provinsi
            $nama_provinsi = DB::table('pendaftarans')->select('provinsi')->distinct()->get();
            for ($i=0; $i < count($nama_provinsi) ; $i++) { 
                $count_provinsi[$i] = Pendaftaran::where('provinsi',$nama_provinsi[$i]->provinsi)->count();
            }

            $pria = Pendaftaran::where('jk','Laki-Laki')->count();
            $wanita = Pendaftaran::where('jk','Perempuan')->count();

            // return dd($count_provinsi);

            return view('admin.home',compact('datas','anak_l','anak_p','remaja_p','remaja_l','wanita','pria','dewasa_p','dewasa_l','no', 'nama_provinsi', 'count_provinsi'));
        } else{
            return back();
        }
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
        //
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

    public function login_index()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        $username = Admin::all()->where('username', $request->username)->count();

        if ($username > 0) {
            $password = Admin::where('username', $request->username)->where('password', base64_encode($request->password))->count();

            if ($password > 0) {
                $no = 1;
                //Chart Jenis Kelamin dan Umur 
                $datas = Pendaftaran::all();
                $anak_p = Pendaftaran::where('tgl_lahir','>=','2002-01-01')->where('jk','perempuan')->count();
                $anak_l = Pendaftaran::where('tgl_lahir','>=','2002-01-01')->where('jk','laki-laki')->count();

                $remaja_p = Pendaftaran::where('tgl_lahir','<','2002-01-01')->where('tgl_lahir','>=','1992-01-01')->where('jk','perempuan')->count();
                $remaja_l = Pendaftaran::where('tgl_lahir','<','2002-01-01')->where('tgl_lahir','>=','1992-01-01')->where('jk','laki-laki')->count();

                $dewasa_l = Pendaftaran::where('tgl_lahir','<','1992-01-01')->where('jk','laki-laki')->count();
                $dewasa_p = Pendaftaran::where('tgl_lahir','<','1992-01-01')->where('jk','perempuan')->count();

                //Chart Provinsi
                $nama_provinsi = DB::table('pendaftarans')->select('provinsi')->distinct()->get();
                for ($i=0; $i < count($nama_provinsi) ; $i++) { 
                    $count_provinsi[$i] = Pendaftaran::where('provinsi',$nama_provinsi[$i]->provinsi)->count();
                }

                $pria = Pendaftaran::where('jk','Laki-Laki')->count();
                $wanita = Pendaftaran::where('jk','Perempuan')->count();


                // return dd($count_provinsi);
                $request->session()->put('username_admin', $request->username);

                return view('admin.home',compact('datas','anak_l','anak_p','remaja_p','remaja_l','wanita','pria','dewasa_p','dewasa_l','no', 'nama_provinsi', 'count_provinsi'));
            }else{
                return back()->with('message', 'Password yang anda masukan salah!');    
            }
        }else{
            return back()->with('message', 'Username tidak tersedia!');
        }

        // return dd($request->all());
    }
    
    public function logout(Request $request)
    {
        $request->session()->forget('username_admin');

        return redirect(url('/admin'));
    }
}
