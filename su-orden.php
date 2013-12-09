<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RODCO Compras</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="row">
		<nav class="col-lg-12 navbar navbar-default">
			<form class="navbar-form">
				<div class="col-lg-5">
					<a href="index.php" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-chevron-left"></span> Volver a Productos</a>
				</div>
				<div class="col-lg-2 text-center">
					<h2>Su Orden</h2>
				</div>
				<div class="col-lg-5">
					<button class="btn btn-success btn-lg pull-right col-lg-5">Confirmar <span class="glyphicon glyphicon-ok"></span></button>
				</div>
			</form><!-- Header Buttons and Page Name -->
		</nav><!-- Navbar -->
	</div><!-- Row -->

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">

			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 text-center">			
					<h2>TOTAL:<span class="text-primary"> 359.040,00</span> Colones</h2>
				</div> <!-- Total Number -->
			</div><!-- Row -->
			<div class="row">
				<div class="col-lg-7 total-products">
					<div class="row">
						<h3 class="text-left col-lg-10 col-lg-offset-2">¿Cómo desea recibir su pedido?</h3>
					</div>
					<div class="row">
						<div class="col-lg-2 text-right">
							<label for="">Transportes*</label>
						</div>
						<div class="btn-group col-lg-10">
							<button class="btn btn-default btn-lg btn-primary">RODCO Express</button>
							<button class="btn btn-default btn-lg">Encomienda</button>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 text-right">
							<label for="">Encomienda</label>
						</div>
						<div class="col-lg-10 form-group">
							<form action="">
								<textarea class="form-control input-lg"  rows="3" required="required" placeholder="Escriba el nombre del servicio que desea usar"></textarea>
							</form>
						</div>
					</div>
					<div class="row">
						<h3 class="text-left col-lg-10 col-lg-offset-2">Su Correo Electrónico</h3>
					</div>

					<div class="row">
						<div class="col-lg-2 text-right">
							<h3><span class="glyphicon glyphicon-envelope"></span></h3>
						</div>
						<div class="btn-group col-lg-10">
							<form action="">
								<input type="email" class="form-control input-lg" required="required"  placeholder="Ej: ventas@suempresa.com">
							</form>
						</div>
					</div>

					<div class="row">
						<h3 class="text-left col-lg-10 col-lg-offset-2">Al confirmar la orden se le enviará un  <span class=" text-primary glyphicon glyphicon-envelope"></span> con el detalle.</h3>
					</div>

					<div class="row">
						<button class="btn btn-success btn-lg col-lg-4 col-lg-offset-4">Confirmar <span class="glyphicon glyphicon-ok"></span></button>
					</div>
					
				</div><!-- Total Products -->
	
				<div class="col-lg-5 product-list">
					<div class="row">
						<h4 class="col-lg-7">Productos Agregados </h4>
					</div>
					<div class="row">
						<label for="" class="col-lg-2 text-right">Cant.</label>
						<label for="" class="col-lg-10 text-left">Productos</label>
					</div>
					
					<div class="row">
						<div class="col-lg-2 text-right">
							<h4 class="">4</h4>
						</div>
						<div class="col-lg-10">
							<h4 class="text-left">CANDADOS YALE 11840 VISUAL BLISTER</h4>	
						</div>
					</div><!-- Un Producto Agregado -->
					
					<div class="row">
						<div class="col-lg-2 text-right">
							<h4 class="">8</h4>
						</div>
						<div class="col-lg-10">
							<h4 class="text-left">CANDADOS YALE 11840 VISUAL BLISTER</h4>	
						</div>
					</div><!-- Un Producto Agregado -->
					
					<div class="row">
						<div class="col-lg-2 text-right">
							<h4 class="">46</h4>
						</div>
						<div class="col-lg-10">
							<h4 class="text-left">CANDADOS YALE 11840 VISUAL BLISTER</h4>	
						</div>
					</div><!-- Un Producto Agregado -->
					
					<div class="row">
						<div class="col-lg-2 text-right">
							<h4 class="">84</h4>
						</div>
						<div class="col-lg-10 ">
							<h4 class="text-left">CANDADOS YALE 11840 VISUAL BLISTER</h4>	
						</div>
					</div><!-- Un Producto Agregado -->
					<div class="row">
						<button class="btn btn-default btn-lg col-lg-12 text-primary"><span class="glyphicon glyphicon-shopping-cart"></span> <span class="glyphicon glyphicon-plus"></span> Agregar más</button>
					</div>
				</div><!-- Product List -->
			</div>
		</div><!-- Column -->
	</div><!-- Row -->

	

	<script src="_/js/bootstrap.js"></script>
	<script src="_/js/myscript.js"></script>
</body>
</html>