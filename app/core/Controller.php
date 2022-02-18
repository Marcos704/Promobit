<?php
namespace app\core;

class Controller{
     public function load($viewName, $viewData=array()){
      if($viewData) 
        extract($viewData); 
       
       include "app/views/" . $viewName .".php";
   }
    public function redirect($viewName){
        if($viewName == null){
            header("Location:".URL_BASE);
        }else{
            header("Location: ". URL_BASE . $viewName.".php"); 
        }
         
    }
    public function redirectAfter(){
        echo "<script>history.go(-1);</script>"; 
    }
}
