@section('content')

    <div class="container-fluid">
        <h1>Assignments</h1>

        <div class="row mt-4">
                <div class="col-md-12 ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><h4>Title</h4></th>
                                <th><h4>Description</h4></th>
                                <th><h4>Due</h4></th>
                                <th><h4>Grading</h4></th>
                                <th><h4>From</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allassignments as $allassignment)
                                <tr>
                                    <td>{{$allassignment->title}}</td>
                                    <td>{{$allassignment->description}}</td>
                                    <td>{{$allassignment->due}}</td>
                                    <td>{{$allassignment->grading}}</td>
                                    <td>{{$allassignment->user->name}}</td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>

        </div>
    </div>


@endsection
