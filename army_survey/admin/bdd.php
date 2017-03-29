
<?php
$servername = "localhost";
$db_username = "serveydbacc";
$db_password = "2dbYPN2hfBBaLmP8";
try{
    $bdd = new PDO("mysql:host=$servername;dbname=survey_db",$db_username,$db_password);//create database connection object
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   /*  $sql_seq = "CREATE SEQUENCE wrc.RIG_VAL_SEQ START WITH 1 INCREMENT BY 1 CACHE 100";
    $query_seq = $bdd->prepare($sql_seq);
    $query_seq->execute(); */
    
}catch(PDOException $e){
    echo ($e->getMessage());
   
}
?>