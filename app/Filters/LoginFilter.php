<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (empty(session('level'))) {
            return redirect()->to(site_url('login'));
            // exit();
            // echo 'belum login';
        }
        // else {
        //     // return redirect()->to(base_url('/dashboard'));
        //     // echo 'mNT';
        // }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
