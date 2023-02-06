
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">

        label{
            display: inline-block;
            width: 200px;
        }

    </style>


  </head>
  <body>
        @include('admin.padding')
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
      <form action="{{url('post_notice_add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="padding:15px;">
            <label>Event Name: </label>
            <input id="text" type="text" style="color:black;" name="name" placeholder="Enter Event Name..."><br><br>
        </div>
        <div class="padding:15px;">
            <label>Event Date: </label>
            <input id="text" type="text" style="color:black;" name="date"placeholder="DD/MM/YYYY"><br><br>
        </div>
        <div class="padding:15px;">
            <label>Event Description: </label>
            <input id="text" type="text" style="color:black;" name="event" placeholder="Enter short description"><br><br>
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
