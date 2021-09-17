<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">STTBANDUNG</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
			    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				  <div class="navbar-nav">
					<a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
					<a class="nav-link" href="{{url('/dosen')}}">Dosen</a>
					<a class="nav-link" href="{{url('/staff')}}">Staff</a>
                    <a class="nav-link" href="{{url('/students')}}">Student</a>
				  </div>
			    </div>
		</div>
    </nav>
    <!-- End Nav -->
{{-- conten --}}
  @yield('conten')
{{-- End Content --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->




    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  </body>
</html>