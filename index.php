
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Calculadora de Áreas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/css/index.css">
	<script defer src="./assets/js/index.js"></script>
</head>
<body>
<?php


if(isset($_POST)){
//capturei a forma
$forma=$_POST['forma'];
$base=$_POST['base_tri'];
$altura=$_POST['altura_tri'];
$base_ret=$_POST['base_ret'];
$altura_ret=$_POST['altura_ret'];
$raio=$_POST['raio'];
define('constante','3.14');

//Decidindo o que calcular

switch($forma){
	case'triangulo':
	function area_triangulo($base,$altura){
	return  ($base*$altura)/2; 
	}
	
	echo(area_triangulo($base,$altura));
	break;

	case'retangulo':
	function area_retangulo($base_ret,$altura_ret){
     return $base_ret*$altura_ret;
	}
	echo(area_retangulo($base_ret,$altura_ret));
	break;

	case'circunferencia':
	function area_circunferencia($raio){
		return 3.14*($raio*$raio);

	}
	echo(area_circunferencia($raio));
	break;
}

}
?>
	<div class="container d-flex justify-content-center align-items-center">
		<div class="alert">
		
		</div>
		<form method="post" class="w-50 form rounded bg-info d-flex flex-column justify-content-center align-items-center p-2" action="">
			<div class="bg-image"></div>
			<div class="form-group col-12 mt-4">
				<label for="selectInput">Selecione a forma geométrica</label>
				<select id="forma" name="forma" class="form-control">
					<option value="triangulo">Triângulo</option>
					<option value="retangulo">Retângulo</option>
					<option value="circunferencia">Circunferência</option>
				</select>
			</div>
			<div class="row col-12 p-0" id="rowTriangulo">
				<div class="form-group col-12">
					<label for="baseInput" name="base">Base</label>
					<div class="input-group mb-2">
						<input type="text" name="base_tri" class="form-control" id="baseInput" />
					</div>
				</div>
	
				<div class="form-group col-12">
					<label for="alturaInput" name="altura">Altura</label>
					<div class="input-group mb-2">
						<input type="text" name="altura_tri" class="form-control" id="alturaInput" />
					</div>
				</div>

				<div class="form-group col-12">
					<button class="btn btn-primary w-100">Calcular</button>
				</div>
			</div>
			<div class="row col-12 p-0" id="rowRetangulo">
				<div class="form-group col-12">
					<label for="baseInput" name="base">Base</label>
					<div class="input-group mb-2">
						<input type="text" name="base_ret" class="form-control" id="baseInput" />
					</div>
				</div>
			
				<div class="form-group col-12">
					<label for="alturaInput" name="altura">Altura</label>
					<div class="input-group mb-2">
						<input type="text" name="altura_ret" class="form-control" id="alturaInput" />
					</div>
				</div>
			
				<div class="form-group col-12">
					<button class="btn btn-primary w-100">Calcular</button>
				</div>
			</div>
			<div class="row col-12 p-0" id="rowCircunferencia">
				<div class="form-group col-12">
					<label for="raioInput" name="raio">Raio</label>
					<div class="input-group mb-2">
						<input type="text" name="raio" class="form-control" id="raioInput" />
					</div>
				</div>
			
				<div class="form-group col-12">
					<button class="btn btn-primary w-100" >Calcular</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>