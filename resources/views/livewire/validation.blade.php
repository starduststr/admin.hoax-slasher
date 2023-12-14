<div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Debunking {{$tes}}</h4>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <td>#</td>
                    <th>Evidence Description</th>
                    <th>Evidence Links</th>
                    <th>Image</th>
                    <th>News</th>
                    <th>User</th>
                </thead>
                <tbody>
                    @if(!$data)
                        <td colspan="6" class="text-center">Tidak ada data!</td>
                    @else
                        
                    @endif
                    @foreach($data['data'] as $data)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data['evidence_description']}}</td>
                            <td>{{$data['evidence_links']}}</td>
                            <td>
                                {{-- <img width="200px" src="https://mfsz3q3f-4100.asse.devtunnels.ms/uploads/debunking/{{$data['file_name']}}" alt=""> --}}
                            </td>
                            <td>{{$data['news']['news_title']}}</td>
                            <td>{{$data['user']['name']}}</td>
                            <td>
                                <button wire:click="validation({{$data['id']}})" class="btn btn-{{($data['is_validated']) ? 'success' : 'danger'}}" {{($data['is_validated']) ? 'disabled' : ''}}>
                                    @if(!$data['is_validated'])
                                        validate 
                                    @else
                                        validated 
                                    @endif
                                </button>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>