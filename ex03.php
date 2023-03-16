<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Cadastro </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	<hr>
	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="#" method="POST">
				<div class="card">
				  <div class="card-header">
				    Parcele sua Divida!!!
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-4">
		  					<label> Valor da divida <span class="text-danger">*</span> </label><br>
							<input type="number" name="divida" class="form-control" min="0" required><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> Numero de parcela <span class="text-danger">*</span></label><br>
							<input type="number" name="parcelas" class="form-control" min="1" max="24" required><br>
		  				</div>

						<div class="col-md-4">
		  					<label> Data de vencimento<span class="text-danger">*</span></label><br>
							<input type="month" name="vencimento" class="form-control" min="1" required><br>
		  				</div>


				    	<div class="col-md-12">
							<input type="submit" class="btn btn-success" value="Realizar Parcelamento"> 
				    	</div>
		  			</div>	

				  </div>
				</div>
			</form>
	  	</div>	  	
	  </div>
	</div>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



	<?php 
		
		# Testando se existe algum post preenchido
		if(isset($_POST['divida'])){

			$divida = $_POST['divida'];
			$parcelas = $_POST['parcelas'];
			$vencimento = $_POST['vencimento'];

			$valorparcela = $divida / $parcelas;
	?>	
			<div class="container-fluid col-md-10 offset-md-1">
				<table class="table table-hover table-bordered table-striped">
                    <tr>
                        <th>Numero de Parcelas</th>
                        <th>Valor da Parcela</th>
                        <th>Data de Vencimento</th>
                    </tr>
					<?php for($v=1;$v<=$parcelas;$v++): ?>
					<tr>
						<td><?php echo $v; ?></td>
						<td><?php echo "R$ $valorparcela";?></td>
						<td><?php echo date('m/Y', strtotime("+" . (($v - 0) * 31) . "days", strtotime($vencimento))); ?></td>
					</tr>
					<?php endfor; ?>
				</table>
			</div>

	<?php  } else { ?>		
		<div class="col-md-6 offset-md-3">
			<hr>
			<div class="alert alert-warning" role="alert">
			  Entre com os dados para gerar o parcelamento de sua fatura!
			</div>
		</div>
	<?php } ?>	


</body>
</html>

