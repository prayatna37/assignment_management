

@extends('layouts.app')
@section('content')


    <div class="container-fluid">
        <div class="row mt-4">
            @include('partials.success')
            @include('partials.error')
            <div class="col-md-5 ml-4" style="background: lavender;">
                <h2>{{$show->title}}</h2>
                <p>{{$show->description}}</p>
                <i><strong>Assignment Grading:</strong></i>{{$show->grading}}<br>
                <i><strong>Due On: </strong></i>{{$show->due}}


            </div>
            <div class="col-md-6 ml-4 form-sec rounded">
                <h2>Update{{$show->title}}</h2>

                <form action="/assignment/update/{{$show->id}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="title">Assignment Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Assignment Title" value="{{$show->title}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Assignment Description</label>
                        <input type="text" class="form-control" name="description" value="{{$show->description}}" placeholder="Enter Assignment Description">
                    </div>
                    <div class="form-group">
                        <label for="grading">Assignment Grading</label>
                        <input type="text" class="form-control" name="grading" value="{{$show->grading}}" placeholder="Assignment Grading">
                    </div>
                    <div class="form-group">
                        <label for="Due">Due Date</label>
                        <input type="date" class="form-control" name="due" value="{{$show->due}}" placeholder="Assignment Due Date">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>




@endsection
