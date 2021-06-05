@extends('layouts.master')

@section('pageTitle', 'Dashboard')

@section('content')
    <style>
        .sidebar-container {
            position: fixed;
            width: 220px;
            height: 100%;
            left: 0;
            overflow-x: hidden;
            overflow-y: auto;
            background: white;
            color: darkorange;
        }

        .content-container {
            padding-top: 20px;
        }

        .sidebar-logo {
            padding: 10px 15px 10px 30px;
            font-size: 20px;
            background-color: #f5d238;
        }

        .sidebar-navigation {
            padding: 0;
            margin: 0;
            list-style-type: none;
            position: relative;
        }

        .sidebar-navigation li {
            background-color: transparent;
            position: relative;
            display: inline-block;
            width: 100%;
            line-height: 20px;
        }

        .sidebar-navigation li a {
            padding: 10px 15px 10px 30px;
            display: block;
            color: black;
        }

        .sidebar-navigation li .fa {
            margin-right: 10px;
        }

        .sidebar-navigation li a:active,
        .sidebar-navigation li a:hover,
        .sidebar-navigation li a:focus {
            text-decoration: none;
            outline: none;
        }

        .sidebar-navigation li::before {
            background-color: darkorange;
            position: absolute;
            content: '';
            height: 100%;
            left: 0;
            top: 0;
            -webkit-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 3px;
            z-index: -1;
        }

        .sidebar-navigation li:hover::before {
            width: 100%;
        }

        .sidebar-navigation .header {
            font-size: 12px;
            text-transform: uppercase;
            background-color: white;
            padding: 10px 15px 10px 30px;
        }

        .sidebar-navigation .header::before {
            background-color: transparent;
        }

        .content-container {
            padding-left: 220px;
        }
    </style>
