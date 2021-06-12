<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    protected $table ="signups";

    protected $timestamp = false; 

    // protected function loginCheck(){
    //    try {

    //    if($_SESSION['user'] == NULL || $_SESSION['user']==""){
    //         return false; 

    //     }
    //     else{
    //         return true; 
    //     }
    // }catch(Expection $e){
    //     return false;
    // }
        
    // }
    // protected function writeLogin($username){
    //     session_start();
    //     $_SESSION['user'] = $username;
    //     return true;
    // }

    // protected function logout(){
    //     $_SESSION['user'] = "";
    //     session_unset();

    // }
}
