<?php

namespace App\Controllers;

use App\Models\GuruModel;

class Guru extends BaseController
{
    protected $guruModel;
    public function __construct()
    {
        $this->guruModel = new GuruModel();
    }

    public function save()
    {
        // validation
        if (!$this->validate([
            'nama_guru' => [
                'rules' => 'required',
            ],
            'jabatan' => [
                'rules' => 'required',
            ],
            'tempat_lahir' => [
                'rules' => 'required',
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/user/dataguru')->withInput()-> with('validation', $validation);
        }

        $this->guruModel->save([
            'nama_guru' => $this->request->getVar('nama_guru'),
            'jabatan' => $this->request->getVar('jabatan'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/user/dataguru');
    }

    public function saveadmin()
    {
        // validation
        if (!$this->validate([
            'nama_guru' => [
                'rules' => 'required',
            ],
            'jabatan' => [
                'rules' => 'required',
            ],
            'tempat_lahir' => [
                'rules' => 'required',
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/tambah/guru')->withInput()-> with('validation', $validation);
        }

        $this->guruModel->save([
            'nama_guru' => $this->request->getVar('nama_guru'),
            'jabatan' => $this->request->getVar('jabatan'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/admin/dataguru');
    }

    public function delete($id)
    {
        $this->guruModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/dataguru');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Guru',
            'validation' => \Config\Services::validation(),
            'guru' => $this->guruModel->getGuru($id)
        ];

        return view('admin/edit/guru', $data);
    }

    public function update($id) {
        // validation
        if (!$this->validate([
            'nama_guru' => [
                'rules' => 'required',
            ],
            'jabatan' => [
                'rules' => 'required',
            ],
            'tempat_lahir' => [
                'rules' => 'required',
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/edit/guru' . $this->request->getVar('id'))->withInput()-> with('validation', $validation);
        }

        $this->guruModel->save([
            'id' => $id,
            'nama_guru' => $this->request->getVar('nama_guru'),
            'jabatan' => $this->request->getVar('jabatan'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diedit.');
        return redirect()->to('/admin/dataguru');
    }

}
