<?php

namespace App\Http\Controllers;
use App\Models\Produk;
class HomeController extends Controller{

    function showindex(){
        return view('frontview.index');
    }

  
    function showdetail(){
        return view('frontview.detail');
    }

    function showshop(){
        $data['list_produk'] =  Produk::all();
        return view('frontview.shop', $data);
    }

    function showcheckout(){
        return view('frontview.checkout');
    }

  


    function showcolegan(){
        return view('backview.colegan');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

 
    function showproduk2(){
        return view('backview.produk');
    }

    function showpromo(){
        return view('backview.promo');
    }

   
    function showsupplier(){
        return view('backview.supplier');
    }

    function showuser(){
        return view('backview.user');
    }

    function showlogin(){
        return view('frontview.login');
    }
    
    function showregistrasi(){
        return view('frontview.registrasi');
    }

 

  
}