<div id="admin-dashboard">
    <div class="sidebar-container">
        <div class="sidebar-logo">
            Admin
        </div>
        <ul class="sidebar-navigation">
            <li class="header">gje</li>
            <li>
                <a href="#">
                    <i class="fa fa-home" aria-hidden="true"></i> Homepage
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
                </a>
            </li>
            <li class="header">gje1</li>
            <li>
                <a href="#">
                    <i class="fa fa-users" aria-hidden="true"></i> Friends
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cog" aria-hidden="true"></i> Settings
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Information
                </a>
            </li>
        </ul>
    </div>
    <div>
        <div class="container-fluid">
            <div class="row ml-3 mt-2 mb-3" id="p-title-top">
                <div class="col-sm-12">
                    <h1 class="page-title-f">Dashboard</h1>
                </div>
            </div>

            <hr class="hr-line">
        </div>
        <div class="container-fluid">
            <div class="row" id="dashboard-f">
                <div class="col-sm-3 rw-d">
                    <h3>Totali i dërgesave në statuset</h3>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/u-krijua-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>U krijua</p>
                        </div>
                        <div>
                            <p>{{--{{$in_status[0]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/ne-thes-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>U fut në thes</p>
                        </div>
                        <div>
                            <p>{{--{{$in_status[1]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/ne-magazine-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Në magazinë</p>
                        </div>
                        <div>
                            <p>{{--{{$in_status[2]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/per-dergim-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Për dërgim</p>
                        </div>
                        <div>
                            <p>{{--{{$in_status[3]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/kthim-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Kthim</p>
                        </div>
                        <div>
                            <p>{{--{{$in_status[4]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/dorezuar-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Dorëzuar</p>
                        </div>
                        <div>
                            <p>{{--{{$in_status[5]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/kthim-ne-magazine-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Kthim në magazinë</p>
                        </div>
                        <div>
                            <p>{{--{{$in_status[6]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/likujduar-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Likuiduar</p>
                        </div>
                        <div>
                            <p>{{--{{$in_status[7]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f all-end">
                        <p>Gjithsej &nbsp;&nbsp;   {{--{{$orders_total}}--}}</p>

                    </div>

                </div>
                <div class="col-sm-3 rw-d" id="employee">
                    <h3>Totali i punonjësve në pozicionet</h3>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/d-punonjes-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Administrator</p>
                        </div>
                        <div>
                            <p>{{--{{$employees[0]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/d-punonjes-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Magazinier</p>
                        </div>
                        <div>
                            <p>{{--{{$employees[1]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/d-punonjes-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Shef&nbsp;magazine</p>
                        </div>
                        <div>
                            <p>{{--{{$employees[2]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/d-punonjes-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Operator</p>
                        </div>
                        <div>
                            <p>{{--{{$employees[3]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/d-punonjes-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Ekonomist</p>
                        </div>
                        <div>
                            <p>{{--{{$employees[4]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/d-punonjes-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Postier</p>
                        </div>
                        <div>
                            <p>{{--{{$employees[5]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f all-end">
                        <p>Gjithsej &nbsp;&nbsp;   {{--{{$employees_total}}--}} </p>
                    </div>

                </div>
                <div class="col-sm-3 right-col-df">
                    <div class="col rw-d" id="priority">
                        <h3>Totali i dërgesave në prioritet</h3>
                        <div class="col col-list-f">
                            <div>
                                <img class="d-icon" src="{{--{{asset('storage/images/icons/ekspres-icon.png')}}--}}">
                            </div>
                            <div>
                                <p>Ekspres</p>
                            </div>
                            <div>
                                <p>{{--{{$priority[0]}}--}}</p>
                            </div>
                        </div>

                        <div class="col col-list-f">
                            <div>
                                <img class="d-icon" src="{{--{{asset('storage/images/icons/normal-icon.png')}}--}}">
                            </div>
                            <div>
                                <p>Normal</p>
                            </div>
                            <div>
                                <p>{{--{{$priority[1]}}--}}</p>
                            </div>
                        </div>


                    </div>
                    <div class="col rw-d" id="max_discounts">
                        <h3>Klientët me më shumë ulje</h3>
                        {{--                    @if($max_discounts)--}}
                        {{--                        @foreach ($max_discounts as $k)--}}
                        {{--                            @if($k[0]!="-")--}}
                        <div class="col col-list-f">
                            <div>
                                <img class="d-icon" src="{{--{{asset('storage/images/icons/klient-me-ulje-icon.png')}}--}}">
                            </div>
                            <div>
                                <p>{{--{{$k[0]}}--}}</p>
                            </div>
                            <div>
                                <p>{{--{{$k[1]}}--}}</p>
                            </div>
                        </div>
                        {{--                            @endif--}}
                        {{--                        @endforeach--}}
                        {{--                    @endif--}}


                    </div>
                </div>
                <div class="col-sm-3 right-col-df trans-top-col-df">
                    <div class="col rw-d" id="order_type">
                        <h3>Totali i dërgesave në tipet</h3>

                        <div class="col col-list-f">
                            <div>
                                <img class="d-icon" src="{{--{{asset('storage/images/icons/leter-icon.png')}}--}}">
                            </div>
                            <div>
                                <p>Letër</p>
                            </div>
                            <div>
                                <p>{{--{{$type[0]}}--}}</p>
                            </div>
                        </div>

                        <div class="col col-list-f">
                            <div>
                                <img class="d-icon" src="{{--{{asset('storage/images/icons/pako-icon.png')}}--}}">
                            </div>
                            <div>
                                <p>Pako</p>
                            </div>
                            <div>
                                <p>{{--{{$type[1]}}--}}</p>
                            </div>
                        </div>


                    </div>
                    <div class="col rw-d" id="max_orders_clients">
                        <h3>Klientët me numrin më të lartë të dërgesave</h3>
                        {{--                    @if($max_orders_clients)--}}
                        {{--                        @foreach ($max_orders_clients as $k)--}}
                        <div class="col col-list-f">
                            <div>
                                <img class="d-icon" src="{{--{{asset('storage/images/icons/klient-icon.png')}}--}}">
                            </div>
                            <div>
                                <p>{{--{{$k[0]}}--}}</p>
                            </div>
                            <div>
                                <p>{{--{{$k[1]}}--}}</p>
                            </div>
                        </div>
                        {{--                        @endforeach--}}
                        {{--                    @endif--}}

                        <div class="col col-list-f">
                            <div>
                                <img class="d-icon" src="{{--{{asset('storage/images/icons/klient-me-ulje-icon.png')}}--}}">
                            </div>
                            <div>
                                <p>Numri i klientëve biznes</p>
                            </div>
                            <div>
                                <p>{{--{{$total_clients}}--}}</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
