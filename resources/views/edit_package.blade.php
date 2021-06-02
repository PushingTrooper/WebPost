@extends('layouts.master')

@section('pageTitle', 'Login')

@section('content')

    <div id="edit-package">
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
                            <td class="right-side" colspan="2"> <input type="text" id="kodi" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="left-side">Vlera</td>
                            <td class="right-side" colspan="2"> <input type="text" id="vlera" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="left-side">Pagesa</td>
                            <td class="right-side" colspan="2"> <input type="text" id="pagesa" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="left-side">Marresi</td>
                            <td class="right-side" colspan="2"> <input type="text" id="marresi" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="left-side">Adresa e marresit</td>
                            <td class="right-side" colspan="2"> <input type="text" id="adresa" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="left-side">Prioriteti</td>
                            <td class="right-side" colspan="2"> <input type="text" id="prioriteti" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="left-side">Qyteti</td>
                            <td class="right-side" colspan="2"> <input type="text" id="qyteti" class="form-control"></td>
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

