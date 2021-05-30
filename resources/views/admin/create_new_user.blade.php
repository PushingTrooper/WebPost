@extends('layouts.master')

@section('pageTitle', 'Login')

@section('content')
    <div id="create-new-user">
        <div class="background-container">
            <div class="pick-user-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center">Zgjidh Rol</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="role">
                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>
                                <p>Postier</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="role">
                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>
                                <p>Magazinier</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="role">
                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>
                                <p>Administrator</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="role">
                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>
                                <p>Klient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
