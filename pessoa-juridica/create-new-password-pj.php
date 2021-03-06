<!doctype html>
<html lang="pt-br">
  <head>
	<title>Recuperar Senha - Pessoa Física</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>


		<div class="container">
			<div class="row justify-content-center mt-5">

        <?php
          $selector = $_GET["selector"];
          $validator = $_GET["validator"];

          if (empty($selector) || empty($validator)) {
            echo "Solicitação Inválida";
          } else {
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
        ?>

				<div class="col-5">
					<h2 class="text-align-center mb-4">Recuperar Senha</h2>
          <form action="includes/create-new-password-inc-pj.php" method="POST">
            <input type="hidden" name="selector" value="<?php echo $selector; ?>">
            <input type="hidden" name="validator" value="<?php echo $validator; ?>">

            <label>Nova senha:</label>
            <input type="password" name="pwd" placeholder="Digite sua nova senha" class="form-control"><br>

            <label>Nova senha:</label>
            <input type="password" name="pwd-repeat" placeholder="Confirme sua nova senha" class="form-control"><br>

            <button type="submit" name="reset-password-submit" class="btn btn-success col-4 offset-4">Redefinir senha</button><br><br>

            <a href="login-pj.php">Voltar para fazer login</a><br><br>
          </form>
				</div>

        <?php
        }
      }
      ?>

      </div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>