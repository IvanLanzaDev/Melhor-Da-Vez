<?php include("functions.class.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="container-posts col-12 mt-2">
				<div class="content-posts col-12 text-center">
          <img src="imgs/team-img.png">
					<h5 class="mt-3">Crie seu time hoje!</h5>
          <p class="text-muted">E comece um novo desafio entre times.</p>


          <form method="post" action="" enctype="multipart/form-data" class="text-left mt-3">
            <div class="form-group mt-5">
              <input type="text" class="form-control custom-field custom-placeholder custom-field-font" name="name_team" placeholder="Nome do Time">
            </div>
            <div class="form-group">
              <input type="text" class="form-control custom-field custom-placeholder custom-field-font" name="city_team" placeholder="Cidade do Time">
            </div>
            <div class="form-group">
              <input type="number" class="form-control custom-field custom-placeholder custom-field-font" name="year_team" placeholder="Ano de Fundação">
            </div>
            <div class="form-group">
              <input type="text" class="form-control custom-field custom-placeholder custom-field-font" name="founder_team" placeholder="Fundador (opcional)">
            </div>
            <div class="form-group">
              <label>Brasão do Time</label>
              <input type="file" class="form-control custom-field custom-placeholder custom-field-font" name="logo_team" placeholder="">
            </div>

            <button type="submit" class="btn btn-outline-success btn-block btn-lg mb-3" name="btn_new_team">Criar Time <i class="material-icons md-20 mt-1">done</i></button>
          </form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
