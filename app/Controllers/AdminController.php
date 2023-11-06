<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function dashboard()
    {
        return view("admin/dashboard");
    }
    public function datapelanggan()
    {
        return view("admin/datapelanggan");
    }
    public function datatransaksi()
    {
        return view("admin/datatransaksi");
    }
    public function pesanan()
    {
        return view("admin/pesanan");
    }
    public function pembayaran()
    {
        return view("admin/pembayaran");
    }
    public function laporan()
    {
        return view("admin/laporan");
    }
}