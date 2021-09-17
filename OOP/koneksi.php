<?php
class database{
  var $host="localhost";
  var $user="root";
  var $pass="";
  var $db="users";

  function __construct(){
    mysql_connect($this->host,$this->user,$this->pass);
    mysql_select_db($this->db);
  }
  function tampil_data(){
    $data = mysql_query("SELECT * FROM user");
    while($d = mysql_fetch_array($data)){
      $hasil[] = $d;
    }
    return $hasil;
  }
  function input($nama,$alamat,$usia){
    mysql_query("insert into user values('','$nama','$alamat','$usia')");
  }

  function edit($id){
  $data=mysql_query("SELECT * FROM user WHERE id='$id'");
  while($x=mysql_fetch_array($data)){
    $result[]=$x;
  }
  return $result;
  }

  function update($id,$nama,$alamat,$usia){
    mysql_query("UPDATE user SET nama='$nama',alamat='$alamat',usia='$usia' WHERE id='$id'");
  }

  function hapus($id){
    mysql_query("DELETE FROM user where id='$id'");
  }
}
