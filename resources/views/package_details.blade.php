@extends('layouts.master')

@section('pageTitle', 'Login')

@section('content')

    <style>
        .edito {
            background-color: transparent;
        / / noinspection CssUnknownTarget background-image: url("/storage/icons/edit.svg");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: left center;
            padding: 4px;
            padding-left: 2rem;
        }

    </style>

    <div id="package-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="float-right d-flex align-items-center h-100">
                        <button class="button-logout">DIL</button>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="rrethim">
                <table class="table tabela1">
                    <tbody>
                    <tr>
                        <td class="left-side">Kodi i Pakos</td>
                        <td class="right-side" colspan="2">Nr. 123456 <button class="float-right edito">Edito Detajet</button> </td>
{{--                        <td class="right-side" colspan="2"><button class="float-right edito">Edito</button></td>--}}
                    </tr>
                    <tr>
                        <td class="left-side">Vlera</td>
                        <td class="right-side" colspan="2">0000 Lek</td>
                    </tr>
                    <tr>
                        <td class="left-side">Pagesa</td>
                        <td class="right-side" colspan="2">E kryer</td>
                    </tr>
                    <tr>
                        <td class="left-side">Marresi</td>
                        <td class="right-side" colspan="2">Emer Mbiemer</td>
                    </tr>
                    <tr>
                        <td class="left-side">Adresa e marresit</td>
                        <td class="right-side" colspan="2">Qyteti, Rruga, Pallati, Shkolla, Apartamenti</td>
                    </tr>
                    <tr>
                        <td class="left-side">Prioriteti</td>
                        <td class="right-side" colspan="2">Normal</td>
                    </tr>
                    <tr>
                        <td class="left-side">Qyteti</td>
                        <td class="right-side" colspan="2">Tirane</td>
                    </tr>
                    <tr>
                        <td class="left-side">Magazina</td>
                        <td class="right-side" colspan="2">Magazina 3</td>
                    </tr>
                    <tr>
                        <td class="left-side">statusi Aktual</td>
                        <td class="right-side" colspan="2">Ne Magazine</td>
                    </tr>
                    <tr>
                        <td class="left-side">Perditesi,i fundit</td>
                        <td class="right-side" colspan="2">30.05.2021 12:30:59</td>
                    </tr>
                    <tr>
                        <td class="left-side">Perdoruesi qe Perditesoi Statusin</td>
                        <td class="right-side" colspan="2">Emer Mbiemer</td>
                    </tr>
                    <tr>
                        <td class="left-side">Koment</td>
                        <td class="right-side" colspan="2">Koment</td>
                    </tr>
                    </tbody>
                </table>
                </div>
           </div>
        </div>
    </div>

@endsection
