<?php

namespace App\Controllers;


class User extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index()
    {
        // $data['user'] = $this->usermodel

        return view('user/profile');
    }

    public function edit($id = null)
    {

        $valid = $this->usermodel->where('id', $id)->first();
        if (is_array($valid)) {
            $data = [
                'user' => $valid,
                'validation' => \config\Services::validation(),
            ];
            if ($id != session()->id) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            } else {
                return view('user/edit', $data);
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        if (userLogin()->username == $this->request->getVar('Username')) {
            $role_username = 'required';
        } else {
            $role_username = 'required|is_unique[users.Username]';
        }
        if (userLogin()->email == $this->request->getVar('Email')) {
            $role_email = 'required|valid_email';
        } else {
            $role_email = 'required|valid_email|is_unique[users.Email]';
        }

        if (!$this->validate([
            'Name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'name cannot be empty',
                ],
            ],
            'Username' => [
                'rules' => $role_username,
                'errors' => [
                    'required' => 'username cannot be empty',
                    'is_unique' => 'username already exists',
                ],
            ],
            'Email' => [
                'rules'  => $role_email,
                'errors' => [
                    'required' => 'username cannot be empty',
                    'valid_email' => 'Please check the Email field',
                    'is_unique' => 'email already exists',
                ],
            ],
        ])) {
            $validation = \config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $name = $this->request->getVar('Name');
        $username = $this->request->getVar('Username');
        $email = $this->request->getVar('Email');


        $this->usermodel->save([
            'id'        => $id,
            'name'      => $name,
            'username'  => $username,
            'email'     => $email,
        ]);
        session()->setFlashdata('success', 'update data profile successful');

        return redirect()->to(base_url('profile'));
    }

    public function edit_image($id = null)
    {
        $valid = $this->usermodel->where('id', $id)->first();
        if (is_array($valid)) {
            $data = [
                'user' => $valid,
                'validation' => \config\Services::validation(),
            ];
            if ($id != session()->id) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            } else {
                return view('user/editfoto', $data);
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update_image($id = null)
    {
        if (!$this->validate([
            'Profile' => [
                'rules'  => 'uploaded[Profile]|max_size[Profile,2048]',
                'errors' => [
                    'uploaded' => 'Profile cannot be empty',
                    'max_size' => 'max size 2 mb',
                ],
            ],
        ])) {
            $validation = \config\Services::validation();
            // session()->setFlashdata('message', $this->validator->listErrors());
            return redirect()->back()->with('validation', $validation);
        }

        $foto = $this->request->getFile('Profile');
        $nameprofile = $foto->getRandomName();
        $foto->move('assets/image/', $nameprofile);

        $this->usermodel->save([
            'id'        => $id,
            'profile'   => $nameprofile,
        ]);

        session()->setFlashdata('success', 'update image profile successful');
        return redirect()->to(base_url('profile'));
    }
}
