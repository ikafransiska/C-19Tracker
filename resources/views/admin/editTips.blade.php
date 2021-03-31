@extends('adminMain')

@section('title', 'Home')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Home </h1>
            </div>
        </div>    
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit</h2>
            </div>
        </div>
        <br>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif
      <!-- Button trigger modal -->
<a href="{{ url ('tipsAdmin')}}" class = "btn btn-secondary btn-sm">
    <i class = "fa fa-undo"></i> Back</a>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form action="{{ url ('tipsAdmin/'.$tips->id)}}" method="post">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="images" class="form-control" value="{{ $tips->images}}" required>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $tips->title}}" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="desc" class="form-control" value="{{ $tips->desc}}" >
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
        <!-- /#page-wrapper -->
        @yield('content')
@endsection
