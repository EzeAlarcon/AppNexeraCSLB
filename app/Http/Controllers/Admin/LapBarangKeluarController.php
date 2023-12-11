<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BarangkeluarModel;
use App\Models\Admin\WebModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use PDF;

class LapBarangKeluarController extends Controller
{
    public function index()
    {
        $data["title"] = "Lap Barang Keluar";
        return view('Admin.Laporan.BarangKeluar.index', $data);
    }

}
