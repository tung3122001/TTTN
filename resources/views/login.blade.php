@extends('main')

@section('content')
@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>
@endif
<section class="h-100">
	<div class="container py-5 h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-12 col-lg-9 col-xl-7">
				<div class="card card-registration my-4">
					<div class="card-body p-4 p-md-5">
						<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Cửa sổ đăng nhập</h3>
						<div class="card-body">
							<form action="{{route('sample.validate_login') }}" method="post">
								@csrf
								<div class="form-group mb-3">
									<input type="text" name="email" class="form-control" placeholder="Email" />
									@if($errors->has('email'))
										<span class="text-danger">{{ $errors->first('email') }}</span>
									@endif
								</div>
								<div class="form-group mb-3">
									<input type="password" name="password" class="form-control" placeholder="Password" />
									@if($errors->has('password'))
										<span class="text-danger">{{ $errors->first('password') }}</span>
									@endif
								</div>
								<div class="d-grid mx-auto">
									<button type="subit" class="btn btn-dark btn-block">Đăng Nhập</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
@endsection('content')
