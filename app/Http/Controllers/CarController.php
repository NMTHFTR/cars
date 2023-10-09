<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    private $cars;
    private $headers;
    function __construct()
    {
        $this->cars=Storage::json('public/cars.json')["cars"];
        //dd($this->cars);
        foreach($this->cars[0] as $key){
            $this->headers[]=$key;
        }
        $this->array_keys($this->cars[0]);
        dd($this->headers);
    }


    function index(){
        $data=['cars'=>$this->headers,'headers'=>$this->headers,];
        return view('index',$data);
}
