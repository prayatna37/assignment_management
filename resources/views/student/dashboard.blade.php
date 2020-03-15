@section('content')

    <div class="container-fluid">
        <h1>Assignments</h1>

        <div class="row mt-4">
                <div class="col-md-12 ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Due</th>
                                <th>Grading</th>
                                <th>From</th>
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
