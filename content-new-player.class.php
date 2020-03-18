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
          <img src="imgs/football-player.png" class="mt-3 mb-2">
					<h4>Novo Jogador</h4>

          <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" name="name_player" class="form-control custom-field custom-placeholder custom-field-font" placeholder="Nome do Jogador" required>
            </div>
            <div class="form-group">
              <input type="text" name="position_player" class="form-control custom-field custom-placeholder custom-field-font" placeholder="Posição do Jogador" required maxlength="3">
            </div>
            <div class="form-group text-left">
              <input type="number" name="age_player" class="form-control custom-field" placeholder="Idade" required>
            </div>
            <div class="form-group">
              <input type="text" name="country_player" class="form-control custom-field custom-placeholder custom-field-font" placeholder="País" required>
            </div>
            <div class="form-group">
              <input type="text" name="state_player" class="form-control custom-field custom-placeholder custom-field-font" placeholder="Estado" required>
            </div>
            <div class="form-group">
              <input type="text" name="city_player" class="form-control custom-field custom-placeholder custom-field-font" placeholder="Cidade" required>
            </div>
            <div class="form-group">
              <input type="text" name="height_player" class="form-control custom-field custom-placeholder custom-field-font" placeholder="Altura">
            </div>
            <div class="form-group">
              <input type="number" name="weight_player" class="form-control custom-field custom-placeholder custom-field-font" placeholder="Peso">
            </div>
            <div class="form-group">
              <input type="number" name="number_player" class="form-control custom-field custom-placeholder custom-field-font" placeholder="Número da Camisa" required>
            </div>
            <div class="form-group">
              <div class="upload-btn-wrapper">
                <button class="btn-input">Foto do Jogador</button>
                <input type="file" name="photo_player">
              </div>
            </div>
            <button type="submit" name="btn_new_player" class="btn btn-success btn-block btn-lg">Cadastrar Jogador</button>
          </form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
