<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataPelangganModel;
use App\Models\DataTransaksiModel;
use App\Models\UserModel;



class AdminController extends BaseController
{
    protected $dataPelanggan;
    protected $dataTransaksi;
    protected $users;
    public function __construct(){
        $this->dataPelanggan = new DataPelangganModel();
        $this->dataTransaksi = new DataTransaksiModel();
        $this->users = new UserModel();
    }
    public function dashboard()
    {
        return view("admin/dashboard");
    }
    // public function datapelanggan()
    // {
    //     $data_pelanggan = $this->dataPelanggan->getDataPelanggan();

    //     $data = [
    //         'title' => 'Data Pelanggan',
    //         'data_pelanggan' => $data_pelanggan,
    //     ];

    //     return view("admin/datapelanggan", $data);
    // }
    
    public function create(){
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
    ],);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $this->dataPelanggan->insert([
                "nama" => $this->request->getPost('nama'),
                "jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
                "alamat" => $this->request->getPost('alamat'),
                "no_hp" => $this->request->getPost('no_hp'),
            ]);
            return redirect()->to(base_url('admin/datapelanggan'));
        }
		
        return view('admin/add_datapelanggan');
    }

    public function edit($id){
        $data['pelanggan'] = $this->dataPelanggan->where('id', $id)->first();
        
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        if($isDataValid){
            $this->dataPelanggan->update($id, [
                "nama" => $this->request->getPost('nama'),
                "jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
                "alamat" => $this->request->getPost('alamat'),
                "no_hp" => $this->request->getPost('no_hp')
            ]);
            return redirect()->to(base_url('admin/datapelanggan'));
        }

        return view('admin/edit_datapelanggan', $data);
    }

    public function delete($id){
        $this->dataPelanggan->delete($id);
        return redirect()->to(base_url('admin/datapelanggan'));
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
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('admin/editdatapelanggan'));
    }
    
    public function datatransaksi()
    {
        $data_transaksi = $this->dataTransaksi->getDataTransaksi();

        $data = [
            'title' => 'Data Transaksi',
            'data_transaksi' => $data_transaksi,
        ];
        return view("admin/datatransaksi", $data);
    }

    public function deleteDataTransaksi($id){
        $this->dataTransaksi->delete($id);
        return redirect()->to(base_url('admin/datatransaksi'));
    }

     public function editDataTransaksi($id){
        $data['transaksi'] = $this->dataTransaksi->where('id', $id)->first();
        
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_pemesanan' => 'required',
            'jenis_motor' => 'required',
            'id_area_pencucian' => 'required',
            'harga' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        if($isDataValid){
            $this->dataTransaksi->update($id, [
                "nama" => $this->request->getPost('nama'),
                "alamat" => $this->request->getPost('alamat'),
                 "tgl_pemesanan" => $this->request->getPost('tgl_pemesanan'),
                "jenis_motor" => $this->request->getPost('jenis_motor'),
                "id_area_pencucian" => $this->request->getPost('id_area_pencucian'),
                "harga" => $this->request->getPost('harga'),
            ]);
            return redirect()->to(base_url('admin/datatransaksi'));
        }

        return view('admin/edit_data_transaksi', $data);
    }

    public function updateDataTransaksi($id){
        $data = [
            "nama" => $this->request->getVar('nama'),
            "alamat" => $this->request->getVar('alamat'),
            "tgl_pemesanan" => $this->request->getVar('tgl_pemesanan'),
            "jenis_motor" => $this->request->getVar('jenis_motor'),
            "id_area_pencucian" => $this->request->getVar('id_area_pencucian'),
            "harga" => $this->request->getVar('harga'),
        ];

        $result = $this->dataTransaksi->updateDataTransaksi($id, $data);

        if (
            !$this->validate([
                'nama' => [
                    'rules' => 'required|alpha_space',
                    'errors' => [
                        'required' => 'Nama Harus Diisi !',
                        'alpha_space' => 'Nama Harus Diisi Huruf dan Spasi'
                    ],
        
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat Harus Diisi !',
                    ]
                ],

                  'tgl_pemesanan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '',
                    ]
                ],

                  'jenis_motor' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '',
                    ]
                ],

                  'id_area_pencucian' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat Harus Diisi !',
                    ]
                ],

                'harga' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'No. Ponsel Harus Diisi !'
                    ]
                ]
                ]
            ])
        ) {
            session()->setFlashdata($this->validator->getErrors());
            return redirect()->back()->withInput();
        }

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('admin/datatransaksi'));
    }


    
    public function pesanan($id)
    {
        $data['transaksi'] = $this->dataTransaksi->where('id', $id)->first();

        
        return view("admin/kelolapesanan",$data);
        
    }
    public function pembayaran()
    {
        return view("admin/pembayaran");
    }
    public function laporan()
    {
        return view("admin/laporan");
    }

      public function Users()
    {
         $data['users'] = $this->users->getAllUsersExceptOne();

        return view("admin/datapelanggan", $data);
    }


}