<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\JsonDecoder;

class ApiController extends Controller
{
    public function index(Request $request){

        $response = file_get_contents('https://reqres.in/api/users');

        $decoder = json_decode($response);

        $persons = $decoder->data;


        return view('home',compact('persons'));
    }
    public function api(){

        $response = file_get_contents('https://reqres.in/api/users?page=2');

        $decoder = json_decode($response);

        dd($decoder->data);
    }
    public function profile($id){

        $response = file_get_contents('https://reqres.in/api/users');

        $decoder = json_decode($response);

        $person = $decoder->data[$id-1];

        return view('profile',compact('person'));
    }
}
