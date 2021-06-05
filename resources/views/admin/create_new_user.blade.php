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
                <div class="container-fluid">
                    <div class="row">
                        <div id="role-container" class="col-12 col-md-6 col-lg-5 offset-md-6 offset-lg-7 registerr" style="display: none;">
                            <div class="row">
                                <div class="col-6"><h1>Regjistrohu</h1></div>
                                <div class="col-6 text-center">
                                    <select id="rolett" class="form-control w-50 float-right"
                                            onchange="changeRole(this)">
                                        <option value="admin">Admin</option>
                                        <option value="postier">Postier</option>
                                        <option value="magazinier">Magazinier</option>
                                        <option value="perdorues">Perdorues</option>
                                    </select>
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
                                            <select id="city" class="form-control"></select>
                                        </div>
                                    </div>
                                    <div class="form-section col-12 col-sm-6 col-md-6">
                                        <label for="warehouse">Magazina</label><br>
                                        <div id="warehouse-div">
                                            <select id="warehouse" class="form-control"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-section col-12 col-sm-12 col-md-12">
                                        <label for="email">Email</label><br>
                                        <div id="email-div">
                                            <input type="text" id="email" class="form-control">
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
                                                        <input type="password" id="confirm-password"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-section col-12 col-sm-12 col-md-12">
                                                    <input type="button" value="Konfirmo" class="form-control"
                                                           id="login-button" onclick="registerWarehouseman()">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="postman-container" style="display: none;">
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
                                            <select id="city" class="form-control"></select>
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
                                        <input type="button" value="Konfirmo" class="form-control"
                                               id="login-button" onclick="registerPostman()">
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
                                        <input type="button" value="Konfirmo" class="form-control"
                                               id="login-button" onclick="registerAdmin()">
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
                                        <input type="button" value="Konfirmo" class="form-control"
                                               id="login-button" onclick="registerClient()">
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <div id="request-message" style="visibility: hidden;"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="{{asset('/js/create_new_user.js')}}"></script>
@endsection

