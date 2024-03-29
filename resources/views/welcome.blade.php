@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-9">
                        <h1 class="text-white">{{ __('Bienvenido a la Gestión del Conocimiento.') }}</h1>
                        <h2 class="text-white">
                            La red de conocimientos corporativos mas exitosa.
                        </h2>
    
                        <p class="text-lead text-light mt-3 mb-0">
                            Intuitivo para su uso en cualquier Organización.
                                                </p>
                    </div>
                               
                                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
@endsection
