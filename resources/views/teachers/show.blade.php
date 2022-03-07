@extends('layout',['title'=>'Show'])

@section('page-content')



    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{$teacher->id}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$teacher->name}}</td>
        </tr>
        <tr>
            <th>Contact</th>
            <td>{{$teacher->contact}}</td>
        </tr>
       
    </table>

    <p class="text-start"><a href="{{route('teachers.index')}}" class="btn btn-danger">Back</a></p>
@endsection
