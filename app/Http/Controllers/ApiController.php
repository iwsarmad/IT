<?php

namespace App\Http\Controllers;

use App\Models\io_art;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //

    public function GetxData()
    {

        $io_arts=io_art::all();
        return response(["io_art"=>$io_arts],200);
    }

    public function b2b_invites()
    {

        $b2b_invites=DB::select('call b2b_invites()');
        return response(["b2b_invites"=>$b2b_invites],200);
    }


    public function customers()
    {
        $customers=DB::select('call customers()');

        return response(["customers"=>$customers],200);
    }

    // Suppliers


    public function suppliers()
    {
        $suppliers=DB::select('call suppliers()');

        return response(["suppliers"=>$suppliers],200);
    }


    public function customer_details(Request $request)
    {
        $customer_details=DB::select('call customer_details('.$request->COD_CLIFOR.')');

        return response(["customer_details"=>$customer_details],200);
    }


    public function customers_contact(Request $request)
    {
        $customers_contact=DB::select('call customers_contact('.$request->COD_CLIFOR.')');

        return response(["customers_contact"=>$customers_contact],200);
    }


    public function products()
    {
        $products=DB::select('call products()');

        return response(["products"=>$products],200);
    }


    public function unity_measures()
    {
        $unity_measures=DB::select('call unity_measures()');

        return response(["unity_measures"=>$unity_measures],200);
    }


    public function price_list()
    {
        $price_list=DB::select('call price_list()');

        return response(["price_list"=>$price_list],200);
    }


    public function discounts()
    {
        $discounts=DB::select('call discounts()');

        return response(["discounts"=>$discounts],200);
    }


    public function stocks()
    {
        $stocks=DB::select('call stocks()');

        return response(["stocks"=>$stocks],200);
    }


    public function documents()
    {
        $documents=DB::select('call documents()');

        return response(["documents"=>$documents],200);
    }


    public function expiration_date()
    {
        $expiration_date=DB::select('call expiration_date()');
        return response(["expiration_date"=>$expiration_date],200);
    }


    // unity_measures
}
