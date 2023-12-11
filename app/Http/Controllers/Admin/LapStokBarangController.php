<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BarangkeluarModel;
use App\Models\Admin\BarangmasukModel;
use App\Models\Admin\BarangModel;
use App\Models\Admin\WebModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use PDF;

class LapStokBarangController extends Controller
{
    public function index(Request $request)
    {
        $data["title"] = "Lap Stok Barang";
        return view('Admin.Laporan.StokBarang.index', $data);
    }
}
