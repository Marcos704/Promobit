<?php
namespace app\functions;
class Time {

    function getDataHoraAtual(){
        $data = date('d-m-Y H:i:s');
        return $data;
    }
    function getDiaAtual(){
        return date('d');
    }
    function getMesAtual(){
        return date('m');
    }
    function getAnoAtual(){
        return date('Y');
    }
    
}


?>