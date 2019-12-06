<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Título da página</title>
</head>
<body>

{{-- header / cabeçalho --}}
<div>
	@yield('cabecalho')
</div>

{{-- content / conteúdo --}}
<div>
	@yield('conteudo')
</div>

{{-- footer / rodapé --}}
<div>
	@yield('rodape')
</div>
	
</body>
</html>