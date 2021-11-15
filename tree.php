<?php

function RemplacerDesLettres(string $mot) :string{
    $res = "";
    $voyelle = ['a','e','i','o','u'];
    
    for($i=0; $i<strlen($mot); $i++){
     if(in_array($mot[$i], $voyelle)){
         if($i>0 && !in_array($mot[$i-1], $voyelle)){
            $res.= "ae";
         }
         else{
             $res.= $mot[$i];
         }
     }
     else{
         $res.= $mot[$i];
     }
    }
    return $res;
}