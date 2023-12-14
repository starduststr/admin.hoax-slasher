<div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                Community
            </h4>
            <hr>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Address</th>
                        <th>Category</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($data['data'] as $data)
                           <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data['communityName']}}</td>
                                <td>{{$data['communityDescription']}}</td>
                                <td>
                                    <span class="badge bg-{{($data['communityStatus'] == 'ACTIVE') ? 'success' : 'secondary'}}">
                                        {{$data['communityStatus']}}
                                    </span>
                                </td>
                                <td>{{$data['communityAddress']}}</td>
                                <td></td>
                                <td>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="bx bx-trash"></i>
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-sm btn-success">
                                                    <i class="bx bx-edit"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                           </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>