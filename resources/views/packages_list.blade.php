@extends('layouts.master')

@section('pageTitle', 'Package List')

@section('content')
    <div id="packages-list">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <img src="{{asset('/storage/images/logo.png')}}" alt="Rrufe Logo">
                    <div class="float-right d-flex align-items-center h-100">
                        <button class="button-logout">DIL</button>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 d-flex justify-content-center">
                    <div class="rrethim">
                        <h2 class="styled-header mb-2">Pakot</h2>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Nr. Pakos</th>
                                <th scope="col">Derguesi</th>
                                <th scope="col">Marresi</th>
                                <th scope="col">Adresa</th>
                                <th scope="col">Statusi i fundit</th>
                                <th scope="col">Perditesimi i fundit</th>
                                <th scope="col">Prioriteti</th>
                            </tr>
                            </thead>
                            <tbody id="package-list-table-container">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script defer src="{{ asset('js/packages-list.js') }}"></script>
@endsection
