<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Gelombang;
use App\Imports\smpimport;
use App\Models\Smp;
use Illuminate\Http\Request;
use Excel;

class AdminController extends Controller
{
    // Pendaftaran
    public function daftar_admin()
    {
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::first();
        $smp = Smp::all();
    
        return view('Dashboard/pendaftar/daftar', compact('jurusan', 'gelombang', 'smp'));
    }
    public function cari_smp(Request $req)
    {
        $data = [];
        if($req->has('q')){
            $search = $req->q;
            $data = Smp::select("id","smp")
            		->where('smp','LIKE',"%$search%")
            		->get();
        }
        return response()->json($data);
    }

    // SEKOLAH

    public function add_jurusan(Request $req)
    {
        $data = Jurusan::create([
            'jurusan' => $req->jurusan
        ]);
        return redirect()->back()->with('success', 'Sukses Menambahkan Jurusan');
    }
    public function add_gelombang(Request $req)
    {
        $data = Gelombang::first();
        if($data == NULL){
            $data = Gelombang::create([
                'gelombang' => $req->gelombang,
                'status_gelombang' => $req->status_gelombang,
            ]);
            return redirect()->back()->with('success', 'Sukses Menambahkan Gelombang');

        }else{
            $data = Gelombang::first()->update([
                'gelombang' => $req->gelombang,
                'status_gelombang' => $req->status_gelombang,
            ]);
            return redirect()->back()->with('success', 'Sukses Update Gelombang');

        }
    }
    public function sekolah_smp()
    {
        $data = Smp::all();
        return view('Dashboard/sekolah/smp', compact('data'));
    }
    public function upload_smp(Request $req)
    {
        $req->validate([
            'file' => 'required|max:10000|mimes:xlsx,xls',
        ]);
    
        $path = $req->file('file');
    

        if(is_null($path)){
            return redirect()->back()->with('error', 'File Tidak Boleh Kosong');
        }else {
            Excel::import(new smpimport, $path);        
            return redirect()->back()->with('success', 'Daftar SMP berhasil di upload');
        }
    }
    public function hapus_smp($id)
    {
        $data = Smp::find($id)->delete();
        return redirect()->back()->with('success', 'SMP berhasil di Hapus');

    }
    public function reset_smp()
    {
        $data = Smp::truncate();
        return redirect()->back()->with('success', 'SMP berhasil di Hapus');

    }
}
