@extends('layouts.master')

@section('pageTitle', 'Login')

@section('content')

    <style>
        .edito {
            background-color: transparent;
            background-image: url("/storage/icons/edit.svg");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: left center;
            padding: 4px;
            padding-left: 2rem;
        }

    </style>

    <div id="package-details" style="height: 100%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="float-right d-flex align-items-center h-100">
                        <button class="button-logout">DIL</button>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="rrethim" style="margin-top: 9rem;">
                <table class="table tabela1">
                    <tbody>
                    <tr>
                        <td class="left-side">Kodi i Pakos</td>
                        <td class="right-side" colspan="2">
                            <p id="tracking-code">{{$tracking_code}}</p>
                            <button class="float-right edito" onclick="goToEdit()">Edito Detajet</button> </td>
{{--                        <td class="right-side" colspan="2"><button class="float-right edito">Edito</button></td>--}}
                    </tr>
                    <tr>
                        <td class="left-side">Vlera</td>
                        <td class="right-side" colspan="2" id="value">0000 Lek</td>
                    </tr>
                    <tr>
                        <td class="left-side">Pagesa</td>
                        <td class="right-side" colspan="2" id="is-completed">E kryer</td>
                    </tr>
                    <tr>
                        <td class="left-side">Marresi</td>
                        <td class="right-side" colspan="2" id="receiver-name">Emer Mbiemer</td>
                    </tr>
                    <tr>
                        <td class="left-side">Adresa e marresit</td>
                        <td class="right-side" colspan="2" id="receiver-address">Qyteti, Rruga, Pallati, Shkolla, Apartamenti</td>
                    </tr>
                    <tr>
                        <td class="left-side">Prioriteti</td>
                        <td class="right-side" colspan="2" id="package-priority">Normal</td>
                    </tr>
                    <tr>
                        <td class="left-side">statusi Aktual</td>
                        <td class="right-side" colspan="2" id="last-status-name">Ne Magazine</td>
                    </tr>
                    <tr>
                        <td class="left-side">Perditesi,i fundit</td>
                        <td class="right-side" colspan="2" id="last-date">30.05.2021 12:30:59</td>
                    </tr>
                    <tr>
                        <td class="left-side">Perdoruesi qe Perditesoi Statusin</td>
                        <td class="right-side" colspan="2" id="last-user">Emer Mbiemer</td>
                    </tr>
                    <tr>
                        <td class="left-side">Koment</td>
                        <td class="right-side" colspan="2" id="comment">Koment</td>
                    </tr>
                    <tr>
                        <td><button class="edito" onclick="goOneUp()">Perditeso Status</button></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                </div>
           </div>
        </div>
    </div>
    <script defer src="{{ asset('js/package-details.js') }}"></script>

@endsection
