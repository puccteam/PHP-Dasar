<?php
class mobil{
    
    public  $warna;
    public  $merk;
    protected $harga;
    

    function __construct(){
        //$this->test();
    }
    
    function say_hello()
    {
        return 'hallo nuris';
    }
    
    function set_harga($harga)
    {
        $this->harga=$harga;
    }
    
    function get_harga()
    {
        return $this->harga;
    }
    
    function __destruct(){
        
        //echo "<br>ini adalah string penutup";
    }
}
?>
