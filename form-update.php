<?php 
	session_start();
	if(!isset ($_SESSION["logado"]) == true){
		header('Location: login.html');
	}
     include("cabecalho-cliente.php");
     include("conexaoMySQL.php");
     include("crud-cliente.php");

      $codigo = $_GET['ID'];
      $cliente = selectUpdate_Cliente($conexao,$codigo);
?>

	<h1>DADOS DO CLIENTE</h1>

		<form action="update-cliente.php" method="post">
      
      <table class="table">
				<tr>
          			<td>Nome Completo do Cliente:</td>  
        			<td> 
        				<input class="form-control" type="text" placeholder="EX.: ROBERTO CARLOS DA SILVA DIAS" name="nome" value="<?=$cliente['NOME']?>"autofocus/><br/>
        			</td>
        		</tr>
				<tr>
          			<td>E-mail do Cliente:</td>  
        			<td> 
        				<input class="form-control" type="text" placeholder="EX.: robertocarlos@robertocarlos.com.br" name="email" value="<?=$cliente['EMAIL']?>"/><br/>
        			</td>
        		</tr>
            
            <input type="hidden" name="ID" value="<?=$cliente['CODIGO']?>"/>


				<tr>
		  			<td><input class="btn btn-light" type="submit" value="ATUALIZAR"/>
          			</td>
          			<td></td>
				</tr>
      		</table>


    	</form>
    	
<?php include("rodape.php"); ?>