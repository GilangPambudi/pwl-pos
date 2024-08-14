<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\LevelModel;

class LevelController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values (?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return 'Insert data baru berhasil';

        // $row = DB::update("update m_level set level_nama = ? where level_kode = ?", ['Customer', 'CUS']);
        // return "Update data berhasil. Jumlah data yang diupdate: " . $row . " baris";

        // $row = DB::delete("delete from m_level where level_kode = ?", ['CUS']);
        // return "Delete data berhasil. Jumlah data yang dihapus: " . $row . " baris";

        //menampilkan data
        // $data = DB::select('select * from m_level');
        // return view('level', ['data' => $data]);

            $breadcrumb = (object)[
                'title' => 'Daftar Level',
                'list' => ['Home', 'Level']
            ];
    
            $page = (object)[
                'title' => 'Daftar level yang terdaftar dalam sistem'
            ];
    
            $activeMenu = 'level'; //set menu yang sedang aktif
    
            return view('level', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request)
    {
        $levels = LevelModel::select('level_id', 'level_kode', 'level_nama');

        return DataTables::of($levels)
            ->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
            ->addColumn('aksi', function ($level) { // menambahkan kolom aksi
                $btn = '<a href="'.url('/level/' . $level->level_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/level/' . $level->level_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="'.url('/level/'.$level->level_id).'">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
            ->make(true);
    }
}
