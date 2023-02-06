
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

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <div class="container" align="center" style="padding-top:100px;">

        @if(session()->has ('message'))
            <div class="alert alert-success" align="center" style="padding-top:100px;">
                <button type="button" class="close" data-dismiss="alert">
                x
                </button>
                {{session()->get('message')}}
            </div>
            @endif
        <form action="{{url('workshop')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="padding:15px;">
                <label>Workshop Url: </label>
                <input id="text" type="url" style="color:black;" name="url" placeholder="Enter URL..."><br><br>
            </div>

            <div class="padding:15px;">
                <input type ="submit" class="btn btn-success">
            </div>
            </div>
        </form>
    </div><br><br>


    <!-----------------------interview---->
        <div class="container" align="center" style="padding-top:100px;">


        <form action="{{url('interview')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="padding:15px;">
                <label>On Campus Interview Url: </label>
                <input id="text" type="url" style="color:black;" name="url" placeholder="Enter URL..."><br><br>
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
         <body>
</html>
