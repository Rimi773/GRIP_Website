
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user.css')
    <style type="text/css">

        .row{

            padding-top:50px;

        }
    </style>

  </head>
  <body>
        @include('user.padding')
      <!-- partial:partials/_sidebar.html -->
      @include('user.sidebar')
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
						<b>Company Name</b>


				</a></span>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover" align="center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Company Name</th>
                                <th>Vacancy Post</th>


                            </tr>
                        </thead>


                        @foreach ($data as $data )


            <tbody>
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->job}}</td>



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
        @include('user.navbar')
        <!-- partial -->

        @include('user.script')
</html>
