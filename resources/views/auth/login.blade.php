@extends('layouts.app')

@section('content')
  <div class="container">
    <div style="height:50px"></div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Zaloguj</div>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card-body">
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                         name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Hasło</label>

                <div class="col-md-6">
                  <input id="password" type="password"
                         class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                         required>

                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="form-group row float-right">
                <button type="submit" class="btn btn-primary px-5">
                  Zaloguj
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
