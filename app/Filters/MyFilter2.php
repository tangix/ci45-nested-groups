<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class MyFilter2 implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
		var_dump($arguments);
        Services::response()->appendHeader('X-Filter-myfilter2', $arguments[0]);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}