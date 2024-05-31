<?php 

namespace Hieu\Pphp2\Controllers\Client;

use Hieu\Pphp2\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}