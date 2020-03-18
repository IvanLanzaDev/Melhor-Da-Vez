<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1779998782077353',
          xfbml      : true,
          version    : 'v3.0'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

       FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});

{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        reauthorize_required_in:'...'
        signedRequest:'...',
        userID:'...'
    }
}
    </script>

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.0&appId=1779998782077353&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <div class="container-fluid">
        <div class="container-login col-12 col-lg-3 mx-auto text-center mt-4 mt-lg-5">
            <img src="imgs/logo_min_edit.png" class="img-fluid mt-5 mb-4" alt="Logo melhor da vez">
            <h5 class="gold-default mb-4">Bem vindo ao Melhor da Vez</h5>

            <form method="post" action="">
                <div class="form-group text-left">
                    <input type="email" class="form-control" placeholder="Digite seu email" id="emailLogin">
                </div>
                <div class="form-group text-left">
                    <input type="password" class="form-control" placeholder="Digite sua senha" id="passwordLogin">
                </div>
                <button type="submit" class="btn btn-success btn-block">Entrar</button>

                <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>

            </form>

            <div class="mt-5 pb-5">
                <span class="text-muted mt-5">
                <small class="mt-5">Ainda não é cadastrado?</small><br>
                <a href="singup.php" class="gold-default">Criar Conta</a>
            </span>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
