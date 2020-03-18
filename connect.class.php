<?php
$link = mysqli_connect("mysql.hostinger.com.br","u640958987_admin","melhordavez");
if($link){
    mysqli_select_db($link, "u640958987_melho");
}else{
    echo "Erro ao se conectar com o banco de dados";
}
?>
