<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to('login');
    }

    public function login()
    {
        if (session('id')) {
            return redirect()->to(base_url('pages'));
        }
        return view('auth/login');
    }

    public function loginProcess()
    {
        $data = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['username' => $data['username']]);
        $user = $query->getRow();
        if ($user) {
            if ($user->deleted_at == null) {
                if (password_verify($data['password'], $user->password)) {
                    $params = ['id' => $user->id];
                    session()->set($params);
                    return redirect()->to(base_url('pages'));
                } else {
                    return redirect()->back()->withInput()->with('error', 'password wrong');
                }
            } else {
                return redirect()->back()->with('error', 'username Not found');
            }
        } else {
            return redirect()->back()->with('error', 'username Not found');
        }
    }

    public function logout()
    {
        session()->remove('id');
        return redirect()->to(base_url('login'));
    }

    public function password()
    {

        return view('auth/changepassword');
    }

    public function change_pass()
    {
        if (!$this->validate([
            'oldpass' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password Tidak Boleh Kosong',
                ],
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password Tidak Boleh Kosong',

                ],
            ],
        ]))
            $password = $this->request->getVar('password');

        $this->usermodel->save([
            'password'     => $password,
        ]);
    }
}
