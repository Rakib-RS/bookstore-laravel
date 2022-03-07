@extends('layout', ['title'=> 'Home'])

@section('page-content')
    <legend>Create Book</legend>
    <form method="post" action="{{route('teachers.store')}}">
        @csrf
        <div class="form-group">
            <label for="id" class="col-sm-2 control-label">Id</label>
            <div class="col-sm-10">
                <input type="text" id="id" name="id" placeholder="id">
            </div>

        </div>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" id="name" name="name" placeholder="name">
            </div>

        </div>
        <div class="form-group">
            <label for="contact" class="col-sm-2 control-label">Contact</label>
            <div class="col-sm-10">
                <input type="text" id="contact" name="contact" placeholder="contact">
            </div>

        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>


@endsection



