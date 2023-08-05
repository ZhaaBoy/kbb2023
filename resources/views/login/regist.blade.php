<!DOCTYPE html>
<html lang="en">

<head>
	<title>HIMTI - UMT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/style.min.css">

	<!-- Favicons -->
	<link href="{{asset('assets/images/HIMTI.png')}} " rel="icon">
	<link href="{{asset('assets/images/HIMTI.png')}}" rel="apple-touch-icon">
	<style>
		body {
			background: #ffffff url(assets/images/HIMTI.png);
			background-repeat: no-repeat;
			background-size: 70% 100%;
			background-attachment: fixed;
		}

		.container .row .col header h1,
		header h2 {
			color: #191970;
			text-shadow: 0 5px 5px rgba(0, 0, 0, 0.7);
		}
	</style>
</head>

<body>
    @include('sweetalert::alert')
	<div class="container">
		<div class="row" style="margin-top: 300px;">
			<div class="col-md-8"></div>
			<div class="col-md-4">
				<form action="{{ route('register.store') }}" method="POST">
                    @csrf
					<div class="form-row">
						<div class="col-md-4"></div>
						<div class="col-md-8 mb-3">
							<input type="text" id="name" name="name" class="form-control  @error('name') is invalid @enderror"
                            placeholder="Nama" required>
                    </div>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
					</div>
					<div class="form-row">
						<div class="col-md-4"></div>
						<div class="col-md-8 mb-3">
							<input type="text" id="email" name="email" class="form-control  @error('email') is invalid @enderror"
                            placeholder="Email" required>
                    </div>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
					</div>
					<div class="form-row">
						<div class="col-md-4"></div>
						<div class="col-md-8 mb-3">
							<input type="text" id="password" name="password" class="form-control  @error('password') is invalid @enderror"
                            placeholder="Password" required>
                    </div>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
					</div>
					<div class="form-row">
						<div class="col-md-4"></div>
						<div class="col-md-8 mb-3">
							<input type="number" id="no_hp" name="no_hp" class="form-control  @error('no_hp') is invalid @enderror"
                            placeholder="Handphone" required>
                    </div>
                    @error('no_hp')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
					</div>
					<div class="form-row">
						<div class="col-md-4"></div>
						<div class="col-md-8 mb-3">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
