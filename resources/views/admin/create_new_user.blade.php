@extends('layouts.master')

@section('pageTitle', 'Login')

@section('content')
    <div id="create-new-user">
        <div class="background-container">
            <div class="pick-user-container">
                <div class="container-fluid regjistro">
{{--                        <div class="col-12">--}}
{{--                            <h1 class="text-center">Zgjidh Rol</h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12 col-sm-6 col-md-3">--}}
{{--                            <div class="role">--}}
{{--                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>--}}
{{--                                <p>Postier</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-sm-6 col-md-3">--}}
{{--                            <div class="role">--}}
{{--                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>--}}
{{--                                <p>Magazinier</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-sm-6 col-md-3">--}}
{{--                            <div class="role">--}}
{{--                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>--}}
{{--                                <p>Administrator</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-sm-6 col-md-3">--}}
{{--                            <div class="role">--}}
{{--                                <img alt="role" src="{{asset('storage/icons/role.svg')}}"/>--}}
{{--                                <p>Klient</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                                <div class="row">
                                    <div class="float-left">
                                    <h1>Regjistrohu</h1>
                                       </div>
                                    <div class="float-right">
                                    <select class="rolet1">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                        <option value="magazinier">Magazinier</option>
                                        <option value="postier">Postier</option>
                                    </select>
                                    </div>
                                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
