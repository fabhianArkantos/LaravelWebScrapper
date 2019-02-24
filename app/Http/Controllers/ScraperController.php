<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{
    public function example(Client $client){
        $client = new Client();
        $crawler = $client->request('GET','https://www.zmart.cl/JuegosPS4');
        $classDiv = 'BoxProductoS2 BorderPlatPS4';
        $productList = $crawler->filter('[class ="'.$classDiv.'"]')->each(function ($productNode, $productList) {
            $product['name'] = $productNode->children()->filter('.BoxProductoS2_Descripcion > a')->text();
            $product['price'] = $productNode->children()->filter('.BoxProductoS2_Precio')->text();
            $product['status'] = str_replace(' ', '', $productNode->children()->filter('.BoxProductoS2_Disponibilidad')->text());

            return $product;

        });

        dump($productList);

        //return view('scraper');
    }
}
