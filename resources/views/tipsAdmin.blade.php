@extends('adminMain')

@section('title', 'TipsAdmin')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Tips</h1>
            </div>
        </div>    
        <div class="row">
            <div class="col-lg-12">
                <h2> Hi, Welcome Admin</h2>
            </div>
        </div>
        <br>

      <!-- Button trigger modal -->
<a href="{{ url ('admin/create')}}">
    <i class = "fa fa-plus"></i> Add data</a>
    <div class="row">
                 <div class="col-lg-12">
                        <div class="table">
                            <table class="table table-bordered table-hover">
                                <thead style="background-color:grey">
                                    <tr>
                                        <th>#</th>
                                        <th>images</th>
                                        <th style="text-align: center">Title</th>
                                        <th style="text-align: center">Deskripsi</th>
                                        <th style="text-align: center"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($tips as $item)
                                   <tr>
                                        <td> {{ $loop-> iteration}} </td>
                                        <td> <img id="foto" src="{{URL::to('/')}}/images/{{$item->images}}"></td>
                                        <td> {{ $item-> title}} </td>
                                        <td> {{ $item-> desc}} </td>
                                        <td class="text-center">
                                            <a href = "{{ url ('admin/editTips/'.$item->id )}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <form action="{{ url('tipsAdmin/'.$item->id)}}" method="post" class="col-md-2" onSubmit="return confirm('Yakin hapus data?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
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
        <!-- /#page-wrapper -->
        @yield('content')
@endsection
