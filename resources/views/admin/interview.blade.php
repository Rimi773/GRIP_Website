        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="row">
                    <!-- Table Panel -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <b>Interview URL</b>
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
                                            <th>Deletation</th>
                                        </tr>
                                    </thead>


                                    @foreach ($data as $data )


                                    <tbody>
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td><a onclick="return confirm('Do you want to redirect to the Google Form?')" href="{{$data->url}}">{{$data->url}}</a></td>

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
