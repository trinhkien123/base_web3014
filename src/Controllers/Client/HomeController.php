<?php 

namespace Admin\BaseWeb3014\Controllers\Client;

use Admin\BaseWeb3014\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'KIENTV';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}