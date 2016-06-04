<?php
class web{
    
     function checkPage($nameCheck, $controller) {
          $page = dir("../views/" . $controller);
             $page->handle;
            $page->path;
            $array = array();
            $i = 0;
            while (false !== ($entry = $page->read())) {

                $array[$i] = $entry;
                $i++;
            }
            $i = 0;
            $page->close();
            foreach ($array as $name) {
                if ($name == $nameCheck.".php") {
                    return    '../views/'.$controller.'/'.$nameCheck.".php";
                }
            }
            $nameCheck = "../views/error";
            return $nameCheck.".php";
     }
     
      function checkController($nameCheck) {

            $page = dir("../controllers/");
            
           
            $page->handle;
            $page->path;
            $array = array();
            $i = 0;
            
            while (false !== ($entry = $page->read())) {

                $array[$i] = $entry;
                $i++;
            }
            $i = 0;
            $page->close();
           
            foreach ($array as $name) {
                if ($name == $nameCheck) {
                    return $nameCheck;
                }
            }
            $nameCheck = "error";
            return $nameCheck;
        }
    
    
    
}