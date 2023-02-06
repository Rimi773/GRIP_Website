@extends('frontend.layouts.main')
<link rel="stylesheet" href="{{url('frontend/advice.css')}}">
@section('main-container')

<body>
  <div class="qmm_con">
    <div class="QMM">
      <a target="_blank" href="{{url('frontend/img\QMM.png')}}">
      <img src="{{url('frontend/img\QMM.png')}}">
      </a>
    </div>
    <div class="QMM">
        <div class="margin"></div>
            <h2>Want to improve career life?<br> Question Mind Mapping (QMM)...<br> is the best way to approach it</h2><br><br>
            <p>Want to know how it works? Click down below see the video on mind mapping.....</p>
        <div class="QMM_bt">
            <form action="https://youtu.be/Elkd8D9stbQ">
            <button type="submit">What is QMM?</button><br><br>
            </form>
            <div class="im"><p><i class="fas fa-arrow-left" color="#16A085" font-size="50px"></i> Click this QMM image on how you can question yourself for the best outcome</p></div>
        </div>
        <br><br>
    </div>
    </div>


<div class="txt"><p>Scan for detailed explaination</p></div>
	  <div class="quotes">
	  <div class="card">
		<div class="box box1">
      <a href="http://surl.li/eeaqb">Methodology</a><br>
			<img src="{{url('frontend/img\Grip_qr.png')}}"style="width:70%">
			<h2>GRIP workshop</h2>
		</div>
		<div class="bg"></div>
	  </div>
	  <div class="card">
		<div class="box box2">
    <a href="http://surl.li/eeaqg">Requirement</a><br>
		<img src="{{url('frontend/img\req_qr.png')}}"style="width:70%">
		<h2>For Internship</h2>
		</div>
		<div class="bg"></div>
	  </div>
	  <div class="card">
		<div class="box box3">
			<p>Requirement</p>
			<img src="{{url('frontend/img\req_qr.png')}}"style="width:70%">
			<h2>For Internship</h2>
		</div>
		<div class="bg"></div>
	  </div>
	</div>


  </body>
  </html>

@endsection
