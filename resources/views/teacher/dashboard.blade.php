
@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Welcome To Teacher Dashboard</h1>
        </div>
    </div>
{{--    <div class="row">--}}
{{--        <div class="col-md-8 ml-4">--}}
{{--            <a href="/register/students" class="btn btn-danger">Register Students</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12 text-center">--}}
{{--            <button class="btn btn-outline-dark" onclick="courses()">Courses</button>--}}
{{--            <button class="btn btn-outline-dark" onclick="students()">Students</button>--}}
{{--            <button class="btn btn-outline-dark" onclick="assignments()">Assignments</button>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="">
        @include('partials.success')
        @include('partials.error')
    </div>
{{--    <div id="courses-sec">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8">--}}
{{--                    <h2>Courses</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div id="students-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <h2>Students</h2>
                </div>
            </div>
        </div>
    </div>


    <div id="assignments-sec " >
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-md-5 ml-4 form-sec rounded">
                    <h2>Add Assignments</h2>

                    <form action="/create" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Assignment Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Assignment Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Assignment Description</label>
                            <textarea name="description" id="description" cols="20" rows="5"  class="form-control" placeholder="Enter Assignment Details"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="grading">Assignment Grading</label>

                            <input type="text" class="form-control" name="grading" placeholder="Assignment Grading">
                        </div>
                        <div class="form-group">
                            <label for="Due">Due Date</label>
                            <input type="date" class="form-control" name="due" placeholder="Assignment Due Date">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6 ml-4" style="background: lavender;">
                    <h2>Assignment Details</h2>

                    <table class="table information-link">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Due</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($lists as $list)
                            <tr>
                                <td>{{$list->title}}</td>
                                <td>{{$list->due}}</td>
                                <td>

                                    <form action="{{route('assignment.delete',[$list->id])}}" method="post">
                                        <a href="/assignment/details/{{$list->id}}" class="btn btn-dark ">Details</a>
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>


                                </td>
                            </tr>



                        @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection









