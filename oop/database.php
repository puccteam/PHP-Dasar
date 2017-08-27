<?php
class database {
    
    var $host="localhost";
    var $username="root";
    var $password="";
    var $database="project";
    
    
    function __construct() {
        mysql_connect($this->host,  $this->username,  $this->password);
        mysql_select_db($this->database);
    }
    
    
    function tampildata()
    {
        $data=  mysql_query("select * from barang");
        while ($r=  mysql_fetch_array($data))
        {
            $hasil[]=$r;
        }
        return $hasil;
    }
    
    
    function insert($nama_barang,$harga)
    {
        $simpan=mysql_query("insert into barang set nama_barang='$nama_barang',harga='$harga'");
        if($simpan)
        {
            return "data disimpan kedatabase";
        }
        else
        {
            return 'gagal';
        }
    }
    

    function get_one($id)
    {
        $data=  mysql_query("select * from barang where barang_id='$id'");
        return mysql_fetch_array($data);
    }
    
    function update($nama_barang,$harga,$id)
    {
        $simpan=mysql_query("update barang set nama_barang='$nama_barang',harga='$harga' where barang_id='$id'");
        if($simpan)
        {
            return "data disimpan kedatabase";
        }
        else
        {
            return 'gagal';
        }
    }
    
    
    function delete($id)
    {
        mysql_query("delete from barang where barang_id='$id'");
    }
}
?>
