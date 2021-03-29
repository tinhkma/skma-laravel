<?php

namespace App\Http\api\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Goutte\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'http://qldt.actvn.edu.vn/CMCSoft.IU.Web.info/Login.aspx');
        $crawler->filter('.blog-post-item h2 a')->each(function ($node){
            echo($node->text());
        });
    }
}
