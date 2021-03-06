@extends('layouts.master')

@section('pageTitle', 'Dashboard')

@section('content')
    <style>
        .sidebar-container {
            position: fixed;
            width: 270px;
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
            <li class="header">Seksioni i pare</li>
            {{--<li>
                <a href="./admin/changePassword">
                    <i class="fa fa-home" aria-hidden="true"></i>Ndrysho Fjalekalim
                </a>
            </li>--}}
            <li>
                <a href="./admin/createUser">
                    <i class="fa fa-tachometer" aria-hidden="true"></i> Krijo Perdorues
                </a>
            </li>
            <li class="header">Seksioni i dyte</li>
            <li>
                <a href="./packages">
                    <i class="fa fa-users" aria-hidden="true"></i> Lista e pakove
                </a>
            </li>
            {{--<li>
                <a href="#">
                    <i class="fa fa-cog" aria-hidden="true"></i> Vendndodhja e postiereve
                </a>
            </li>--}}
        </ul>
    </div>
    <div>
{{--        <div class="container-fluid">--}}
{{--            <div class="row ml-3 mt-2 mb-3" id="p-title-top">--}}
{{--                <div class="col-sm-12">--}}
{{--                    <h1 class="page-title-f">Dashboard</h1>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <hr class="hr-line">--}}
        </div>
    <div class="container-fluid">
        <div class="">
            <div class="col-6" style="margin-left: 25%">
                <div style="margin-left: 305px; margin-top: 2rem">
                    <img src="" id="profile-image" alt="logo" width="100px" height="100px">
                    <div class="image-input-container">
                    <input type="file" name="image" id="image" accept="image/*">
                    </div>
                    <button onclick="uploadImage()" >Upload</button>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="float-right d-flex align-items-center h-100">
                        <button class="button-logout">DIL</button>
                    </div>
                </div>
            </div>

            <div class="row" id="dashboard-f" style="margin-left: 300px; margin-top: 2rem; margin-right: 40px">

                <div class="col-sm-3 rw-d">
                    <h3>Totali i d??rgesave n?? statuset</h3>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/u-krijua-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>U shtua</p>
                        </div>
                        <div>
                            <p id="added">{{--{{$in_status[0]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/ne-thes-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>N?? pritje p??r d??rgim</p>
                        </div>
                        <div>
                            <p id="waiting">{{--{{$in_status[1]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/ne-magazine-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>E nisur</p>
                        </div>
                        <div>
                            <p id="nisur">{{--{{$in_status[2]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/per-dergim-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>N?? magazin??</p>
                        </div>
                        <div>
                            <p id="inventory">{{--{{$in_status[3]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/kthim-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Mb??rritur</p>
                        </div>
                        <div>
                            <p id="arrived">{{--{{$in_status[4]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/dorezuar-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>N?? kthim</p>
                        </div>
                        <div>
                            <p id="returning">{{--{{$in_status[5]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/kthim-ne-magazine-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>E Kthyer</p>
                        </div>
                        <div>
                            <p id="returned">{{--{{$in_status[6]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/likujduar-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>E humbur</p>
                        </div>
                        <div>
                            <p id="lost">{{--{{$in_status[7]}}--}}</p>
                        </div>
                    </div>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/likujduar-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>E fshir??</p>
                        </div>
                        <div>
                            <p id="deleted">{{--{{$in_status[7]}}--}}</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-3 rw-d" id="employee" style="height: max-content;">
                    <h3>Totali i punonj??sve n?? pozicionet</h3>

                    <div class="col col-list-f">
                        <div>
                            <img class="d-icon" src="{{--{{asset('storage/images/icons/d-punonjes-icon.png')}}--}}">
                        </div>
                        <div>
                            <p>Administrator</p>
                        </div>
                        <div>
                            <p id="admin">{{--{{$employees[0]}}--}}</p>
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
                            <p id="warehouse">{{--{{$employees[1]}}--}}</p>
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
                            <p id="postman">{{--{{$employees[5]}}--}}</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-3 right-col-df">
                    <div class="col rw-d" id="priority">
                        <h3>Totali i d??rgesave n?? prioritet</h3>
                        <div class="col col-list-f">
                            <div>
                                <img class="d-icon" src="{{--{{asset('storage/images/icons/ekspres-icon.png')}}--}}">
                            </div>
                            <div>
                                <p>Ekspres</p>
                            </div>
                            <div>
                                <p id="express">{{--{{$priority[0]}}--}}</p>
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
                                <p id="normal">{{--{{$priority[1]}}--}}</p>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-sm-3 right-col-df trans-top-col-df">
                    <div class="col rw-d" id="order_type">
                        <h3>Totali i d??rgesave n?? tipet</h3>

                        <div class="col col-list-f">
                            <div>
                                <img class="d-icon" src="{{--{{asset('storage/images/icons/leter-icon.png')}}--}}">
                            </div>
                            <div>
                                <p>Let??r</p>
                            </div>
                            <div>
                                <p id="letter">{{--{{$type[0]}}--}}</p>
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
                                <p id="package">{{--{{$type[1]}}--}}</p>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
    <script src="{{asset('/js/admin.js')}}"></script>
@endsection
