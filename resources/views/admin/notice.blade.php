
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">

        .row{

            padding-top:50px;

        }
    </style>

  </head>
  <body>
        @include('admin.padding')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
      <div class="container-fluid">

	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">

			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Notice Board</b>


				</a></span>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
                        <thead>
                          <tr>

                            <th> ID </th>
                            <th> Event Name </th>
                            <th> Event Date </th>
                            <th> Event Description </th>
                            <th> Deletation </th>


                          </tr>
                        </thead>
                       @foreach ($data as $data )
                        <tbody>
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->date}}</td>
                                <td>{{$data->event}}</td>
                                <td><a onclick="return confirm('Do you want to delete this data?')"class="btn btn-danger" href="{{url('deletenotice',$data->id)}}">Delete</td>

                            </tr>
                        @endforeach
                        </tbody>
                        </table>
        @include('admin.navbar')
        <!-- partial -->

        @include('admin.script')
</html>
