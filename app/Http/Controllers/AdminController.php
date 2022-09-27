<?php

namespace App\Http\Controllers;

use Excel;
use App\Models\Jurusan;
use App\Models\Gelombang;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Pendaftaran
    public function daftar_admin()
    {
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::first();
      
       

        if($gelombang == null){
            $form = 'disabled';
            $button = 'type="button"';
            $name = '';
        }elseif($gelombang->status_gelombang == 'Tutup'){
            $form = 'disabled';
            $button = 'type="button"';
            $name = '';
        }elseif($gelombang->status_gelombang == 'Buka'){
            $form = '';
            $button = 'type="submit"';
        }
    
        return view('Dashboard/pendaftar/daftar', compact('jurusan', 'gelombang', 'form', 'button'));
    }
   

    public function kirim_data(Request $req)
    {
        $req->validate([
            'gelombang' => 'required',
            'jurusan' => 'required',
            'nama_siswa' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'asal_sekolah' => 'required',
            'agama' => 'required',
        ]);

        $data = Pendaftar::create([
            'gelombang'     => $req->input('gelombang'),
            'jurusan'       => $req->input('jurusan'),
            'nama_siswa'    => $req->input('nama_siswa'),
            'tempat_lahir'  => $req->input('tempat_lahir'),
            'tanggal_lahir' => $req->input('tanggal_lahir'),
            'asal_sekolah'  => $req->input('asal_sekolah'),
            'agama'         => $req->input('agama'),
            'nama_ayah'     => $req->input('nama_ayah'),
            'nama_ibu'      => $req->input('nama_ibu'),
            'status_ayah'   => $req->input('status_ayah'),
            'status_ibu'    => $req->input('status_ibu'),
            'hp_ayah'       => $req->input('hp_ayah'),
            'hp_ibu'        => $req->input('hp_ibu'),
            'hp_siswa'      => $req->input('hp_siswa'),
            'rekomendasi'   => $req->input('rekomendasi'),
            'alamat'        => $req->input('alamat'),
        ]);
        return redirect()->back()->with('success', 'Sukses Menambahkan Siswa');
    }
    public function pendaftar()
    {
        $data_pendaftar = Pendaftar::orderBy('id', 'DESC')->where('acc', '0')->where('daful', '0')->get();
        $data_acc       = Pendaftar::orderBy('id', 'DESC')->where('acc', '1')->get();
        $belum_daful    = Pendaftar::orderBy('id', 'DESC')->where('acc', '1')->where('daful', '0')->get();
        $sudah_daful    = Pendaftar::orderBy('id', 'DESC')->where('acc', '1')->where('daful', '1')->get();
        
        return view('Dashboard/pendaftar/pendaftar', compact('data_pendaftar', 'data_acc', 'belum_daful', 'sudah_daful'));
    }

    public function acc($id)
    {
        $data = Pendaftar::find($id)->update([
            'acc' => 1
        ]);
        return redirect()->back()->with('success', 'Siswa Telah Di Acc');

    }

    
    public function daful($id)
    {
        $data = Pendaftar::find($id)->update([
            'daful' => 1
        ]);
        return redirect()->back()->with('success', 'Siswa Telah Daftar Ulang');

    }


    public function lihat($id)
    {
        $data = Pendaftar::find($id);
        return view('Dashboard/pendaftar/lihat', compact('data'));
    }

    public function hapus_siswa($id)
    {
        $data = Pendaftar::find($id)->delete();
        return redirect()->back()->with('success', 'Data Siswa Berhasil Di Hapus');
    }

    public function acc_massal(Request $req)
    {
        $cek = Pendaftar::where('gelombang', $req->gelombang)->first();
        if($cek == NULL){
            return redirect()->back()->with('error', 'Gelombang Tersebut Belum Ada');
        }else{
            $data = Pendaftar::where('gelombang', $req->gelombang)->update([
                'acc' => 1
            ]);
            return redirect()->back()->with('success', 'Gelombang Tersebut Telah Di Acc');
        }
      
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
        $req->validate([
            'gelombang' => 'required',
            'status_gelombang' => 'required'
        ]);
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
    // 
}
