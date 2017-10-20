<?php

namespace App\Http\Controllers;
require dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
use Illuminate\Http\Request;


use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;


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

	public function email_response_contact(Request $request){
		return view("index/email");
	}           
    
	public function formulario(Request $request){
		if ($request->isMethod("post") && $request->ajax()) {
		    $input= $request->all();
		    $this->sendMailAdmin($input);
		    $this->sendMailClient($input);
		    return response()->json(['message'=>'Ok!', "code"=>'200', 'result'=> $input], 200);
		}
		return response()->json(['message'=> 'No se ha validado correctamente', "code"=>'404'], 404);
	}
    
	public function sendMailAdmin($values){
	    $email= new \PHPMailer();
	    $email->isSMTP();
	    $email->CharSet='UTF-8';
	    $email->Host= "smtp.gmail.com";
	    $email->Port = 465;
	    $email->SMTPSecure = 'ssl';
	    $email->SMTPAuth = true;
	    $email->Username = 'chontaldevelopers@gmail.com';
	    $email->Password = 'gustavo290387';
    
	    $email->setFrom('chontaldevelopers@gmail.com', 'Moreno Montero');
	    $email->addReplyTo($values['email'], $values['name']);
	    $email->addAddress('chontaldevelopers@gmail.com');
	    $email->WordWrap=100;
	    $email->isHTML(true);
	    $email->Subject = 'Contacto Página Web';
	    $email->msgHTML("<p style='text-align: center;'><strong>Hola este es un mensaje de la página web de Moreno Montero</strong></p><p><strong>Nombre:&nbsp;</strong>{$values['name']}</p><p><strong>Teléfono:&nbsp;</strong>{$values['phone']}</p><p><strong>Email:&nbsp;</strong>{$values['email']}</p><p><strong>Mensaje:&nbsp;</strong>{$values['message']}</p>");
    
	    $email->AltBody = 'Moreno Montero';
    
	    if(!$email->send()) {
	      echo 'Message could not be sent.';
	      echo 'Mailer Error: ' . $email->ErrorInfo;
	    } 
	    else {
	    echo 'Message has been sent';
    	    }
    
	}
    
	public function sendMailClient($values){
	    $email = new \PHPMailer();
	    $email->isSMTP();
	    $email->CharSet = 'UTF-8';
	    $email->Host = "smtp.gmail.com";
	    $email->Port=465;
	    $email->SMTPSecure="ssl";
	    $email->SMTPAuth =true;
	    $email->Username = "chontaldevelopers@gmail.com";
	    $email->Password = "gustavo290387";
    
	    $email->setFrom("chontaldevelopers@gmail.com",'Moreno Montero');
	    $email->addReplyTo("chontaldevelopers@gmail.com","Moreno Montero");
	    $email->addAddress($values['email']);
    
	    $email->WordWrap =100;
	    $email->isHTML(true);
	    $session = session('session');
	    $email->Subject = "Gracias por utilizar nuestros servicios";
	    //$html = file_get_contents(url()->asset("/email-response-contact?key={$session['token']}"));
	    //$email->msgHTML($html);
	    $email->AltBody = "Moreno Montero";
    
	    if(!$email->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $email->ErrorInfo;
	    } else {
		return true;
	    }
	    return true;
	}
	protected function getSession(){
		return session("session");
	    }
	
	    private function generateToken(){
		return bin2hex(openssl_random_pseudo_bytes(32));
	    }
}