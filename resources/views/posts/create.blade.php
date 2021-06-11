@extends('posts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Add new post</h2>
            <a href="{{ route('posts.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            there were some problems with your input. <br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="form-gtoup">
                    <strong>Title :</strong>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-gtoup">
                    <strong>Description :</strong>
                   <textarea name="description" class="form-control" style="height:"></textarea>
                </div>
            </div>
            <button class="btn btn-primary my-3">Create</button>
        </div>
    </form>

@endsection
