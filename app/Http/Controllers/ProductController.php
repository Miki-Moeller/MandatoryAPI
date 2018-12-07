<?php
/**
 * Created by PhpStorm.
 * User: Miki
 * Date: 15-11-2018
 * Time: 10:23
 */
namespace App\Http\Controllers;

use App\youtubeuser;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

use App\Product;
use App\Http\Resources\Product as ProductResource;


class ProductController extends Controller
{
   // public function index()
    //{
      //  //return view('views.home');

        //$client = new Client();
        //return view('views.home',['client1' => $client]);


        //*$api_response = $client->get('http://127.0.0.1:8000/api/youtubechannel/1');
        //$response = json_decode($api_response);*/
        //$json = json_decode(file_get_contents('http://host.com/api/stuff/1'), true);
    //}

    /**
     *
     */
    public function index()
    {
//        $client = new Client();
//        $response = $client->get('http://localhost:8000/api/youtubeuser/1');
//        if ($response->getStatusCode()) {
//            $posts = json_decode($response->getBody()->getContents());
//            return view('home', ['posts' => $posts]);
//        }
        return view('home');

        /*'$client = new Client();
        $response = $client->get('http://127.0.0.1:8000/api/youtubeuser/1');

        $body = $response->getBody()->getContents();
        $project = json_decode($body);

        //return view ('views.home', compact('project'));
        return view('views.home',['project' => $project]);*/

    }


}