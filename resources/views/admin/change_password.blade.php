@extends('layouts.master')

@section('pageTitle', 'ChangePassword')

@section('content')


    <div id="change-password">
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
                        <h2 class="styled-header mb-2">Kerkese per ndryshim fjalekalimi</h2>
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
                            <tbody id="users-list">
                            <tr>
                                <td>Emer Mbiemer</td>
                                <td>emer@rrufe.com</td>
                                <td>1234567</td>
                                <td><input type="password" placeholder="Shkruani ketu"></td>
                                <td><input type="password" placeholder="Shkruani ketu"></td>
                                <td>
                                    <div data-id="" class="confirm">Konfirmoni</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
