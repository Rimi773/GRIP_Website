
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user.css')

  </head>
  <body>
        @include('user.padding')
      <!-- partial:partials/_sidebar.html -->
      @include('user.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('user.navbar')
        <!-- partial -->
        @include('user.body')
        @include('user.script')
</html>
