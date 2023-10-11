<?php

namespace App\Controllers;



class Admin extends BaseController
{

    public function restore($id = null)
    {
        if ($id != null) {
            $this->db = \Config\Database::connect();
            $this->db->table('users')
                ->set('deleted_at', null, true)
                ->where(['id' => $id])->update();
            return redirect()->to(base_url('admin'))->with('success', 'activate user successfully');
        }
    }

    public function users()
    {

        $data['user'] = $this->usermodel->withDeleted()->findAll();
        return view('admin/index', $data);
    }

    public function create()
    {
        $data = [
            'validation' => \config\Services::validation(),

        ];
        return view('admin/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'Name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'name cannot be empty',
                ],
            ],
            'Username' => [
                'rules' => 'required|is_unique[users.Username]',
                'errors' => [
                    'required' => 'username cannot be empty',
                    'is_unique' => 'username already exists',
                ],
            ],
            'Email' => [
                'rules'  => 'required|valid_email|is_unique[users.Email]',
                'errors' => [
                    'required' => 'email cannot be empty',
                    'valid_email' => 'Please check the Email field',
                    'is_unique' => 'email already exists',
                ],
            ],
            'Password' => [
                'rules'  => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => 'password cannot be empty',
                    'min_length' => 'password Minimal 4 Karakter',
                    'max_length' => 'password Maksimal 50 Karakter',
                ],
            ],
        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('admin/create')->withInput()->with('validation', $validation);
        }

        $name = $this->request->getVar('Name');
        $username = $this->request->getVar('Username');
        $email = $this->request->getVar('Email');
        $password = password_hash($this->request->getVar('Password'), PASSWORD_BCRYPT);
        $role = "user";


        $this->usermodel->save([
            'name'      => $name,
            'username'  => $username,
            'email'     => $email,
            'password'  => $password,
            'role'      => $role,
        ]);
        session()->setFlashdata('success', 'create new user successful');

        return redirect()->to('admin');
    }


    public function delete($id = null)
    {
        // $this->db->table('users')->where(['id' => $id])->delete();
        $this->usermodel->delete($id);
        return redirect()->to(base_url('admin'))->with('message', 'Non Activate User successfull');
    }
}
