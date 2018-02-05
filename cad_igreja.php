<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1, shrink-to-fit=no">
	<title>IEMF_Administração</title>
	<link rel="stylesheet" type="text/css" href="bibliotecas/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bibliotecas/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bibliotecas/datatables/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="css/sb-admin.min.css">
	<link href="iconic/font/css/open-iconic.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<style type="text/css">
	legend{
		font-size: 15px;
		font-weight: bolder;
		font-family: "Times New Roman", Times, serif;
	}
</style>

</head>
<body class="bg-dark fixed-nav sticky-footer" id="page-top">
	
	<!-- ********* NAVEGAÇÃO ******************************************************** -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="index.php">IEMF_Admin</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarIEMF" aria-control="navbarIEMF" aria-expanded="false" aria-label="Navegação Toggle"> 
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="navbarIEMF" class="collapse navbar-collapse">
			<ul class="navbar-nav navbar-sidenav" id="linksaccordion">
				<li class="nav-item" data-toggle="tooltip" data-placement="right">
					<a class="nav-link" href="#linkspagina">
						<i class="fa fa-fw fa-dashboard"></i> <!-- ÍCONE -->
						<span class="nav-link-text">Dashboard</span> 
					</a>
				</li>
				<!-- ABAS COM SUBITENS ************************************************** -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right">
					<a class="nav-link nav-link-collapse collapse" href="#igreja" data-toggle="collapse" data-parent="linksaccordion">
						<i class="fa fa-fw fa-table"></i>
						<span class="nav-link-text">IGREJA</span> 
					</a>
					<!-- SUBITENS DOS MENU -->
					<ul class="sidenav-second-level collapse" id="igreja">
						<li><a href="cad_igreja.php">Nova Igreja</a></li>
						<li><a href="atualizar_igreja.php">Atualizar Igreja</a></li>
					</ul>
				</li>
				<!-- ABAS COM SUBITENS ************************************************** -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right">
					<a class="nav-link nav-link-collapse collapse" href="#membro" data-toggle="collapse" data-parent="linksaccordion">
						<i class="fa fa-fw fa-table"></i>
						<span class="nav-link-text">MEMBRO</span> 
					</a>
					<!-- SUBITENS DOS MENU -->
					<ul class="sidenav-second-level collapse" id="membro">
						<li><a href="cad_membro.php">Novo Membro</a></li>
						<li><a href="atualizar_membro.php">Atualizar Membro</a></li>
					</ul>
				</li>
				<!-- ABAS COM SUBITENS ************************************************** -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right">
					<a class="nav-link nav-link-collapse collapse" href="#componentes" data-toggle="collapse" data-parent="linksaccordion">
						<i class="fa fa-fw fa-wrench"></i>
						<span class="nav-link-text">COMPONENTES</span> 
					</a>
					<!-- SUBITENS DOS MENU -->
					<ul class="sidenav-second-level collapse" id="componentes">
						<li><a href="login.php">Página Comp</a></li>
						<li><a href="login.php">Página Comp</a></li>
						<li><a href="#componentes" class="nav-link-collapse collapse" data-toggle="collapse">Link 3 Nível</a>
							<ul class="sidenav-third-level collapse" id="componentes">
								<li><a href="login.php">Página Comp</a></li>
								<li><a href="login.php">Página Comp</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- ABAS COM SUBITENS ************************************************** -->
				<li class="nav-item" data-toggle="tooltip" data-placement="right">
					<a class="nav-link nav-link-collapse collapse" href="#linkspagina" data-toggle="collapse" data-parent="linksaccordion"> <!-- Adicione classes auxiliares para poder funcionar -->
						<i class="fa fa-fw fa-file"></i>
						<span class="nav-link-text">Páginas</span> 
					</a>
					<!-- SUBITENS DOS MENU -->
					<ul class="sidenav-second-level collapse" id="linkspagina">
						<li><a href="login.php">Página Login</a></li>
						<li><a href="login.php">Página Login</a></li>
						<li><a href="#link3nivel" class="nav-link-collapse collapse" data-toggle="collapse">Link 3 Nível</a>
							<ul class="sidenav-third-level collapse" id="link3nivel">
								<li><a href="login.php">Página Login</a></li>
								<li><a href="login.php">Página Login</a></li>
								<li><a href="login.php">Página Login</a></li>
							</ul>
						</li>
					</ul>
				</li> <!-- FECHAMENTO DOS ITENS E SUBITENS -->
			</ul>
			<!-- ************************************************************ -->
			<ul class="navbar-nav sidenav-toggler"> <!-- BOTÃO PARA ESCONDER BARRA LATERAL -->
				<li class="nav-item">
					<a id="sidenavToggler" class="nav-link text-center">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>

			<!-- ************************************************************ -->

			<ul class="navbar-nav ml-auto"> 
				
				<li class="nav-item dropdown"> <!-- DISPARADOR DE MENSAGENS -->
					<a href="#" class="nav-link dropdown-toggle mr-lg-2" id="menssagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-envelope"></i>
						<span class="d-lg-none">Mensagens <!-- Display para dispositivos pequenos -->
							<span class="badge badge-pill badge-primary">12 novas</span>
						</span>
						<span class="indicator text-primary d-nome d-lg-block">
							<i class="fa fa-fw fa-circle"></i>
						</span>
					</a>

					<div class="dropdown-menu" aria-labelledby="menssagesDropdown">
						<h6 class="dropdown-header">Novas Mensagens</h6>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<strong>Israel Almeida</strong>
							<span class="small float-right text-muted">01:03</span>
							<div class="dropdown-message small">
								Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja.
							</div>
							<div class="dropdown-divider"></div>
						</a>
						<a href="#" class="dropdown-item">
							<strong>Adriana Almeida</strong>
							<span class="small float-right text-muted">01:03</span>
							<div class="dropdown-message small">
								Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja.
							</div>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item small">Ver todas as Mensagens</a>
						</a>
					</div>
				</li>

				<!-- ************************************************************ -->

				<li class="nav-item dropdown"> <!-- DISPARADOR DE ALERTAS -->
					<a href="#" class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-bell"></i>
						<span class="d-lg-none">Alertas <!-- Display para dispositivos pequenos -->
							<span class="badge badge-pill badge-warning">5 novos</span>
						</span>
						<span class="indicator text-warning d-nome d-lg-block">
							<i class="fa fa-fw fa-circle"></i>
						</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="alertsDropdown">
						<h6 class="dropdown-header">Novos Alertas</h6>
						<div class="dropdown-divider"></div>
						<!-- //////////////////////////////////////////////////////////////////// -->
						<a href="#" class="dropdown-item"> <!-- 1º item exemplo -->
							<span class="text-success">
								<strong>
									<i class="fa fa-fw fa-long-arrow-up"></i>
									Atualização de Estado
								</strong>
							</span>
							<span class="small float-right text-muted">01:03</span>
							<div class="dropdown-message small">
								Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja.
							</div>
							<div class="dropdown-divider"></div>
						</a>
						<!-- //////////////////////////////////////////////////////////////////// -->
						<a href="#" class="dropdown-item"> <!-- 2º item exemplo -->
							<span class="text-danger">
								<strong>
									<i class="fa fa-fw fa-long-arrow-down"></i>
									Atualização de Estado
								</strong>
							</span>
							<span class="small float-right text-muted">01:03</span>
							<div class="dropdown-message small">
								Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja.
							</div>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item small">Ver todos Alertas</a>
						</a>
						<!-- //////////////////////////////////////////////////////////////////// -->
					</div>
				</li>

				<!-- ************************************************************ -->	

				<li class="nav-item"> <!-- CAMPO PESQUISAR -->
					<form class="form-inline my-2 my-lg-0 mr-lg-2">
						<div class="input-group">
							<input type="text" name="pesquisar" class="form-control" placeholder="Pesquisar por...">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
				</li>
				<!-- ************************************************************ -->
				<li class="nav-item"> <!-- BOTÃO LOGOUT (SAIR) -->
					<a href="#" class="nav-link">
						<i class="fa fa-sign-out">Logout</i>
					</a>
				</li>
				<!-- ************************************************************ -->
			</ul>
		</div>
	</nav> <!-- FECHA A NAVEGAÇÃO (NAVBAR)-->
	<!-- ******************************* DAQUI PRA CIMA FIK TUDO ****************************** -->

	<!-- **** ÁREA DE CONTEÚDO **** -->
	<div class="content-wrapper">
		<div class="container-fluid">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="home.php">Home</a>
				</li>
				<li class="breadcrumb-item">
					Cadastrar Nova Igreja
				</li>
			</ol>
			<div class="jumbotron">
				<img src="imagens/logo150x150.png">
				<h1 style="display: inline">CADASTRAR NOVA IGREJA</h1>
			</div>
			<!-- ********** FICAAAAAAAAAAAAAAAAAA ************************** -->	
			<div class="content">
				<?php
				if(isset($_SESSION['msg_cad'])){
					echo $_SESSION['msg_cad'];
					unset($_SESSION['msg_cad']);
				}
				?>
				<form class="col-md-12 form-control-sm" id="formIgreja" method="POST" action="valida_cad_igreja.php">
					<!-- ********************************************************************** -->
					<div class="form-row">
						<!-- ABERTURA DA 1º PARTE DO FORMULÁRIO -->
						
						<div class="form-group col-3">
							<fieldset disabled>
								<div class="form-group">
									<input type="text" id="nomeigreja" value="IGREJA EVANGÉLICA MISSÃO DE FÉ" class="form-control" placeholder="IGREJA EVANGÉLICA MISSÃO DE FÉ">
								</div>
							</fieldset>
						</div>

						<div class="form-group text-center col-1">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="situacao" id="situacao1" value="Ativa">
								<label class="form-check-label" for="situacao1">ATIVA</label>
							</div>
						</div>

						<div class="form-group text-center col-1">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="situacao" id="situacao2" value="Inativa">
								<label class="form-check-label" for="situacao2">INATIVA</label>
							</div>
						</div>
						
						<!-- ABERTURA DA 1º PARTE DO FORMULÁRIO -->
						<div class="form-group col-2"> <!-- SETOR -->
							<select class="form-control" id="setor_da_igreja" name="setor">
								<option value=""	  >Selecione o Setor</option>
								<option value="SETOR_1">SETOR_1 - Mauá</option>
								<option value="SETOR_2">SETOR_2 - Salto de Pirapora</option>
								<option value="SETOR_3">SETOR_3 - Itaim Paulista</option>
								<option value="SETOR_4">SETOR_4 - Campinas</option>
								<option value="SETOR_5">SETOR_5 - Colina</option>
								<option value="SETOR_6">SETOR_6 - Bahia</option>
								<option value="SETOR_7">SETOR_7 - Pernambuco</option>
								<option value="SETOR_8">SETOR_8 - Itororó</option>
								<option value="SETOR_9">SETOR_9 - </option>
							</select>
						</div>

						<div class="form-group col-3"> <!-- RESPONSAVEL DO SETOR -->
							<input id="resp_setor" name="resp_setor" type="text" class="form-control" maxlength="50" placeholder="Nome do Resp. do Setor" 
							<?php
							if(!empty($_SESSION['value_resp_setor'])){
								echo "value='".$_SESSION['value_resp_setor']."'";
								unset($_SESSION['value_resp_setor']);
							}
							?>
							>
							<?php
							if(!empty($_SESSION['vazio_resp_setor'])){
								echo "<p style='color: #F00; '>".$_SESSION['vazio_resp_setor']."</p>";
								unset($_SESSION['vazio_resp_setor']);
							}
							?>
						</div>




						<!-- ***************************************************************** -->	


						<legend>DADOS DA IGREJA</legend>

						<div class="form-group col-2"> <!-- TELEFONE 1-->
							<input id="telefone1" name="telefone1" type="text" class="form-control" maxlength="20" placeholder="Telefone"
							<?php
							if(!empty($_SESSION['value_telefone1'])){
								echo "value='".$_SESSION['value_telefone1']."'";
								unset($_SESSION['value_telefone1']);
							}
							?>>
						</div>

						<div class="form-group col-2"> <!-- TELEFONE 2-->
							<input id="telefone2" name="telefone2" type="text" class="form-control" maxlength="20" placeholder="Telefone"
							<?php
							if(!empty($_SESSION['value_telefone2'])){
								echo "value='".$_SESSION['value_telefone2']."'";
								unset($_SESSION['value_telefone2']);
							}
							?>>
						</div>

						<div class="form-group  col-4"> <!-- LOGRADOURO -->
							<input id="logradouro" name="logradouro" type="text" class="form-control" maxlength="50" placeholder="Rua / Av / Quadra ..."
							<?php
							if(!empty($_SESSION['value_logradouro'])){
								echo "value='".$_SESSION['value_logradouro']."'";
								unset($_SESSION['value_logradouro']);
							}
							?>>
						</div>

						<div class="form-group  col-1"> <!-- NÚMERO -->
							<input  id="numero" name="numero" type="number" class="form-control" placeholder="Nº"
							<?php
							if(!empty($_SESSION['value_numero'])){
								echo "value='".$_SESSION['value_numero']."'";
								unset($_SESSION['value_numero']);
							}
							?>>
						</div>

						<div class="form-group col-2"> <!-- CEP -->
							<input id="cep" name="cep" type="text" class="form-control" min="8" max="8" placeholder="CEP" 
							<?php
							if(!empty($_SESSION['value_cep'])){
								echo "value='".$_SESSION['value_cep']."'";
								unset($_SESSION['value_cep']);
							}
							?>>
						</div>

						<div class="form-group col-4"> <!-- BAIRRO -->
							<input id="bairro" name="bairro" type="text" class="form-control" maxlength="35" placeholder="Bairro" 
							<?php
							if(!empty($_SESSION['value_bairro'])){
								echo "value='".$_SESSION['value_bairro']."'";
								unset($_SESSION['value_bairro']);
							}
							?>>
						</div>

						<div class="form-group col-4"> <!-- CIDADE -->
							<input id="cidade" name="cidade" type="text" class="form-control" maxlength="35" placeholder="Cidade" 
							<?php
							if(!empty($_SESSION['value_cidade'])){
								echo "value='".$_SESSION['value_cidade']."'";
								unset($_SESSION['value_cidade']);
							}
							?>>
						</div>

						<div class="form-group col-1"> <!-- ESTADO -->
							<select class="form-control" id="estado" name="estado">
								<option value=""> UF </option>
								<option value="AC"> AC </option>
								<option value="AL"> AL </option>
								<option value="AP"> AP </option>
								<option value="AM"> AM </option>
								<option value="BA"> BA </option>
								<option value="CE"> CE </option>
								<option value="DF"> DF </option>
								<option value="ES"> ES </option>
								<option value="GO"> GO </option>
								<option value="MA"> MA </option>
								<option value="MT"> MT </option>
								<option value="MS"> MS </option>
								<option value="MG"> MG </option>
								<option value="PA"> PA </option>
								<option value="PB"> PB </option>
								<option value="PR"> PR </option>
								<option value="PE"> PE </option>
								<option value="PI"> PI </option>
								<option value="RJ"> RJ </option>
								<option value="RN"> RN </option>
								<option value="RS"> RS </option>
								<option value="RO"> RO </option>
								<option value="RR"> RR </option>
								<option value="SC"> SC </option>
								<option value="SP"> SP </option>
								<option value="SE"> SE </option>
								<option value="TO"> TO </option>
								</select
								<?php
								if(!empty($_SESSION['value_estado'])){
									echo "value='".$_SESSION['value_estado']."'";
									unset($_SESSION['value_estado']);
								}
								?>>
							</div>

							<div class="form-group col-2"> <!-- APELIDO -->
								<input id="apelido" name="apelido" type="text" class="form-control" maxlength="35" placeholder="Apelido" 
								<?php
								if(!empty($_SESSION['value_apelido'])){
									echo "value='".$_SESSION['value_apelido']."'";
									unset($_SESSION['value_apelido']);
								}
								?>>
							</div>

							<legend>1º Dirigente</legend>
							<div class="form-group col-3"> <!-- DIRIGENTE 1 -->
								<input id="nome_dirigente1" name="nome_dirigente1" type="text" class="form-control" maxlength="50" placeholder="Nome do 1º Dirigente" 
								<?php
								if(!empty($_SESSION['value_dirigente1'])){
									echo "value='".$_SESSION['value_dirigente1']."'";
									unset($_SESSION['value_dirigente1']);
								}
								?>
								>
								<?php
								if(!empty($_SESSION['vazio_dirigente1'])){
									echo "<p style='color: #F00; '>".$_SESSION['vazio_dirigente1']."</p>";
									unset($_SESSION['vazio_dirigente1']);
								}
								?>
							</div>

							<div class="form-group col-3"> <!-- ESPOSA DO DIRIGENTE 1 -->
								<input id="esposa_dirigente1" name="esposa_dirigente1" type="text" class="form-control" maxlength="50" placeholder="Esposa do 1º Dirigente" 
								<?php
								if(!empty($_SESSION['value_esposa_dirigente1'])){
									echo "value='".$_SESSION['value_esposa_dirigente1']."'";
									unset($_SESSION['value_esposa_dirigente1']);
								}
								?>>
							</div>

							<legend>2º Dirigente</legend>
							<div class="form-group col-3"> <!-- DIRIGENTE 2 -->
								<input id="nome_dirigente2" name="nome_dirigente2" type="text" class="form-control" maxlength="50" placeholder="Nome do 2º Dirigente"
								<?php
								if(!empty($_SESSION['value_nome_dirigente2'])){
									echo "value='".$_SESSION['value_nome_dirigente2']."'";
									unset($_SESSION['value_nome_dirigente2']);
								}
								?>>
							</div>

							<div class="form-group col-3"> <!-- ESPOSA DO DIRIGENTE 2 -->
								<input id="esposa_dirigente2" name="esposa_dirigente2" type="text" class="form-control" maxlength="50" placeholder="Esposa do 2º Dirigente"
								<?php
								if(!empty($_SESSION['value_esposa_dirigente2'])){
									echo "value='".$_SESSION['value_esposa_dirigente2']."'";
									unset($_SESSION['value_esposa_dirigente2']);
								}
								?>>
							</div>

							<legend>Secretário(s)</legend>
							<div class="form-group col-3"> <!-- SECRETARIO 1 -->
								<input id="secretario1" name="secretario1" type="text" class="form-control" maxlength="50" placeholder="Nome do 1º Secretário"
								<?php
								if(!empty($_SESSION['value_secretario1'])){
									echo "value='".$_SESSION['value_secretario1']."'";
									unset($_SESSION['value_secretario1']);
								}
								?>>
							</div>

							<div class="form-group col-3"> <!-- SECRETARIO 2 -->
								<input id="secretario2" name="secretario2" type="text" class="form-control" maxlength="50" placeholder="Nome do 2º Secretário"
								<?php
								if(!empty($_SESSION['value_secretario2'])){
									echo "value='".$_SESSION['value_secretario2']."'";
									unset($_SESSION['value_secretario2']);
								}
								?>>
							</div>

							<legend>Tesoureiro(s)</legend>
							<div class="form-group col-3"> <!-- TESOUREIRO 1 -->
								<input id="tesoureiro1" name="tesoureiro1" type="text" class="form-control" maxlength="50" placeholder="Nome do 1º Tesoureiro"
								<?php
								if(!empty($_SESSION['value_tesoureiro1'])){
									echo "value='".$_SESSION['value_tesoureiro1']."'";
									unset($_SESSION['value_tesoureiro1']);
								}
								?>>
							</div>

							<div class="form-group col-3"> <!-- TESOUREIRO 2 -->
								<input id="tesoureiro2" name="tesoureiro2" type="text" class="form-control" maxlength="50" placeholder="Nome do 2º Tesoureiro"
								<?php
								if(!empty($_SESSION['value_tesoureiro2'])){
									echo "value='".$_SESSION['value_tesoureiro2']."'";
									unset($_SESSION['value_tesoureiro2']);
								}
								?>>
							</div>

						</div>	

						<!-- ***************************************************************************************************** -->

						<!-- BOTÃO DE ESCOLHA FINAL DA PAGINA -->
						<div class="row">
							<button id="cad_igr" type="submit" class="btn btn-primary btn-lg btn-block">CADASTRAR IGREJA</button>
						</div>
						<!-- ********** FICAAAAAAAAAAAAAAAAAA ************************** -->
					</div>
				</form>
			</div>
		</div>

		<!-- ÁREA DE RODAPÉ ********************************************* -->
		<footer class="sticky-footer">
			<div class="container">
				<div class="text-center">
					<small>Coryright Seu site 2018</small>
				</div>
			</div>
		</footer>
	</div>
	<!-- ************************************************************ -->	

	<script src="bibliotecas/jquery/jquery.min.js"></script>
	<script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="bibliotecas/jquery-easing/jquery.easing.min.js"></script>
	<script src="bibliotecas/datatables/jquery.dataTables.js"></script>
	<script src="bibliotecas/datatables/dataTables.bootstrap4.js"></script>
	<script src="js/sb-admin.min.js" type="text/javascript" ></script>
	<script src="js/sb-admin-datatables.min.js" type="text/javascript" ></script>
</body>
</html>