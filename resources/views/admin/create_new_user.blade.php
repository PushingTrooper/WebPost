@extends('layouts.master')

@section('pageTitle', 'Login')

@section('content')
    <div id="create-new-user">
        <div class="background-container">
            <div id="pick-user-container" class="pick-user-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center">Zgjidh Rol</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="role" onclick="openPostman()">
                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>
                                <p>Postier</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="role" onclick="openWarehouse()">
                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>
                                <p>Magazinier</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="role" onclick="openAdmin()">
                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>
                                <p>Administrator</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="role" onclick="openClient()">
                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>
                                <p>Klient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="role-container" class="col-12 col-sm-10 col-md-5 fields-container" style="display: none;">
                <div class="row">
                    <div class="col-8 title">Rregjistrim</div>
                    <div class="col-4">[dropdown]</div>
                </div>
                <div id="postman-container">
                    <div class="row">
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="name">Emri</label><br>
                            <div id="name-div">
                                <input type="text" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="surname">Mbiemri</label><br>
                            <div id="surname-div">
                                <input type="text" id="surname" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="city">Qyteti</label><br>
                            <div id="city-div">
                                <input type="text" id="city" class="form-control">
                            </div>
                        </div>
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="pay">Paga</label><br>
                            <div id="pay-div">
                                <input type="text" id="pay" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="address">Adresa</label><br>
                            <div id="address-div">
                                <input type="text" id="address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="email">Email</label><br>
                            <div id="email-div">
                                <input type="text" id="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="password">Fjalëkalimi</label><br>
                            <div id="password-div">
                                <input type="password" id="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="confirm-password">Konfirmo Fjalëkalimi</label><br>
                            <div id="confirm-password-div">
                                <input type="password" id="confirm-password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <input type="button" value="Konfirmo" class="form-control" id="login-button" onclick="loginClick()">
                        </div>
                    </div>
                </div>
                <div id="warehouse-container" style="display: none;">
                    <div class="row">
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="name">Emri</label><br>
                            <div id="name-div">
                                <input type="text" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="surname">Mbiemri</label><br>
                            <div id="surname-div">
                                <input type="text" id="surname" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="address">Adresa</label><br>
                            <div id="address-div">
                                <input type="text" id="address" class="form-control">
                            </div>
                        </div>
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="pay">Paga</label><br>
                            <div id="pay-div">
                                <input type="text" id="pay" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="city">Qyteti</label><br>
                            <div id="city-div">
                                <input type="text" id="city" class="form-control">
                            </div>
                        </div>
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="warehouse">Magazina</label><br>
                            <div id="warehouse-div">
                                <input type="text" id="warehouse" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="email">Email</label><br>
                            <div id="email-div">
                                <input type="text" id="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="password">Fjalëkalimi</label><br>
                            <div id="password-div">
                                <input type="password" id="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="confirm-password">Konfirmo Fjalëkalimi</label><br>
                            <div id="confirm-password-div">
                                <input type="password" id="confirm-password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <input type="button" value="Konfirmo" class="form-control" id="login-button" onclick="loginClick()">
                        </div>
                    </div>
                </div>
                <div id="admin-container" style="display: none;">
                    <div class="row">
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="name">Emri</label><br>
                            <div id="name-div">
                                <input type="text" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="surname">Mbiemri</label><br>
                            <div id="surname-div">
                                <input type="text" id="surname" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="address">Adresa</label><br>
                            <div id="address-div">
                                <input type="text" id="address" class="form-control">
                            </div>
                        </div>
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="pay">Paga</label><br>
                            <div id="pay-div">
                                <input type="text" id="pay" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="email">Email</label><br>
                            <div id="email-div">
                                <input type="text" id="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="password">Fjalëkalimi</label><br>
                            <div id="password-div">
                                <input type="password" id="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="confirm-password">Konfirmo Fjalëkalimi</label><br>
                            <div id="confirm-password-div">
                                <input type="password" id="confirm-password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <input type="button" value="Konfirmo" class="form-control" id="login-button" onclick="loginClick()">
                        </div>
                    </div>
                </div>
                <div id="client-container" style="display: none;">
                    <div class="row">
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="name">Emri</label><br>
                            <div id="name-div">
                                <input type="text" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-section col-12 col-sm-6 col-md-6">
                            <label for="surname">Mbiemri</label><br>
                            <div id="surname-div">
                                <input type="text" id="surname" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="address">Adresa</label><br>
                            <div id="address-div">
                                <input type="text" id="address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="email">Email</label><br>
                            <div id="email-div">
                                <input type="text" id="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="password">Fjalëkalimi</label><br>
                            <div id="password-div">
                                <input type="password" id="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <label for="confirm-password">Konfirmo Fjalëkalimi</label><br>
                            <div id="confirm-password-div">
                                <input type="password" id="confirm-password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-section col-12 col-sm-12 col-md-12">
                            <input type="button" value="Konfirmo" class="form-control" id="login-button" onclick="loginClick()">
                        </div>
                    </div>
                </div>
                <p onclick="goBack()">Go Back</p>
            </div>
        </div>
    </div>
@endsection
<script src="{{asset('/js/create_new_user.js')}}"></script>
