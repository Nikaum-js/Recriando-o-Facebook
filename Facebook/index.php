<!DOCTYPE html>
<html>
<head>
	<title>Login facebook</title>
	<meta name="viewport" content="width-device-width,initial-scale=1.0,maxium-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>Cara  livro</h2>
			</div><!--logo-->
			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone</p>
					<input type="e-mail" name="">
				</div><!--Form-element-->
				<div class="form-element">
					<p>Senha</p>
					<input type="passaword" name="">
				</div><!--Form-element-->
				<div class="form-element">
					<input type="submit" name="acao" value="Enviar" >
				</div><!--Form-element-->
			</form>
		</div><!--center-->
		<div class="clear"></div>
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="pessoas.png">
			</div><!--pessoas-->

			<div class="abrir-conta">
				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será</h3>

				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text" name="">
					</div><!--w50-->

					<div class="w50">
						<input placeholder="Sobrenome" type="text" name="">
					</div><!--w50-->

					<div class="w100">
						<input placeholder="E-mail" type="email" name="">
					</div><!--w100-->

					<div class="w100">
						<input placeholder="Senha" type="password" name="">
					</div><!--w100-->

					<div class="w100">
						<h2>Data de Nascimento</h2>
						 <select name="nascimento-dia" id="data" class="nascimento">
                            <?php
                                for ($i=1; $i < 32 ; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>

						<select name="nascimento-mes" class="nascimento">
							<option value="1">Janeiro</option>
							<option value="2">Fevereiro</option>
							<option value="3">Abril</option>
							<option value="4">Março</option>
							<option value="5">Maio</option>
							<option value="6">Junho</option>
							<option value="7">Julho</option>
							<option value="8">Agosto</option>
							<option value="9">Setembro</option>
							<option value="10">Outubro</option>
							<option value="11">Novembro</option>
							<option value="12">Dezembro</option>
						</select>

						<select name="nascimento-ano" id="data" class="nascimento">
                            <?php
                                for ($i=1900; $i < 2020 ; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                       <div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<div class="input-radio">
							<input name="sexo" type="radio" name="masculino">
							<h2>Masculino</h2>
						</div><!--input-radio-->

						<div class="input-radio">
							<input name="sexo" type="radio" name="feminino">
							<h2>Feminino</h2>
						</div><!--input-radio-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<input type="submit" name="acao" value="Cadastrar!">
					</div><!--w100-->

					<div class="class"></div>
				</form><!--create-account-->

			</div><!--abrir-conta-->
			<div class="clear"></div>
		</div><!--center-->
	</section>

	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Portugues (BR)</a>
			<a href="#">Portugues (BR)</a>
			<a href="#">Inglês</a>
			<a href="#">Mandarim Chinês</a>
			<a href="#">Hindi</a>
			<a href="#">Espanhol</a>
			<a href="#">Francês</a>
			<a href="#">Árabe padrão</a>
			<a href="#">Bengali</a>
		</div><!--center-->

		<div style="border:0; padding-top: 10px;" class="center">
			<a href="#">Indonésio</a>
			<a href="#">Russo</a>
			<a href="#">Japonês</a>
			<a href="#">Punjabi Ocidental</a>
			<a href="#">Marata</a>
			<a href="#">Alemão</a>
			<a href="#">Chinês</a>
			<a href="#">Javanês</a>
			<a href="#">Coreano</a>
			<a href="#">Francês</a>
			<a href="#">Vietnamita</a>
			<a href="#">Telugo</a>
			<a href="#">Cantonês</a>
			<a href="#">Marati</a>
			<a href="#">Tamil</a>
			<a href="#">Turco</a>
			<a href="#">Urdu</a>
			<a href="#">Min nan</a>
			<a href="#">Jinyu</a>
			<a href="#">Gujarati</a>
			<a href="#">Polaco</a>
			<a href="#">Egípcio</a>
			<a href="#">Ucraniano</a>
			<a href="#">Italiano</a>
			<a href="#">Xiang</a>
			<a href="#">Malaio</a>
			<a href="#">Hakka</a>
			<a href="#">Kannada</a>
			<a href="#">Oriya</a>
			<a href="#">Panjabi</a>
			<a href="#">Sunda</a>
			<a href="#">Panjabi</a>
			<a href="#">Romeno</a>
			<a href="#">Bhojpuri</a>
			<a href="#">Azerbaijão</a>
			<a href="#">Farsi</a>
		</div><!--center-->

	</section>

</body>
</html>