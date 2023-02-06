<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GRIP-Graduate Readiness for Industry Placement</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="{{url('frontend/style.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
</head>
<body>

	<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<a href="{{url('/')}}"><img src="{{url('frontend/img/GRIP.png')}}" width="100px"></a>
					<div class="log">
						<form action="{{url('/login')}}">
						<button type="submit">Login</button>
						</form>
					</div>
					<div class="signup">
						<form action="{{url('/register')}}">
						<button type="submit">Sign Up</button>
						</form>
					</div>
				</div>
					<nav class="nav">
						<ul>
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/advice')}}">Career Advice</a></li>

						</ul>
					</nav>
				</div>
			</div>
	</div>
