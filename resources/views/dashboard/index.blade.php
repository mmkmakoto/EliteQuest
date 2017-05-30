<!DOCTYPE html>
<html>

<head>

	<title>Elite Jogos</title>
	<meta charset="utf-8">

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./../../css/style.css">

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 logo">
				<img src="./../../assets/Logo Quest.png">
			</div>
			<div class="col-sm-6 formulario">
				<div>
					<span>Jogador: {{ Auth::user()->name }}</span>
				</div>
				<div>
					<span>E-Mail: {{ Auth::user()->email }}</span>
				</div>
			</div>
			<div class="col-sm-6 formulario">
	            <form id="logout-form" action="{{ route('logout') }}" method="POST">
	                {{ csrf_field() }}
	                <button id="botao" class="btn btn-success" type="submit">Logout</button>
	            </form>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row footer">
			<div class="col-sm-6 empresa">ELITE JOGOS</div>
			<div class="col-sm-6 webmaster"><a href="/"><u>Webmaster</u></a></div>
		</div>
	</div>	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>