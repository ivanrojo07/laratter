@extends('layouts.app')

@section('content')
<!--<div class="title m-b-md">
    Ivan Rojo
</div>

@ if (isset($teacher))
    <p>Profesor: { { $teacher }}</p>
@ else
    <p>Profesor a definir</p>
@ endif

<div class="links">
    @ foreach ($links as $link => $text)
        <a href="{ { $link }}">{ { $text }}</a>
    @ endforeach
</div> -->

<div class="jumbotron text-center">
	<h1>Laratter</h1>
		<nav>
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about">Acerca de nosotros</a>
				</li>
			</ul>
		</nav>
</div>
<div class="row">
	<form action="/messages/create" method="post">
		<div class="form-group @if ($errors->has('message')) has-error @endif">
		{{ csrf_field() }}
			<input type="text" name="message" class="form-control" placeholder="Ola Ke Ase?">
				<!--@ if ($errors->any()) Cualquier error, abajo más preciso-->
				@if ($errors->has('message'))
				@foreach ($errors->get('message') as $error)
				<div class="has-feedback">{{ $error }}</div>
				@endforeach
				@endif
			</input>
		</div>
	</form>
</div>
<div class="row">
	@forelse( $messages as $message )
		<div class="col-md-6">
			<!--<img class="img-thumbnail" src="{ { $message['image'] }}">
			<p class="card-text">
				{ { $message['content'] }}
				<a href="/messages/{ { $message['id']}}">Leer más</a>
			</p>-->
			@include('messages.message')

		</div>
	@empty
	<p>No hay mensajes destacados.</p>
	@endforelse
	
	@if (count($messages))
	<div class="mt-2 mx-auto">
		{{ $messages->links('pagination::bootstrap-4') }}
	</div>
	@endif
</div>
@endsection