@extends('frontend.layouts.main')
@section('main-container')
	<section class="head">
		<img src="{{url('frontend/img\ban.jpg')}}">
	</section>
	<div class="regi">
		<div class="container1" >
			<div class="row">
				<div class="col2">
					<h1>Graduate Readiness Workshop</h1>
					<p>Worring for your future,<br>
					Office of Industrial Relations is arranging workshop for internship students<br>
					Where you can learn to develop interpersonal, interveiwing skills</p><br><br></small>
					<a href="{{url('/rework')}}" class="btn">Register Now &#9758</a><br><br>
					<p>And build your confidence</p>
				</div>
				<div class="col2">
					<h1>On Campus Interview</h1>
					<p>Worring for your internship placement,<br>
					Office of Industrial Relations is arranging on campus interview for internship students from IUB<br>
					Where a large number of renowned IT companys will be invited and choose interns</p><br><br></small>
					<a href="{{url('/reint')}}" class="btn">Register Now &#9758</a><br><br>
					<p>And build your and get you placement</p>

				</div>
			</div>
		</div>
	  </div>
<div class="con">
	<div class="slideshow-container">

    <div class="mySlides fade">
		<img src="{{url('frontend/img\dean.jpg')}}" style="width:100%">
		<div class="text">Cards Presentation By Yousuf sir</div>
	</div>
    <div class="mySlides fade">
		<img src="{{url('frontend/img\group.jpg')}}" style="width:100%">
		<div class="text">School of Science and Engineering</div>
	</div>
	<div class="mySlides fade">
		<img src="{{url('frontend/img\workshop.jpg')}}" style="width:100%">
		<div class="text">Grip Workshop</div>
	</div>
    <div class="mySlides fade">
		<img src="{{url('frontend/img\omor.jpg')}}" style="width:100%">
		<div class="text">Ice Breaking Session at Industry Networking</div>
	</div>
	<div class="mySlides fade">
		<img src="{{url('frontend/img\session.jpg')}}" style="width:100%">
		<div class="text">Workshop IANS</div>
	</div>
	<div class="mySlides fade">
		<img src="{{url('frontend/img\int.JPG')}}" style="width:100%">
		<div class="text">On Campus Interview</div>
	</div>


	<a class="prev" onclick="plusSlides(-1)">❮</a>
	<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	<span class="dot" onclick="currentSlide(4)"></span>
	<span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
</div>

<script>
	let slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		let i;
		let slides = document.getElementsByClassName("mySlides");
		let dots = document.getElementsByClassName("dot");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 4000);
			}

</script>
</div>


</body>
@endsection
