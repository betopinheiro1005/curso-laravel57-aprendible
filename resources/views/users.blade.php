<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Listagem de Usuários</title>
</head>
<body>
	
	<h1>{{$title}}</h1>

	<hr>

{{-- 	@if (!empty($users))
			<ul>	
				@foreach($users as $user)
					<li>{{$user}}</li>
				@endforeach	
			</ul>	
		@else
			<p>Não existem usuários registrados!</p>
		@endif		
 --}}

		</ul>
			@forelse($users as $user)
				<li>{{$user}}</li>
			@empty
				<li>Não existem usuários registrados!</li>
			@endforelse		
		</ul>			

</body>
</html>
