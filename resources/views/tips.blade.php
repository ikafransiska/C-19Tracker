@extends('main')

@section('title', 'Tips')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Tips</h1>
            </div>
        </div>    
        <br>
        <div class="row">
        @foreach($tips as $item)
            <div class="col-lg-12">
                <div class="panel panel-black">
                    <div class="row">
                        <div class = "col-xs-4">
                            <div class = "col-lg-12 card">
                            <img id = "foto" src="{{URL::to('/')}}/images/{{$item->images}}"> 
                            </div>
                        </div>
                        <div class = "col-xs-8">
                            <div class = "col-lg-12 text-left">
                            <div class="huge"> 
                                <p id="title">{{($item -> title)}}</p>
                            </div>
                            <div>
                            {{($item -> desc)}}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
        <!-- /#page-wrapper -->
        @yield('content')
@endsection