<?php
session_start();
ob_start();
include_once("conexao.php");

$btnCadProjeto = filter_input(INPUT_POST, 'btnCadProjeto', FILTER_SANITIZE_STRING);
	if($btnCadProjeto){
		include_once 'conexao.php';
		
		$dados_projeto = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		function myFunction1() {	
		global $idusuario;
		$idusuario = filter_input(INPUT_POST, 'idusuario', FILTER_SANITIZE_STRING);
	    }
	    myFunction1();

        $nomeprojeto = filter_input(INPUT_POST, 'nomeprojeto', FILTER_SANITIZE_STRING);
        $descricaoprojeto = filter_input(INPUT_POST, 'descricaoprojeto', FILTER_SANITIZE_STRING);
        $horasprojeto = filter_input(INPUT_POST, 'horasprojeto', FILTER_SANITIZE_STRING);        
        


        $result_projeto = "INSERT INTO projetos (id_usuario, nome_projeto, descricao_projeto, horas_projeto) VALUES ('$idusuario', '$nomeprojeto','$descricaoprojeto','$horasprojeto')";
						

		$resultado_projeto = mysqli_query($conn, $result_projeto);
		
		if(mysqli_insert_id($conn)){
			$_SESSION['msgcad'] = "Projeto cadastrado com sucesso";
			header("Location:cadastro_projeto.php");
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar o projeto";
		}
	}

#----------------------------------------------------------------------------------------------

$btnComentar = filter_input(INPUT_POST, 'btnComentar', FILTER_SANITIZE_STRING);
	if($btnComentar){
		include_once 'conexao.php';
		$dados_do_comentario = filter_input_array(INPUT_POST, FILTER_DEFAULT);	
        $comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);
        $id_de_usuario = ($_SESSION['id']);
		$id_do_projeto = filter_input(INPUT_POST, 'id_do_projeto', FILTER_SANITIZE_STRING);
        
        #function myFunction2() {
        #	global $id_de_usuario, $idusuario;
        #$id_de_usuario = $idusuario; 
        #}
        #myFunction2();
               
       #$result_id_user = "SELECT id"
        
        $result_comentario = "INSERT INTO comentarios (id_projeto, id_usuario, text_comentario) VALUES ('$id_do_projeto','$id_de_usuario','$comentario')";

         
		$resultado_do_comentario = mysqli_query($conn, $result_comentario);
		
		if(mysqli_insert_id($conn)){
			$_SESSION['msgcad'] = "Comentado";
			header("Location:cadastro_projeto.php");
		}else{
			$_SESSION['msg'] = "Erro ao comentar";
		}
	}

$result_projetos = "SELECT * FROM projetos";
	$resultado_projetos = mysqli_query($conn, $result_projetos);

#----------------------------------------------------------------------------------------------

$result_comentarios = "SELECT id_projeto, id_usuario, text_comentario FROM comentarios";
	$resultado_comentarios = mysqli_query($conn, $result_comentarios);

#----------------------------------------------------------------------------------------------

?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>projetos</title>
	</head>
	<body>
		<div class="w3-container w3-teal w3-third">
		<h4>
			<?php
			if(!empty($_SESSION['id'])){
 	        echo "Logado como: ".$_SESSION['nome']."<br>";
            }else{
	        $_SESSION['msg'] = "Área restrita";
	        header("Location: index.php");	
            }
            ?>
        </h4>
		</div>


		<div class ="w3-container w3-teal w3-third">
		<h4 class="w3-text-teal">Oooooooo</h4>
		</div>
		

		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
		
		<div class="w3-container w3-teal w3-third"><h4 class="w3-right-align"> <?php echo "<a href='sair.php'>Sair</a>"; ?></h4></div>

	
<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-border w3-margin-top w3-teal">Cadatrar projetos.</button>	
        <div id="id01" class="w3-modal">
