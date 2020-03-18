<?php
include("connect.class.php");
include("session.php");
//include("functions.class.php");



  $get_user_online_nav = mysqli_query($link, "SELECT * FROM users WHERE email_users = '$email_session' AND password_users = '$password_session'");
  $info_user_online_nav = mysqli_fetch_array($get_user_online_nav);


//REQUEST USER TEAM
$get_user_team_navbar = mysqli_query($link, "SELECT * FROM team WHERE id_creator_team = '$info_user_online_nav[id_users]'");
  $count_user_team_navbar = mysqli_num_rows($get_user_team_navbar);



?>


<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CAAD6B;">
    <a class="navbar-brand" href="timeline.php">Melhor da vez</a>
    <button class="navbar-toggler green-navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Sobre <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Parceiros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Top Times</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Eventos</a>
        </li>

        <?php
          if($count_user_team_navbar != 0){
            echo "
            <li class='nav-item'>
              <a class='nav-link' href='team.php'><button class='btn btn-dark'><i class='material-icons md-20'>school</i> Meu Time</button></a>
            </li>
            ";
          }else{
            echo "
            <li class='nav-item'>
              <a class='nav-link' href='new-team.php'><button class='btn btn-dark'><i class='material-icons md-20'>assignment_ind</i> Criar Time</button></a>
            </li>
            ";
          }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="challenges.php"><button class="btn btn-dark"><i class="material-icons md-20">gamepad</i> Desafios</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="challenges.php"><button class="btn btn-dark"><i class="material-icons md-20">account_circle</i> Perfil</button></a>
        </li>

      </ul>
    </div>
  </nav>
</body>
</html>
