<?php

namespace App\Http\Controllers;


use Request;
use App\metier\Visiteur;

class VisiteurController extends Controller
{
    //connection d'un user
    public  function getLogin(){
        $erreur = "";
        return view('formLogin', compact('erreur'));
    }
    //Creation d'un compte user
    public function signIn(){
        $login = Request::input('login');
        $pwd = Request::input('pwd');
        $unVisiteur = new Visiteur();
        $connected = $unVisiteur->login($login, $pwd);
        if($connected){
            return view('home');
        }
        else{
            $erreur = "Login ou mot de passe inconnu !";
            return view('formLogin', compact('erreur'));
        }
    }
    //Deconnection d'un user
    public function signOut(){
        $unVisteur = new Visiteur();
        $unVisteur->logout();
        return view('home');
    }
}