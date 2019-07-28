@extends('layouts.app', ['title' => __('Gestión del Usuario')])

@section('content')
    @include('users.partials.header', ['title' => __('Agregar Usuario')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Gestión del Usuario') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Volver a la Lista') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Información del Usuario') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombres') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombres') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Correo Electrónico') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo Electrónico') }}" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>                               
                                <div class="form-group{{ $errors->has('birthday') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-birthday">Fecha de Nacimiento</label>
                                    <input type="text" name="birthday" class="form-control datepicker{{ $errors->has('birthday') ? ' is-invalid' : '' }}" id="input-birthday" placeholder="{{ __('Fecha de Nacimiento') }}" value="{{ old('birthday') }}" required>
                                </div>                                
                                <div class="form-group{{ $errors->has('role_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-role">{{ __('Rol') }}</label>
                                    <select name="role_id" id="input-role" class="form-control form-control-alternative{{ $errors->has('role_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Rol') }}" value="{{ old('role_id') }}" required>
                                        <option value="">-</option>
                                                                                        
                                    </select>
                                    @if ($errors->has('role_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('role_id') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group{{ $errors->has('photo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Foto de Perfil') }}</label>
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="input-picture" accept="image/*">
                                        <label class="custom-file-label" for="input-picture">{{ __('Seleccione Foto de Perfil') }}</label>
                                    </div>
                                    @if ($errors->has('photo'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('photo') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Clave') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Clave') }}" value="" required>
                                    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Clave de Confirmación') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Clave de Confirmación') }}" value="" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection