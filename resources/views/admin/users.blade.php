
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">

        .row{
            display: inline-block;
            padding-top:50px;
            width: 1000px;

        }

    </style>
  </head>
  <body>
        @include('admin.padding')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
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
						<b>Current Users</b>


				</a></span>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<!-- <colgroup>
								<col width="5%">
								<col width="15%">
								<col width="40%">
								<col width="15%">
								<col width="10%">
								<col width="15%">
							</colgroup> -->
							<thead>
								<tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Deletation</th>
                            </tr>
                            </thead>


            @foreach ($data as $data )


            <tbody>
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td><a class="btn btn-danger" onclick="return confirm('Do you want to delete this data?')" href="{{url('delete',$data->id)}}">Delete</td>
            </tr>
            @endforeach

        </tbody>
        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->

        @include('admin.script')
</html>

