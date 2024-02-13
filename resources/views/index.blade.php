<!doctype html>
<html lang="en">
  <head>
  	<title>Buku Tamu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url({{url('/frontend/images/bg.jpg')}});">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Buku Tamu</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Silahkan Input</h3>

				  @if (session('status'))
				  <div class="alert alert-success">
					  {{session('status')}}
				  </div>
			  @endif

				<form action="{{url('simpan-bukutamu') }}"method="post" class="signin-form">
					@csrf
		      		<div class="form-group">
		      			<input type="text" name="nama" onkeypress="return hanyaHuruf(event);" class="form-control" placeholder="Nama" required>
						<script type="text/javascript">
						 function hanyaHuruf(evt) {
							var charCode = (evt.which) ? evt.which : event.keyCode 
						 if (charCode > 31 &&  (charCode < 48 || charCode > 57))	
							return true;
							return false;
						 }
						 </script>
		      		</div>
	            <div class="form-group">
					<input type="number" name="telepon" class="form-control" placeholder="Nomor Telepon" required>
	            </div>
	            <div class="form-group">
					<textarea name="alamat" class="form-control" placeholder="Alamat" cols="3"></textarea>
	            </div>
	            <div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Email" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Simpan</button>
	            </div>
				
				<div class="mt-5">
					<a href="{{url('dashboard')}}">Dashboard</a>
				</div>
			
	          </form>

				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('/frontend/js/jquery.min.js')}}"></script>
	<script src="{{asset('/frontend/js/popper.js')}}"></script>
	<script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/frontend/js/main.js')}}"></script>

	</body>
</html>

