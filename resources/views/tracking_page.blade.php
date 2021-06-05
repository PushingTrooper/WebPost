@extends('layouts.master')

@section('pageTitle', 'Tracking')

@section('content')
    <div id="package-tracking-page">
        <div class="h-100 d-flex align-items-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 align-items-center d-flex">
                        <div class="center-aligned">
                            <h5>Vendosni kodin e pakos per te pare statusin</h5>
                            <?php Form::open(['method' => 'POST', 'route' => 'home']) ?>
                            <div class="form-section position-relative">
                                <label for="gjurmo"></label>
                                <?php echo Form::text('gjurmo', null, array('placeholder' => 'Vendos kodin', 'id' => 'gjurmo', 'class' => 'w-100 form-control')); ?>
                                <?php echo Form::submit('Gjurmo', array('name' => 'submit')) ?>
                            </div>
                            <?php Form::close() ?>
                            <h3>Numri i pakos:</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1 align-items-center d-flex">
                        <div class="center-aligned">
                            <div class="tracking-section active">
                                <h5>Statusi:</h5>
                                <h5>Data:</h5>
                            </div>
                            <div class="tracking-section">
                                <h5>Statusi:</h5>
                                <h5>Data:</h5>
                            </div>
                            <div class="tracking-section">
                                <h5>Statusi:</h5>
                                <h5>Data:</h5>
                            </div>
                            <div class="tracking-section">
                                <h5>Statusi:</h5>
                                <h5>Data:</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
