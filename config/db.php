<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author anonymous
 */
class db {

   
    protected $link;
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "test";

    function __construct() {
      
        $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }
    
    
    

}
