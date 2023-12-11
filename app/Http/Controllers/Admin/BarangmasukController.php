<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AksesModel;
use App\Models\Admin\BarangmasukModel;
use App\Models\Admin\BarangModel;
use App\Models\Admin\CustomerModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;

class BarangmasukController extends Controller
{
    public function index()
    {
        $data["title"] = "Barang Masuk";
        $data["hakTambah"] = AksesModel::leftJoin('tbl_submenu', 'tbl_submenu.submenu_id', '=', 'tbl_akses.submenu_id')->where(array('tbl_akses.role_id' => Session::get('user')->role_id, 'tbl_submenu.submenu_judul' => 'Barang', 'tbl_akses.akses_type' => 'create'))->count();
        $data["customer"] = CustomerModel::orderBy('customer_id', 'DESC')->get();
        return view('Admin.BarangMasuk.index', $data);
    }

}
