<?php
namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\BarangModel;
use App\Models\StokModel;
use App\Models\PenjualanDetailModel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function index()
	{
		$breadcrumb = (object) [ 'title' => 'Selamat Datang', 'list' => ['Home', 'Welcome']];
		$activeMenu = 'dashboard';

		$user_count = UserModel::count();
		$barang_count = BarangModel::count();
		$stok_count = StokModel::sum('stok_jumlah');
		$penjualan_total = PenjualanDetailModel::sum('harga');

		return view('welcome', [
			'breadcrumb' => $breadcrumb, 
			'activeMenu' => $activeMenu,
			'user_count' => $user_count,
			'barang_count' => $barang_count,
			'stok_count' => $stok_count,
			'penjualan_total' => $penjualan_total
		]);
	}
}