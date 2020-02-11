<?php 
//namespace foo;
class Config {
    public $config;
    function __construct(){
         $this->config =  new mysqli('localhost', 'root', '', 'blog') or die (mysqli_error($mysqli));
    }
}
?>