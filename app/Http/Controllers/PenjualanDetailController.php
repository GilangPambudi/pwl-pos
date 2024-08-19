<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualanModel;
use App\Models\PenjualanDetailModel;
use App\Models\BarangModel;
use Yajra\DataTables\Facades\DataTables;

class PenjualanDetailController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Detail Penjualan',
            'list' => ['Home', 'Detail Penjualan']
        ];

        $page = (object) [
            'title' => 'Daftar Detail Penjualan',
        ];

        $activeMenu = 'detail';

        $barang = BarangModel::all();
        $penjualan = penjualanModel::all();

        return view('penjualandetail.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'barang' => $barang, 'penjualan' => $penjualan]);
    }

    public function list(Request $request)
    {
        $details = PenjualanDetailModel::select('detail_id', 'jumlah', 'harga', 'barang_id', 'penjualan_id')
            ->with('barang', 'penjualan');

        if ($request->barang_id) {
            $details->where('barang_id', $request->barang_id);
        }

        if ($request->penjualan_id) {
            $details->where('penjualan_id', $request->penjualan_id);
        }

        return DataTables::of($details)
            ->addIndexColumn()
            ->addColumn('aksi', function ($detail) {
                $btn  = '<a href="' . url('/penjualandetail/' . $detail->detail_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/penjualandetail/' . $detail->detail_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/penjualandetail/' . $detail->detail_id) . '">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Detail Penjualan',
            'list' => ['Home', 'Detail Penjualan', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah Detail Penjualan',
        ];

        $activeMenu = 'detail';

        $barang = BarangModel::all();
        $penjualan = PenjualanModel::all();

        return view('penjualandetail.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'barang' => $barang, 'penjualan' => $penjualan]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah' => 'required',
            'harga' => 'required',
            'barang_id' => 'required',
            'penjualan_id' => 'required'
        ]);

        PenjualanDetailModel::create($request->all());

        return redirect('/penjualandetail')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        $breadcrumb = (object) [
            'title' => 'Detail Detail Penjualan',
            'list' => ['Home', 'Detail Penjualan', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail Detail Penjualan',
        ];

        $activeMenu = 'detail';

        $detail = PenjualanDetailModel::with('barang', 'penjualan')->find($id);

        return view('penjualandetail.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'detail' => $detail]);
    }

    public function edit($id)
    {
        $breadcrumb = (object) [
            'title' => 'Edit Detail Penjualan',
            'list' => ['Home', 'Detail Penjualan', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit Detail Penjualan',
        ];

        $activeMenu = 'detail';

        $barang = BarangModel::all();
        $penjualan = PenjualanModel::all();
        $detail = PenjualanDetailModel::find($id);

        return view('penjualandetail.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'barang' => $barang, 'penjualan' => $penjualan, 'detail' => $detail]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required',
            'harga' => 'required',
            'barang_id' => 'required',
            'penjualan_id' => 'required'
        ]);

        PenjualanDetailModel::find($id)->update($request->all());

        return redirect('/penjualandetail')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        PenjualanDetailModel::destroy($id);

        return redirect('/penjualandetail')->with('success', 'Data berhasil dihapus');
    }
}