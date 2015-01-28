<?php

 function conexao(){
    $user =     'root';
    $passwd =   '';
    $db =       'sistema';
    $host =     'localhost';

    mysql_connect($host,$user,$passwd) or die ('Erro ao tentar conexão ao banco de dados: '. mysql_error());
    mysql_select_db($db) or die ('Erro ao selecionar banco de dados: '. mysql_error());

    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET character_set_connection=utf8");
    mysql_query("SET character_set_client=utf8");
    mysql_query("SET character_set_results=utf8");
 }

 function adicionar($sql_adicionar){
     mysql_query($sql_adicionar);
 }

function consultar($sql_consultar){
     return mysql_query($sql_consultar);
 }

 ?>