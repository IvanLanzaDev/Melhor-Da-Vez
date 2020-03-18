<?php
include('connect.class.php');

// ------------------------ NEW USER
$name_new_users = $_POST['name_users'];
$email_new_users = $_POST['email_users'];
$pass_new_users = $_POST['password_users'];
$btn_new_user = $_POST['btn_adm'];

if(isset($btn_new_user)){
    $insert_new_user = mysqli_query($link, "INSERT INTO users(name_users,email_users,password_users)VALUES('$name_new_users','$email_new_users','$pass_new_users')");
    if(!$insert_new_user){
        echo "erro";
    }else {
      header("location: ok-login.php");
    }
}

// ------------------------ lOGIN
$email_login = $_POST['email_login'];
$password_login = $_POST['password_login'];
$btn_login = $_POST['btn_login'];

if(isset($btn_login)){
  $execute_login = mysqli_query($link, "SELECT * FROM users WHERE email_users = '$email_login' AND password_users = '$password_login'");
  $count_users_login = mysqli_num_rows($execute_login);

  if($count_users_login){
    session_start();
    $_SESSION['email_login'] = $_POST['email_login'];
    $_SESSION['password_login'] = $_POST['password_login'];
    header("location: timeline.php");
  }else {
    header("location: error-login.php");
  }
}

// ------------------------ GET USER ONLINE
$get_user_online = mysqli_query($link, "SELECT * FROM users WHERE email_users = '$email_session' AND password_users = '$password_session'");
$info_user_online = mysqli_fetch_array($get_user_online);

// ------------------------ NEW TEAM
$id_creator_team = $info_user_online['id_users'];
$name_new_team = $_POST['name_team'];
$city_new_team = $_POST['city_team'];
$year_new_team = $_POST['year_team'];
$founder_new_team = $_POST['founder_team'];
$btn_new_team = $_POST['btn_new_team'];
// ------------------------ UPLOAD DE IMG
$logo_new_team = $_FILES['logo_team']['name'];
$temporario_new_team = $_FILES['logo_team']['tmp_name'];
$diretorio_new_team = "team/".$logo_new_team;
move_uploaded_file($temporario_new_team, $diretorio_new_team);



if(isset($btn_new_team)){
  $insert_new_team = mysqli_query($link, "INSERT INTO team(id_creator_team,name_team,city_team,year_team,founder_team,logo_team)VALUES('$id_creator_team','$name_new_team','$city_new_team','$year_new_team','$founder_new_team','$diretorio_new_team')");
  if($insert_new_team){
    header("location: ok-new-team.php");
  }
}

// ------------------------ GET TEAM INFO
$get_team_info = mysqli_query($link, "SELECT * FROM team WHERE id_creator_team = '$info_user_online[id_users]'");
$list_team_info = mysqli_fetch_array($get_team_info);

// ------------------------ NEW PLAYER
$id_team_player = $list_team_info['id_team'];
$name_new_player = $_POST['name_player'];
$position_new_player = $_POST['position_player'];
$age_new_player = $_POST['age_player'];
$country_new_player = $_POST['country_player'];
$state_new_player = $_POST['state_player'];
$city_new_player = $_POST['city_player'];
$height_new_player = $_POST['height_player'];
$weight_new_player = $_POST['weight_player'];
$number_new_player = $_POST['number_player'];
$btn_new_player = $_POST['btn_new_player'];

$foto_new_player = $_FILES['photo_player']['name'];
$temporario_new_player = $_FILES['photo_player']['tmp_name'];
$diretorio_new_player = "player/".$foto_new_player;
move_uploaded_file($temporario_new_player, $diretorio_new_player);

if(isset($btn_new_player)){
  $insert_new_player = mysqli_query($link, "INSERT INTO player(id_team_player,name_player,position_player,age_player,country_player,state_player,city_player,height_player,weight_player,number_player,photo_player)VALUES('$id_team_player','$name_new_player','$position_new_player','$age_new_player','$country_new_player','$state_new_player','$city_new_player','$height_new_player','$weight_new_player','$number_new_player','$diretorio_new_player')");
  if($insert_new_player){
    header("location: ok-new-player.php");

  }
}

// ------------------------ GET PLAYER INFO
$get_player_info = mysqli_query($link, "SELECT * FROM player WHERE id_team_player = '$id_team_player'");
$count_players_team = mysqli_num_rows($get_player_info);

// ------------------------ VIEW PLAYER INFO
$id_player_url = $_GET['id_player'];
$view_player = mysqli_query($link, "SELECT * FROM player WHERE id_player = '$id_player_url'");
$list_view_player = mysqli_fetch_array($view_player);


?>
