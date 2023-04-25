@extends('banking::layouts.master')

@section('banking-content')
<div class="card card-dashboard-one">
    <div class="card-header">
        <h4>
            {{$header}}
            <small>{{$description}}</small>
        </h4>    
    </div>

    <div class="card-body" style="padding-top: 0px !important;">
        <div class="row">
            <div class="col-md-12">
                <div class="az-dashboard-nav">
                    <nav class="nav">
                    </nav>                    

                    <nav class="nav nav-btn">
                       
                        <a class="nav-link" href="{{ admin_url('cb/bank/daftar/create') }}"><i class="far fa-plus-square"></i> Tambah</a>
                        <a class="nav-link" href="#"><i class="fas fa-ellipsis-h"></i></a>
                    </nav>
                </div>
                <div id="table-list-container" class="table-responsive" style="min-height: 400px;">
                    <table class="table table-hover datatable" style="width: 100% !important;" id="table-list">
                        <thead>
                            <tr>
                                <th class="" width="5%">No.</th>
                                <th class="" width="20%">ID Bank</th>
                                <th class="" width="30%">Nama Bank</th>
                                <th class="" width="35%">Fee Transfer</th>
                                <th class="" width="10%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection