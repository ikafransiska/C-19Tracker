@extends('main')

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
                <h2> Hi, Welcome {{ Auth::user()->name }} </h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"> Kasus Covid-19 Di Dunia</h3>
            </div>
        </div>    
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="row">
                <div class="col-xs-4 text-right">
                <img src = "{{asset('/images/ambulance.png')}}" id="foto">
                </div>
                        <div class="col-xs-8 text-center">
                            <div class="huge"> 
                                <p style='color: blue'>Positif</p>
                            </div>
                            <div class="angka"> 
                            {{$data['cases']}} 
                            </div>
                        </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-green">
                 <div class="col-xs-4 text-right">
                <img src = "{{asset('/images/patient.png')}}" id="foto">
                </div>
                    <div class="col-ls-9 text-center">
                            <div class="huge"> 
                                <p style='color: green'>Sembuh</p>
                            </div>
                            <div class="angka"> 
                            {{ $data['recovered']}} 
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-red">
                <div class="col-xs-4 text-right">
                <img src = "{{asset('/images/death.png')}}" id="foto">
                </div>
                    <div class="col-ls-9 text-center">
                            <div class="huge"> 
                                <p style='color: red'>Meninggal</p>
                            </div>
                            <div class="angka"> 
                            {{ $data['deaths']}} 
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- /#page-wrapper -->
        @yield('content')
@endsection
