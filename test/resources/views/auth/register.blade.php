@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



                <div class="card darken-1">
                  <div class="card-content ">
                     <span class="card-title">{{ __('Registrar') }}</span>
                     <div class="row">
                     <form  class="col s12" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                      @csrf
                      <div class="row">
                        <div class="input-field col s12">

                          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                          <label for="name">{{ trans('web.name') }}</label>
                          @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>


                      <div class="row">
                        <div class="input-field col s12">
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                          <label for="email">{{ trans('web.email') }}</label>

                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>


                      <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required>

                          <label for="password">{{ trans('web.password') }}</label>


                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                          <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>


                          @if ($errors->has('password_confirmation'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>







                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Registrar') }}
                              </button>
                          </div>
                      </div>
                  </form>

</div>
                  </div>
                </div>
         </div>

    </div>
</div>
@endsection
