@extends('layouts.master')

@section('pageTitle', 'Register')

@section('content')
    <div id="view-login">
        <div class="background-container">

            <div class="login-form-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center">Mirësevini</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-8 col-md-4 offset-sm-2 offset-md-4">
                            <div class="form-section">
                                <label for="email">Email</label><br>
                                <div id="email-div">
                                    <img alt="email_icon" src="/icons/email.svg" class="input-icon"/>
                                    <input type="text" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-section">
                                <label for="password">Fjalëkalim</label><br>
                                <div id="password-div">
                                    <img alt="email_icon" src="/icons/password.svg" class="input-icon" style="margin-top: 5px"/>
                                    <input type="password" id="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-section">
                                <label for="name">Emër</label><br>
                                <div id="name-div">
                                    <input type="text" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-section">
                                <label for="surname">Mbiemër</label><br>
                                <div id="surname-div">
                                    <input type="text" id="surname" class="form-control">
                                </div>
                            </div>
                            <div class="form-section">
                                <label for="address">Adresa</label><br>
                                <div id="address-div">
                                    <input type="text" id="address" class="form-control">
                                </div>
                            </div>
                            <div class="form-section">
                                <input type="button" value="Kyçu" class="form-control" id="login-button" onclick="registerClick()">
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
    <script src="{{asset('/js/register.js')}}"></script>
@endsection
