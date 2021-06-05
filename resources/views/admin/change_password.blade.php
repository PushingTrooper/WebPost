@extends('layouts.master')

@section('pageTitle', 'ChangePassword')

@section('content')


    <div id="change-password">
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
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Emri Perdoruesit</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fjalekalimi</th>
                    <th scope="col">Ndrysho Fjalekalimin</th>
                    <th scope="col">Konfirmo Fjalekalimin</th>
                    <th scope="col">________</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Emer Mbiemer</td>
                    <td>emer@rrufe.com</td>
                    <td>1234567</td>
                    <td><input type="password" placeholder="Shkruani ketu"></td>
                    <td><input type="password" placeholder="Shkruani ketu"></td>
                    <td><div data-id="" class="confirm">Konfirmoni</div></td>
                </tr>
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>


@endsection
