@extends('layout', ['title'=> 'Home'])

@section('page-content')
    <legend>Create teacher</legend>
    <form method="post" action="{{route('teachers.update',$teacher)}}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$teacher->id}}">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title',$teacher->name)}}" id="name" name="name" placeholder="name">
              
            </div>

        </div>
        <div class="form-group">
            <label for="contact" class="col-sm-2 control-label">contact</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('author') is-invalid @enderror" value="{{old('author',$teacher->contact)}}" id="contact" name="contact" placeholder="Author">
                <div class="invalid-feedback">{{$errors->first('author')}}</div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>


@endsection



