@extends('layouts.master')

@section('pageTitle', 'Home Page')

@section('content')
    <div id="client-homepage">
        <div class="container-fluid">
            <div class="row title-bar">
                <a href="{{route('home')}}"><img src="{{asset("storage/images/logo.png")}}" alt="Rrufe"></a>
                <div class="button-container">
                    <button class="kycu">Kyçu</button>
                    <button class="regjistrohu">Regjistrohu</button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row gjurmo-form-container">
                <div class="col-10 offset-1 offset-md-0 col-md-6 d-flex align-items-center justify-content-center mb-5 mt-5">
                    <?php Form::open(['method' => 'POST', 'route' => 'home']) ?>
                    <div class="form-section position-relative">
                        <h3>Kjo eshte faqja jone postare<br>hihihi hahaah uuu</h3>
                        <label for="gjurmo"></label>
                        <?php echo Form::text('gjurmo', null, array('placeholder' => 'Vendos kodin', 'id' => 'gjurmo', 'class' => 'w-100 form-control')); ?>
                        <?php echo Form::submit('Gjurmo', array('name' => 'submit')) ?>
                    </div>
                    <?php Form::close() ?>
                </div>
                <div class="col-10 offset-1 offset-md-0 col-md-5 z-indexed-div mb-5">
                    <div class="colored-box blue"></div>
                    <div class="colored-box yellow"></div>
                    <div class="colored-box blue"></div>
                    <div class="colored-box yellow"></div>
                    <img src="{{asset('storage/images/woman_carrying_box.png')}}" alt="Postal image">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mb-5">
                    <div class="title-with-shapes">
                        <div class="circle-yellow"></div>
                        <h2>Shërbimet tona</h2>
                        <div class="box-lightblue"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-12 col-md-4 z-indexed-div mb-3">
                    <div class="orange-card circle-top"></div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div class="orange-card"></div>
                </div>
                <div class="col-12 col-md-4 mb-3 z-indexed-div">
                    <div class="orange-card circle-bottom"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
