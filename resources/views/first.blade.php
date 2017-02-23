@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Contact</div>

				<div class="panel-body">
					This is where contacts are shown
					
					@if (count($users))
					<ul>
					    @foreach($users as $person)
						<li>{{$person->name}} {{$person->description}}</li>
					      @endforeach
					@endIf
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection