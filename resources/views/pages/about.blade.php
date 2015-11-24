@extends('app')

@section('content')

	<h1>Will's About Page</h1>
<h1>About</h1>

@if (count($people))

<h3>People I like</h3>
<ul>
	@foreach ($people as $person)

	<li>{{ $person }}</li>
	@endforeach
</ul>

@endif
	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eveniet eaque ratione illo similique doloremque ipsam ab, illum architecto culpa. Maiores sequi earum esse cumque molestiae! Tempore iusto laudantium ducimus.
	</p>

@stop