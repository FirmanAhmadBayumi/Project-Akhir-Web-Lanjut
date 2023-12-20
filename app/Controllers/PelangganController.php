<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AreaPencucianModel;
use App\Models\DataPelangganModel;
use App\Models\DataTransaksiModel;
use App\Models\PemilikUsahaModel;
use App\Models\UserModel;

class PelangganController extends BaseController
{
    protected $helpers = ['form'];
    public $areaPencucian;
    public $dataPelanggan;
    public $dataKendaraan;
    public $dataTransaksi;
    public function __construct(){
        $this->areaPencucian = new AreaPencucianModel();
        $this->dataPelanggan = new UserModel();
        $this->dataKendaraan = new PemilikUsahaModel();
        $this->dataTransaksi = new DataTransaksiModel();
    }

    //dibawah ini fungsi utuk menampilkan halaman dashboard
    public function index(){
        $data = [
            'title' => 'Beranda',
        ];
        return view("pelanggan/dashboard", $data);
    }

    //dibawah ini isi fungsi" utk CRUD Data Pelanggan
    public function tambahDataPelanggan()
    {
        $data = [
            'title' => 'Tambah Data Pelanggan',
        ];
        return view('pelanggan/create_data_pelanggan', $data);

    }
    // public function createDataPelanggan(){
    //     if (
    //         !$this->validate([
    //             'nama' => [
    //                 'rules' => 'required|alpha_space',
    //                 'errors' => [
    //                     'required' => 'Nama Harus Diisi !',
    //                     'alpha_space' => 'Nama Harus Diisi Huruf dan Spasi'
    //                 ]
    //             ],
    //             'jk' => [
    //                 'rules' => 'required',
    //                 'errors' => [
    //                     'required' => 'Jenis Kelamin Harus Dipilih!',
    //                 ]
    //             ],
    //             'alamat' => [
    //                 'rules' => 'required',
    //                 'errors' => [
    //                     'required' => 'Alamat Harus Diisi !',
    //                 ]
    //             ],
    //             'no_hp' => [
    //                 'rules' => 'required',
    //                 'errors' => [
    //                     'required' => 'No. Ponsel Harus Diisi !'
    //                 ]
    //             ]
    //         ])
    //     ) {
    //         session()->setFlashdata($this->validator->getErrors());
    //         return redirect()->back()->withInput();
    //     }
        
    //     $this->dataPelanggan->saveDataPelanggan([
    //         'nama' => $this->request->getVar('nama'),
    //         'jenis_kelamin' => $this->request->getVar('jk'),
    //         'alamat' => $this->request->getVar('alamat'),
    //         'no_hp' => $this->request->getVar('no_hp'),
    //     ]);
    //     return redirect()->to('/pelanggan/profil');
    // }
    public function editDataPelanggan($id){
        $data_pelanggan = $this->dataPelanggan->getDataPelanggan($id);

        $data = [
            'title' => 'Edit Profile',
            'data_pelanggan' => $data_pelanggan,
        ];

        return view('pelanggan/edit_profil', $data);
    }
    public function editProfil($id){
        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ];

        $result = $this->dataPelanggan->updateDataPelanggan($id, $data);

        if (
            !$this->validate([
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email harus diisi!',
                        'valid_email' => 'Isi format email dengan benar!'
                    ]
                ],
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Username harus diisi !'
                    ]
                ],
            ])
        ) {
            session()->setFlashdata($this->validator->getErrors());
            return redirect()->back()->withInput();
        }

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menympan Data');
        }

        return redirect()->to(base_url('pelanggan/profil'));
    }
    public function showProfil()
    {
        $data_pelanggan = $this->dataPelanggan->getIdUser(user_id());

        $data = [
            'title' => 'Profil',
            'data_pelanggan' => $data_pelanggan,
        ];
        return view('pelanggan/profil', $data);
    }

    //Bates Fungsi" CRUD Pelanggan


    //Dibawah ini alur Fungsi" untuk Create Data transaksi pelanggan
    public function pesan()
    {
        $data_kendaraan = $this->dataKendaraan->getDataKendaraan();
        $data_pelanggan = $this->dataPelanggan->getIdUser(user_id());
        $data = [
            'title' => 'Pesanan',
            'data_kendaraan' => $data_kendaraan,
            'data_pelanggan' => $data_pelanggan,
        ];
        return view("pelanggan/pesan", $data);
    }
    public function detail_pesanan()
    {
        $area_pencucian = [
            [
                'id' => 1,
                'area_pencucian' => 'Area 1',
            ],
            [
                'id' => 2,
                'area_pencucian' => 'Area 2',
            ],
            [
                'id' => 3,
                'area_pencucian' => 'Area 3',
            ],
        ];

        $data = [
            'title' => 'Detail Pesanan',
            'area_pencucian' => $area_pencucian,
        ];

        return view("pelanggan/detail_pesanan", $data);
    }
    public function createDataTransaksi(){
        
        $this->dataTransaksi->saveDataTransaksi([
            "id_user" =>    $this->request->getvar("id"),
            "nama" => $this->request->getVar("nama"),
            "alamat" => $this->request->getVar("alamat"),
            "tgl_pemesanan" => $this->request->getVar("tgl"),
            "jenis_motor" => $this->request->getVar("jns_mtr"),
            "id_area_pencucian" => $this->request->getVar("area_pencucian"),
            'harga' => $this->request->getVar('harga'),
            "jns_pembayaran" => $this->request->getVar("bayar"),
        ]);

        return redirect()->to('pelanggan/riwayat_transaksi');
    }
    public function showRiwayatTransaksi(){
        $data_transaksi = $this->dataTransaksi->getDataTransaksiPelangganByIdUser(user_id());

        $data =  [
            'title' => 'Riwayat Transaksi',
            'data_transaksi' => $data_transaksi,
        ];

        return view('pelanggan/riwayat_transaksi', $data);
    }
}