<!DOCTYPE html>
<html lang="pt-br">
<head>

	<!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href= {{ asset("css/bootstrap.min.css") }} >
    <link rel="stylesheet" href= {{ asset("css/login.css") }} >

</head>
<body>

	<div class="container">
		
		<!-- Conteúdo -->
      	@yield('conteudo')
		
	</div> 

 <!-- jQquery (obrigatório para plugins JavaScript do Bootstrap) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src= {{ asset("js/bootstrap.min.js") }}></script> 	
</body>
</html>