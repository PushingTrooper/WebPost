@extends('layouts.master')

@section('pageTitle', 'Login')

@section('content')
    <div id="create-new-user">
        <div class="background-container">
            <div id="pick-user-container" class="pick-user-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-5 offset-md-6 offset-lg-7 registerr">
                            <div class="row">
                                <div class="col-6"><h1>Regjistrohu</h1></div>
                                <div class="col-6 text-center">
                                    <select id="rolett" class="form-control w-50 float-right">
                                        <option value="admin">Admin</option>
                                        <option value="postier">Postier</option>
                                        <option value="magazinier">Magazinier</option>
                                        <option value="perdorues">Perdorues</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-section row">
                                        <div class="col-6">
                                            <label for="name">Emër</label><br>
                                            <div id="name-div">
                                                <input type="text" id="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                        <label for="surname">Mbiemër</label><br>
                                        <div id="surname-div">
                                            <input type="text" id="surname" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-section">
                                        <label for="address">Adresa</label><br>
                                        <div id="address-div">
                                            <input type="text" id="address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-section">
                                        <label for="email">Email</label><br>
                                        <div id="password-div">
                                            <input type="text" id="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-section">
                                        <label for="password">Fjalëkalim</label><br>
                                        <div id="password-div">
                                            <input type="password" id="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-section">
                                        <label for="password">Konfirmo Fjalekalimin</label><br>
                                        <div id="password-div">
                                            <input type="password" id="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-section">
                                        <input type="button" value="Kyçu" class="form-control" id="login-button1"
                                               onclick="registerClick()">
                                    </div>
                                    <div class="form-section">
                                        <div id="request-message" style="visibility: hidden;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

