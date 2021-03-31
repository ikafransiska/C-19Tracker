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
<a href="{{ url ('admin')}}" class = "btn btn-secondary btn-sm">
    <i class = "fa fa-undo"></i> Back</a>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form action="{{ url ('admin/'.$users->id)}}" method="post">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $users->name}} " required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $users->email}}" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="{{ $users->password}}" >
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
        <!-- /#page-wrapper -->
        @yield('content')
@endsection
