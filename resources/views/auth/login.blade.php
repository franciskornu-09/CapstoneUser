@extends('master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-5 col-md-offset-2">
			<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}" style="margin-top: 15%">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@if (count($errors) > 0)
						<div style="text-align: center;color: red">
							<!-- <strong>Whoops!</strong> There were some problems with your input.<br><br> -->
							
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							
						</div>
					    @endif
						<div class="form-group">
							<label class="col-md-4 control-label" style="color: white">E-Mail Address</label>
							<div class="col-md-3">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" style="color: white">Password</label>
							<div class="col-md-3">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-3 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"><i style="color: white"> Remember Me</i>
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
			    </div>
			</div>
		</div>
	</div>

@endsection