<!--MODAL PARA CADASTRAR OS PROJETOS></!-->
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Novo Projeto</h2>
      </header>
      <div class="w3-container">
       <form method="POST" action="cadastro_projeto.php">
			<label>Nome do Projeto:</label>
			<input class="w3-panel w3-border w3-round-large" type="text" name="nomeprojeto" placeholder="Digite o nome do projeto"><br><br>

			<label>ID de Usuário:</label>
			<?php
			if(!empty($_SESSION['id'])){
 	        echo " ".$_SESSION['id']."<br>";
            }else{
	        $_SESSION['msg'] = "x";
	        header("Location: index.php");	
            }
            ?>

			

			
			<label>Descrição:</label><br>
			<textarea charset="utf-8" type="text" name="descricaoprojeto" class="msg" cols="35" rows="8" placeholder="Descrição"></textarea><br>
			
			
			<label>Duração(Quantidade de horas estimadas):<label>
			<input class="w3-panel w3-border w3-round-large" type="number" name="horasprojeto" placeholder="Número de horas estimadas"><br>
			<br>
			<input class="w3-btn w3-teal w3-round-xlarge" type="submit" name="btnCadProjeto"><br><br>

		
		</form>
      </div>
      <footer class="w3-container w3-teal">
        <p>inc©</p>
      </footer>
    </div>
   
  </div>		

<!--ESTA ÁREA SERA RESERVADA PARA INSERIR A LISTA DE PROJETOS></!-->
<!-- teste -->
<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Listar Projetos</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								
								<th>ID do projeto|</th>
								<th>ID do usuario|</th>
								<th>Nome do projeto|</th>
								<th>Descrição do projeto|</th>
								<th>Horas do projeto|</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows_projetos = mysqli_fetch_assoc($resultado_projetos)){ ?>
								<tr>
									<td style="border: 10px;"><?php echo $rows_projetos['id_projeto']; ?></td>
									<td><?php echo $rows_projetos['id_usuario']; ?></td>
									<td><?php echo $rows_projetos['nome_projeto']; ?></td>
									<td><?php echo $rows_projetos['descricao_projeto']; ?></td>
									<td><?php echo $rows_projetos['horas_projeto']; ?></td>
									
								</tr>
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>		
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<!-- teste -->

<br><br><br>

<!--ÁREA DE COMENTARIOS></!-->
<div>

            <div id="id02" class="w3-indigo w3-round-large">
			<form method="POST" action="cadastro_projeto.php">
            <label>Comentar um projeto:</label><br>
			<input class="w3-panel w3-border w3-round-large" type="text" name="id_do_projeto" placeholder="ID do projeto"><br><br>
			
			<textarea class="w3-round-large" charset="utf-8" type="text" name="comentario" class="msg" cols="93" rows="4" placeholder="Comentário"></textarea><br>
			<input class="w3-btn w3-black w3-round-xlarge" type="submit" name="btnComentar"><br><br>
		    </form>
            </div><br>
</div>
<!-- Comentarios -->
<div class = "w3-container">
    <button onclick="document.getElementById('coment').style.display='block'" class="w3-button w3-black w3-round-xlarge">Exibir Comentários</button>
    <div id="coment" class="w3-modal">
        <div class="w3-modal-content">
            <header class="w3-container w3-teal">
                <span onclick="document.getElementById('coment').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                

			<h2>Comentários</h2>
			</header>
			<div class="row">
				<div class="col-md-12">
				    <div class="w3-container">
					<table class="table">
						<thead>
							<tr>
								<th>ID Projeto</th>
								<th>Usuario</th>
								<th>Comentário</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows_comentarios = mysqli_fetch_assoc($resultado_comentarios)){ ?>
								<tr>
								    <!-- RODRIGO - NOME USUÁRIO -->
									<td><?php echo $rows_comentarios['id_projeto']; ?></td>
									<td><?php echo $rows_comentarios['id_usuario']; ?></td>
									<td><?php echo $rows_comentarios['text_comentario']; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>
			</div>
		</div>
</div>
		

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<!-- Comentarios -->




	</body>
</html>
