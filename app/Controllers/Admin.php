<?php

namespace App\Controllers;

use App\Models\GuruModel;

class Admin extends BaseController
{

    protected $session;

    protected $guruModel;
    
    public function __construct()
    {
        $this->session = session();
        $this->guruModel = new GuruModel();
    }
    
    public function dashboard()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Dashboard'
        ];
        
        return view('admin/dashboard', $data);
        
    }

    public function guru()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        $data = [
            'title' => 'Data Guru',
            'guru' => $this->guruModel->findAll()
        ];
        
        return view('admin/guru', $data);
        
    }

    public function tambah_guru()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data = [
            'title' => 'Tambah Guru',
            'validation' => \Config\Services::validation()
        ];
        
        return view('admin/tambah/guru', $data);
        
    }
    
}