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
                <h2> Hi, Welcome Admin</h2>
            </div>
        </div>
        <br>

      <!-- Button trigger modal -->
                 <div class="col-lg-12">
                        <div class="table">
                            <table class="table table-bordered table-hover">
                                <thead style="background-color:grey">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th style="text-align: center">Email</th>
                                        <th style="text-align: center">Created_at</th>
                                        <th style="text-align: center">Updated_at</th>
                                        <th style="text-align: center"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($users as $item)
                                   <tr>
                                        <td> {{ $loop-> iteration}} </td>
                                        <td> {{ $item-> name}} </td>
                                        <td> {{ $item-> email}} </td>
                                        <td> {{ $item-> created_at}} </td>
                                        <td> {{ $item-> updated_at}} </td>
                                        <td class="text-center">
                                            <a href = "{{ url ('admin/editAdmin/'.$item->id )}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            <form action="{{ url('admin/'.$item->id)}}" method="post" class="col-md-2" onSubmit="return confirm('Yakin hapus data?')">
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
