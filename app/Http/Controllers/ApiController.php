<?php

namespace App\Http\Controllers;

use App\Models\io_art;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function GetxData()
    {

        $io_arts=io_art::all();

        return response(["io_art"=>$io_arts],200);

    }
}
