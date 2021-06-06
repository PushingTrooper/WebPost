@extends('layouts.master')
@section('pageTitle', 'Logistics')
@section('content')
    <div id="logistics-page">
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
                <div class="col-12 col-md-6 mt-3">
                    <div class="w-100 h-100 bg-white card p-3">
                        <h2 class="styled-header">Hyrjet</h2>
                        <div id="hyrjet" class="row mt-3">
                            {{--  @foreach here  --}}
{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <div class="h-100 float-left d-inline-block stock-image-holder">--}}
{{--                                    <img src="{{asset('/storage/icons/in-stock.png')}}" alt="stock">--}}
{{--                                </div>--}}
{{--                                <div class="float-right content-info-holder">--}}
{{--                                    <p><b>Kodi: </b>123123</p>--}}
{{--                                    <p><b>Marresi: </b>asd asd</p>--}}
{{--                                    <p><b>Derguesi: </b>dsa dsa</p>--}}
{{--                                    <p><b>Adresa: </b>sda sda</p>--}}
{{--                                    <p><b>Statusi: </b>aaa sss</p>--}}
{{--                                    <p><b>Perditesuar: </b>ddd 11.11.11</p>--}}
{{--                                    <p><b>Prioriteti: </b><span--}}
{{--                                            class="priority-type --}}{{-- @if --}}{{-- green --}}{{-- @endif --}}{{--">normal</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            {{--  @endforeach here  --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <div class="w-100 h-100 bg-white card p-3">
                        <h2 class="styled-header">Daljet</h2>
                        <div id="daljet" class="row mt-3">
                            {{--  @foreach here  --}}
{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <div class="h-100 float-left d-inline-block stock-image-holder">--}}
{{--                                    <img src="{{asset('/storage/icons/in-stock.png')}}" alt="stock">--}}
{{--                                </div>--}}
{{--                                <div class="float-right content-info-holder">--}}
{{--                                    <p><b>Kodi: </b>123123</p>--}}
{{--                                    <p><b>Marresi: </b>asd asd</p>--}}
{{--                                    <p><b>Derguesi: </b>dsa dsa</p>--}}
{{--                                    <p><b>Adresa: </b>sda sda</p>--}}
{{--                                    <p><b>Statusi: </b>aaa sss</p>--}}
{{--                                    <p><b>Perditesuar: </b>ddd 11.11.11</p>--}}
{{--                                    <p><b>Prioriteti: </b><span--}}
{{--                                            class="priority-type --}}{{-- @if --}}{{-- red --}}{{-- @endif --}}{{--">normal</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            {{--  @endforeach here  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script defer src="{{ asset('js/logistics.js') }}"></script>
@endsection
