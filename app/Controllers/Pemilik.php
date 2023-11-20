<?php

namespace App\Controllers;
use App\Models\AreaPencucianModel;
use App\Models\PemilikUsahaModel;

class Pemilik extends BaseController
{
    public $area;


    public function __construct(){
        $this->area = new AreaPencucianModel();
    }
    
    public function login(): string
    {
        return view('pemilikusaha/login');
    }
    public function dashboard(): string
    {
        return view('pemilikusaha/dashboard');
    }

    public function area()
    {
        $areaPencucianModel = new AreaPencucianModel();
        $areaPencucianData = $areaPencucianModel->getAllAreaPencucian();
        //dd($areaPencucianData);
        return view('pemilikusaha/area', ['area' => $areaPencucianData]);
    
    }
    public function tarif()
    {   
        $pemilikUsaha = new PemilikUsahaModel();
        $pemilikUsaha = $pemilikUsaha->getAllPemilik();
         //dd($pemilikUsaha);
        return view('pemilikusaha/tarif',['data' => $pemilikUsaha]);
    }
    public function tarifDelete($id)
    {  // dd($id);
        $pemilikUsaha = new PemilikUsahaModel();
        $pemilikUsaha = $pemilikUsaha->deletePemilik($id);
         //dd($pemilikUsaha);
         return redirect()->to('http://localhost:8080/pemilikusaha/tarif');
    }
    public function areaDelete($id)
    {  // dd($id);
        $pemilikUsaha = new AreaPencucianModel();
        $pemilikUsaha = $pemilikUsaha->deleteAreaPencucian($id);
         //dd($pemilikUsaha);
         return redirect()->to('http://localhost:8080/pemilikusaha/area');
    }

    public function tarifTambah()
    {
        if ($this->request->getMethod() === 'post') {
            // Validate the uploaded image
            $file = $this->request->getFile('gambar');
            if (!$file->isValid()) {
                // Invalid image file
                echo "<script>alert('error')</script>";
                return redirect();
            }
    
            // Generate a unique filename
            $newFilename = uniqid() . '.' . $file->getExtension();
    
            // Move the uploaded image to the uploads directory
            $file->move('assets/uploads', $newFilename);
    
            // Get the form data
            $jenisKendaraan = $this->request->getPost('jenis_kendaraan');
            //dd($jenisKendaraan);
            $harga = $this->request->getPost('harga');
            $newFilename = 'assets/uploads/' . $newFilename;
    
            // Insert the data into the database
            $data = [
                'jenis' => $jenisKendaraan,
                'harga' => $harga,
                'foto' => $newFilename,
            ];
    
            $pemilikUsaha = new PemilikUsahaModel();
            $pemilikUsaha = $pemilikUsaha->insert($data);
            return redirect()->to('http://localhost:8080/pemilikusaha/tarif');
        }
        return view('pemilikusaha/tambah_tarif');
    }

    public function tarifEdit($id)
{
    $pemilikUsahaModel = new PemilikUsahaModel();
    $tarif = $pemilikUsahaModel->getPemilikById($id);

    if ($this->request->getMethod() === 'post') {
        // Validate the uploaded image
        $file = $this->request->getFile('gambar');
        if ($file->isValid()) {
            $newFilename = uniqid() . '.' . $file->getExtension();
            $file->move('assets/uploads', $newFilename);

            $newFilename = 'assets/uploads/' . $newFilename;
        } else {
            $newFilename = $tarif['foto']; // Use existing image filename if no new image is uploaded
        }

        // Get the form data
        $jenisKendaraan = $this->request->getPost('jenis_kendaraan');
        $harga = $this->request->getPost('harga');

        // Update the data in the database
        $data = [
            'jenis' => $jenisKendaraan,
            'harga' => $harga,
            'foto' => $newFilename,
        ];

        $pemilikUsahaModel->updatePemilik($id, $data);

        return redirect()->to('http://localhost:8080/pemilikusaha/tarif');
    }

    return view('pemilikusaha/edit_tarif', ['data' => $tarif]);
}


public function areaTambah()
{
    if ($this->request->getMethod() === 'post') {
        // Validate the uploaded image
       

        
        // Get the form data
        $nama = $this->request->getPost('nama');
        //dd($jenisKendaraan);
       
      

        // Insert the data into the database
        $data = [
            'area_pencucian' => $nama,
      
        ];
       // dd($data);
        $pemilikUsaha = new AreaPencucianModel();
        $pemilikUsaha = $pemilikUsaha->createAreaPencucian($data);
        return redirect()->to('http://localhost:8080/pemilikusaha/area');
    }
    return view('pemilikusaha/tambah_area');
}

    public function detail(): string
    {
        return view('pemilikusaha/detail');
    }
}
