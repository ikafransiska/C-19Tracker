@extends('adminMain')

@section('title', 'Tips')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
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
                <h2>Add</h2>
            </div>
        </div>
        <br>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif
      <!-- Button trigger modal -->
<a href="{{ url ('tipsAdmin')}}"  class = "btn btn-secondary btn-sm">
    <i class = "fa fa-undo"></i> Back</a>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form action="{{ url ('tipsAdmin/store') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label>Images</label>
                    <input type="file" name="images" class="form-control"required>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control"required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="desc" class="form-control"required>
                </div>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>


    </div>
</div>
        <!-- /#page-wrapper -->
        @yield('content')
@endsection
