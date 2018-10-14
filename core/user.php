<?php

$user= [
    [
        "adsoyad" =>"metehan yuksel",
        "username" =>"mthnyksl",
        "password" => "12345abc"
    ]
];

function login ($username="",$password="",$user=[]){
    $login = 0;
    foreach ($user as $key => $value){
        if ($key=="username"){
            if ($value == $username){
                $login = 1;
            }
            else{
                $login = 0;
            }
        }
        else if ($key == "password"){
            if ($value == $password){
                $login = 1;
            }
            else{
                $login = 0;
            }
        }

    }

    return $login;
}