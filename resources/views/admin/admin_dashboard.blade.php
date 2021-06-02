@extends('layouts.master')

@section('pageTitle', 'Dashboard')

@section('content')
    <div id="admin-dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <img src="{{asset('/storage/images/logo.png')}}" alt="Rrufe Logo">
                    <div class="float-right d-flex align-items-center h-100">
                        <button class="button-logout">DIL</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    <h2 class="styled-header">Hyrjet</h2>
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="styled-header">Daljet</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
