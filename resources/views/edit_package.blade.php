@extends('layouts.master')

@section('pageTitle', 'Login')

@section('content')

<style>
    .edito {
        background-color: transparent;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: left center;
        padding: 4px;
        padding-left: 2rem;
    }

    .konfirmo{
        background-color: #FEE301;
        border-radius: 8px;
        width: 80px;
        height: 40px;
        box-shadow: #7abaff;
    }

    #emri{
        width: 70%;
    }
</style>


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
                            <td class="left-side">Emri Marresit:</td>
                            <td class="right-side"> <input type="text" id="emri" class="form-control" placeholder="Ndrysho Emrin"></td>
                            <td class="right-side"><button class="float-right konfirmo"><b>Konfirmo</b></button></td>
                        </tr>
                        <tr>
                            <td class="left-side">Mbiemri Marresit</td>
                            <td class="right-side" colspan="2"> <input type="text" id="mbiemri" class="form-control w-50" placeholder="Ndrysho Mbiemrin"></td>
                        </tr>
                        <tr>
                            <td class="left-side">Adresa Marresit:</td>
                            <td class="right-side" colspan="2"> <input type="text" id="adresa" class="form-control w-50" placeholder="Ndrysho Adresa"></td>
                        </tr>
                        <tr>
                            <td class="left-side">Tipi:</td>
                            <td class="right-side" colspan="2">
                                <select name="gje" id="gje">
                                    <option value="" disabled selected>Zgjidhni Tipin</option>
                                    <option value="leter">Leter</option>
                                    <option value="pako">Pako</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="left-side">Prioriteti:</td>
                            <td class="right-side" colspan="2">
                                <select name="breh" id="eha">
                                    <option value="" disabled selected>Zgjidhni Prioritetin</option>
                                    <option value="leter">Ekspres</option>
                                    <option value="pako">Normal</option>
                                </select>
                            </td>
{{--                            <td class="right-side" colspan="2"> <input type="text" id="prioriteti" class="form-control w-50" placeholder="Ndrysho Prioritetin"></td>--}}
                        </tr>
                        <tr>
                            <td class="left-side">Qyteti:</td>
                            <td class="right-side" colspan="2"> <input type="text" id="qyteti" class="form-control w-50" placeholder="Ndrysho Qytetin"></td>
                        </tr>

                        <tr>
                            <td class="left-side">Magazina:</td>
                            <td class="right-side" colspan="2">Magazina 3</td>
                        </tr>
                        <tr>
                            <td class="left-side">Vlera:</td>
                            <td class="right-side" colspan="2">000 Lek</td>
                        </tr>
                        <tr>
                            <td class="left-side">Pagesa:</td>
                            <td class="right-side" colspan="2">E Kryer</td>
                        </tr>
                        <tr>
                            <td class="left-side">Statusi Aktual:</td>
                            <td class="right-side" colspan="2">Ne Magazine</td>
                        </tr>
                        <tr>
                            <td class="left-side">Perditesimi i Fundit:</td>
                            <td class="right-side" colspan="2">23.01.2021 16:58</td>
                        </tr>
                        <tr>
                            <td class="left-side">Perdoruessi qe Perditesoi Statusin:</td>
                            <td class="right-side" colspan="2">Emer Mbiemer</td>
                        </tr>
                        <tr>
                            <td class="left-side">Koment:</td>
                            <td class="right-side position-relative" colspan="2">
                                <input type="text" id="comment" class="form-control">
                                <input type="submit" id="koment" class="" value="Komento">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

