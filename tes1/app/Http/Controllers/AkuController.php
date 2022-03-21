<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class AkuController extends Controller
{
    //tampilan layout
    public function index(){
        return view('Barang.barang_blueband');
    }

    //Create
    public function tambah(Request $r){
        $data = json_decode($r->list_form_to_php,true);

        $Barang = Barang::create([
            'name_brg' => $data['name_brg']
        ]);

        return "Berhasil Tambahan data";
    }

    //tampilan
    public function nampil() {
        return view('Barang.blueband');
    }

    //get dri DB
    public function get() {
        return Barang::get();
    }

    //delete
    public function hapus($id) {
        Barang::where('id', $id)->delete();

        return "Kehapus dong";
    }

    //edit
    public function edit_data($id) {
        return view('Barang.edit')->with(['id' => $id]);
    }

    //fetch
    public function fetch($id) {
        return Barang::where('id', $id)->get();
    }

    //submit setelah di edit
    public function submit(Request $r) {
        $data = json_decode($r->edit_form,true);

        Barang::where('id', $data[0]['id'])->update([
            'name_brg' => $data[0]['name_brg']
        ]);

        return "berhasil";
    }
}
