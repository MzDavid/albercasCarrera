<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CategoriasController extends Controller
{

	public function index(){
	    $session = session('session');
	        return view('index.index',$session);
	}
	public function nosotros(){
	        return view('index.about');
	}
	public function blog(){
	        return view('index.blog');
	}
	public function contacto(){
	        return view('index.contact');
	}
	public function galeria(){
	        return view('index.gallery');
	}
	public function precios(){
	        return view('index.prices');
	}
	public function servicios(){
	        return view('index.services');
	}
	public function tips(){
		return view('index.tips');
	}
}