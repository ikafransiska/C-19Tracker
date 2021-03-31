@extends('main')

@section('title', 'Lokasi')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lokasi</h1>
            </div>
        </div>    
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"> Kasus Covid-19 Di Indonesia</h3>
            </div>
        </div>    
        <div class="row">
        @foreach ($indoData as $dataIndo)
            <div class="col-lg-12">
                <div class="panel panel-primary">
                <div class="col-xs-4 text-right">
                <img src = "{{asset('/images/ambulance.png')}}" id="foto">
                </div>
                        <div class="col-ls-12 text-center">
                            <div class="huge"> 
                                <p style='color: blue'>Positif</p>
                            </div>
                            <div class="angka"> 
                                {{$dataIndo['positif']}}
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-green">
                <div class="col-xs-4 text-right">
                <img src = "{{asset('/images/patient.png')}}" id="foto">
                </div>
                    <div class="col-ls-12 text-center">
                            <div class="huge"> 
                                <p style='color: green'>Sembuh</p>
                            </div>
                            <div class="angka"> 
                                {{$dataIndo['sembuh']}}
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-red">
                <div class="col-xs-4 text-right">
                <img src = "{{asset('/images/death.png')}}" id="foto">
                </div>
                    <div class="col-ls-12 text-center">
                            <div class="huge"> 
                                <p style='color: red'>Meninggal</p>
                            </div>
                            <div class="angka"> 
                                {{$dataIndo['meninggal']}}
                            </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="table">
                            <table class="table table-bordered table-hover">
                                <thead style="background-color:grey">
                                    <tr>
                                        <th>Provinsi</th>
                                        <th style="text-align: center">Positif</th>
                                        <th style="text-align: center">Sembuh</th>
                                        <th style="text-align: center">Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($data as $dataCorona)
                                   <tr>
                                        <td> {{ $dataCorona['attributes']['Provinsi']}} </td>
                                        <td style="text-align: center"> {{ $dataCorona['attributes']['Kasus_Posi']}} </td>
                                        <td style="text-align: center"> {{ $dataCorona['attributes']['Kasus_Semb']}} </td>
                                        <td style="text-align: center"> {{ $dataCorona['attributes']['Kasus_Meni']}} </td>
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