@extends('layouts.app')

@section('content')
<div class="container">
    <div style="height:50px"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel administratora</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        Zalogowano jako administrator <br>
                        Od teraz możesz zmieniać zawartość strony - przejdź się i sprawdź! <br>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary btn-sm">
                                    Wyloguj
                                </button>
                            </form>
                        </div>
                        <div class="col">
                            <a href="{{ route('home') }}">
                                <button class="btn btn-primary btn-sm float-right" type="button">
                                    Strona główna
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
