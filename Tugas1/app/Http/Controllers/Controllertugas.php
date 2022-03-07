<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tayang;

class Controllertugas extends Controller{

    //login
    public function login(){
        return view('logins.login');
    }

    //Tampilan dari DB table tayang
    public function tayang(){
        $tayang = Tayang::get();

        return $tayang;
    }

    //view semua data tabel tayang beserta dengan deskripsinya menggunakan query join dari laravel
	//	tampilan datanya seperti pada soal gambar indah dalam bentuk json
    public function tayang2(){
        $tayang_join = Tayang::join('members', 'members.id', '=', 'tayangs.member_id')
	        ->join('movies', 'movies.id', '=', 'tayangs.movie_id')
	        ->join('teaters', 'teaters.id', '=', 'tayangs.teater_id')
	        ->get();

        return $tayang_join;
    }

    //view data tabel tayang dalam bulan tertentu menggunakan query whereMonth dari laravel
    public function tayang3(){
        $tayang_bulan = Tayang::leftjoin('members', 'members.id', '=', 'tayangs.member_id')
	        ->leftjoin('movies', 'movies.id', '=', 'tayangs.movie_id')
	        ->leftjoin('teaters', 'teaters.id', '=', 'tayangs.teater_id')
            ->select('tayangs.id AS id_tayang', 'movies.movie', 'movies.nama_movie', 'movies.harga_tiket', 'movies.waktu_tayang', 'members.nama_member',
                        'teaters.nama_teater', 'teaters.kota')
            ->whereMonth('waktu_tayang','1')
	        ->get();

        return $tayang_bulan;
    }

    //view data tabel tayang range tanggal tertentu menggunkan query whereBetween dari laravel
    public function tayang4(){
        $tayang_range = Tayang::leftjoin('members', 'members.id', '=', 'tayangs.member_id')
	        ->leftjoin('movies', 'movies.id', '=', 'tayangs.movie_id')
	        ->leftjoin('teaters', 'teaters.id', '=', 'tayangs.teater_id')
            ->select('tayangs.id AS id_tayang', 'movies.movie', 'movies.nama_movie', 'movies.harga_tiket', 'movies.waktu_tayang', 'members.nama_member',
                        'teaters.nama_teater', 'teaters.kota')
            ->whereBetween('waktu_tayang', ['2019-01-20', '2019-01-23'])
	        ->get();

        return $tayang_range;
    }

    //view total data tabel tayang menggunakan count dari laravel
    public function tayang5(){
        $tayang_count = Tayang::count();
        return $tayang_count;
    }

    //view data tabel tayang max qty_tiket 2 menggunakan max dari laravel
    public function tayang6(){
        $tayang_max = Tayang::leftjoin('members', 'members.id', '=', 'tayangs.member_id')
	        ->leftjoin('movies', 'movies.id', '=', 'tayangs.movie_id')
	        ->leftjoin('teaters', 'teaters.id', '=', 'tayangs.teater_id')
            ->select('tayangs.id AS id_tayang', 'movies.movie', 'movies.nama_movie', 'movies.harga_tiket', 'movies.waktu_tayang', 'members.nama_member',
                        'teaters.nama_teater', 'teaters.kota', 'tayangs.qty_tiket')
            ->max('tayangs.qty_tiket');

        return $tayang_max;
    }

    //view data tabel tayang dari yang terbaru menggunakan orderBy dari laravel
    public function tayang7(){
        $tayang_order = Tayang::leftjoin('members', 'members.id', '=', 'tayangs.member_id')
	        ->leftjoin('movies', 'movies.id', '=', 'tayangs.movie_id')
	        ->leftjoin('teaters', 'teaters.id', '=', 'tayangs.teater_id')
            ->select('tayangs.id AS id_tayang', 'movies.movie', 'movies.nama_movie', 'movies.harga_tiket', 'movies.waktu_tayang', 'members.nama_member',
                        'teaters.nama_teater', 'teaters.kota', 'tayangs.qty_tiket')
            ->orderBy('movies.waktu_tayang', 'DESC')
            ->get();

        return $tayang_order;
    }

    //view hanya 3 buah data tabel tayang menggunakan limit
    public function tayang8(){
        $tayang_limit = Tayang::leftjoin('members', 'members.id', '=', 'tayangs.member_id')
	        ->leftjoin('movies', 'movies.id', '=', 'tayangs.movie_id')
	        ->leftjoin('teaters', 'teaters.id', '=', 'tayangs.teater_id')
            ->select('tayangs.id AS id_tayang', 'movies.movie', 'movies.nama_movie', 'movies.harga_tiket', 'movies.waktu_tayang', 'members.nama_member',
                        'teaters.nama_teater', 'teaters.kota', 'tayangs.qty_tiket')
            ->limit(3)
            ->get();

        return $tayang_limit;
    }

    //view data tabel tayang hanya beberapa kolom saja menggunakan select dari laravel
    public function tayang9(){
        $tayang_kolom = Tayang::leftjoin('members', 'members.id', '=', 'tayangs.member_id')
	        ->leftjoin('movies', 'movies.id', '=', 'tayangs.movie_id')
	        ->leftjoin('teaters', 'teaters.id', '=', 'tayangs.teater_id')
            ->select('tayangs.id AS id_tayang', 'tayangs.qty_tiket', 'tayangs.faktur')
            ->get();

        return $tayang_kolom;
    }

    //view data tabel tayang yang hanya mempunyai data id_theater T01 dan bukan tipe_member EPC
    public function tayang10(){
        $tayang_tentu= Tayang::leftjoin('members', 'members.id', '=', 'tayangs.member_id')
	        ->leftjoin('movies', 'movies.id', '=', 'tayangs.movie_id')
	        ->leftjoin('teaters', 'teaters.id', '=', 'tayangs.teater_id')
            ->leftjoin('typemembers', 'typemembers.id', '=', 'members.typemember_id')
            ->select('tayangs.id AS id_tayang', 'movies.movie', 'movies.nama_movie', 'movies.harga_tiket', 'movies.waktu_tayang', 'members.nama_member',
                        'teaters.nama_teater', 'teaters.kota', 'tayangs.qty_tiket')
            ->where('teaters.teater', 'T01')
            ->where('typemembers.typemember', 'MTC')
            ->get();

        return $tayang_tentu;
    }

}
