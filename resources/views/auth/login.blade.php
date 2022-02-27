@extends('layouts.base')

@section('content')
<section>
  <div id="wrapper">
    <div class="services">
      <div class="container-auth">
        <ul class="d-flex justify-content-between services-header">
          <li>
            Авторизация пользователя
          </li>
          <li>
            <a href="{{ route('register') }}">Регистрация <img src="{{ asset('/img/icon/icon_arrow.svg') }}" alt="{add}"></a>
          </li>
        </ul>
        <form method="POST" action="{{ route('login') }}">
          @csrf
      
          <div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
              value="{{ old('email') }}" required autocomplete="email" autofocus>
    
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
      
          <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>
      
            <div class="col-md-6">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
      
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
      
          <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                  {{ old('remember') ? 'checked' : '' }}>
      
                <label class="form-check-label" for="remember">
                  {{ __('Запомнить меня') }}
                </label>
              </div>
            </div>
          </div>
      
          <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
              <button type="submit" class="btn btn-primary">
                {{ __('Войти') }}
              </button>
      
              @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Забыли пароль?') }}
              </a>
              @endif
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
