<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">

        label{
            display: inline-block;
            width: 200px;
        }

    </style>
    @include('admin.css')

  </head>
  <body>
   <<div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center justify-content-between">


            </div>
          </div>
        </div>
      </div>

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">


      <div class="container" align="center" style="padding-top:100px;">
       @if(session()->has ('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
            x
            </button>
            {{session()->get('message')}}
        </div>

      @endif

      <form action="{{url('upload_internship')}}" method="POST" enctype="multipart/form-data" align="center">
        @csrf
        <div class="padding:15px;">
            <label>Industry Name: </label>
            <input id="text" type="text" style="color:black;" name="name" placeholder="Enter the name..."><br><br>
        </div>
        <div class="padding:15px;">
            <label>Job Description: </label>
            <input id="text" type="text" style="color:black;" name="job"placeholder="Short description."><br><br>
        </div>
        <div class="padding:15px;">
            <label>Email: </label>
            <input id="text" type="text" style="color:black;" name="email" placeholder="Enter the email adress..."><br><br>
        </div>
        <div class="padding:15px;">
            <label>Phone Number: </label>
            <input id="text" type="text" style="color:black;" name="number" placeholder="Enter the phone Number..."><br><br>
        </div>
        <div class="padding:15px;">
            <input type ="submit" class="btn btn-success">
        </div>
        </div>
       </form>
    </div>
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        @include('admin.script')
</html>

