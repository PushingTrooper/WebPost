@extends('layouts.master')

@section('pageTitle', 'Home')

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
                        <div class="col-12 col-sm-8 col-md-6 offset-sm-2 offset-md-3">
                            <div class="form-section">
                                <label for="email">E-mail:</label><br>
                                <input type="text" id="email" class="form-control">
                            </div>
                            <div class="form-section">
                                <label for="password">Password:</label><br>
                                <input type="password" id="password" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
