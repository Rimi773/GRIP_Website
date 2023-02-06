
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">

        .row{

            padding-top:100px;

        }
    </style>

  </head>
  <body>
        @include('admin.padding')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        @include('admin.workshop')


        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->

        @include('admin.script')
</html>
