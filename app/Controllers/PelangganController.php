<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AreaPencucianModel;
use App\Models\DataPelangganModel;
use App\Models\DataTransaksiModel;
use App\Models\PemilikUsahaModel;

class PelangganController extends BaseController
{
    protected $helpers = ['form'];
    public $areaPencucian;
    public $dataPelanggan;
    public $dataKendaraan;
    public $dataTransaksi;
    public function __construct(){
        $this->areaPencucian = new AreaPencucianModel();
        $this->dataPelanggan = new DataPelangganModel();
        $this->dataKendaraan = new PemilikUsahaModel();
        $this->dataTransaksi = new DataTransaksiModel();
    }

    //dibawah ini fungsi utuk menampilkan halaman dashboard
    public function dashboard(){
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
    public function createDataPelanggan(){
        if (
            !$this->validate([
                'nama' => [
                    'rules' => 'required|alpha_space',
                    'errors' => [
                        'required' => 'Nama Harus Diisi !',
                        'alpha_space' => 'Nama Harus Diisi Huruf dan Spasi'
                    ]
                ],
                'jk' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jenis Kelamin Harus Dipilih!',
                    ]
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat Harus Diisi !',
                    ]
                ],
                'no_hp' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No. Ponsel Harus Diisi !'
                    ]
                ]
            ])
        ) {
            session()->setFlashdata($this->validator->getErrors());
            return redirect()->back()->withInput();
        }
        
        $this->dataPelanggan->saveDataPelanggan([
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jk'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
        ]);
        return redirect()->to('/pelanggan/profil');
    }
    public function editDataPelanggan($id){
        $data_pelanggan = $this->dataPelanggan->getDataPelanggan();

        $data = [
            'title' => 'Edit Profile',
            'data_pelanggan' => $data_pelanggan,
        ];

        return view('pelanggan/edit_data_pelanggan', $data);
    }
    public function updateDataPelanggan($id){
        $data = [
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jk'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
        ];

        $result = $this->dataPelanggan->updateDataPelanggan($id, $data);

        if (
            !$this->validate([
                'nama' => [
                    'rules' => 'required|alpha_space',
                    'errors' => [
                        'required' => 'Nama Harus Diisi !',
                        'alpha_space' => 'Nama Harus Diisi Huruf dan Spasi'
                    ]
                ],
                'jk' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jenis Kelamin Harus Dipilih!',
                    ]
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat Harus Diisi !',
                    ]
                ],
                'no_hp' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No. Ponsel Harus Diisi !'
                    ]
                ]
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
    public function showProfilPelanggan()
    {
        $data_pelanggan = $this->dataPelanggan->getDataPelanggan();

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
        $data = [
            'title' => 'Pesanan',
            'data_kendaraan' => $data_kendaraan,
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
        $data_transaksi = $this->dataTransaksi->getDataTransaksi();

        $data =  [
            'title' => 'Riwayat Transaksi',
            'data_transaksi' => $data_transaksi,
        ];

        return view('pelanggan/riwayat_transaksi', $data);
    }
}