@extends('layout', ['title'=> 'Home'])

@section('page-content')

<form action="{{ route('teachers.index') }}" method="GET" >
    <div class="form-row">
        <div class="col-8">
            <input type="text" class="form-control" id="search" name="search" placeholder="Search"
                   value="{{ request('search') }}">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-default">Search</button>

        </div>
    </div>
</form>
<div class="col-lg-2">
    <p class="text-right"><a href="{{route('teachers.create')}}" class="btn btn-primary">New Book</a></p>
</div>

    <table class="table table-striped table-bordered">
        <th>ID</th>
        <th>Name</th>
        <th>Contact</th>
       
        <th colspan="3" class="text-center">Action</th>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->contact}}</td>
                <td>
                    <a href="{{route('teachers.show',$teacher->id)}}">View</a>
                </td>
                <td>
                    <a href="{{route('teachers.edit',$teacher->id)}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('teachers.destroy',$teacher)}}" onsubmit="return confirm('Sure?')">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-link text-danger"/>
                    </form>
                </td>
                
            </tr>
        @endforeach
        </table>

  

@endsection
