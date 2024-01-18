<!-- resources/views/auth/register.blade.php -->

@extends('fragments/layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Register') }}</div>
                <div class="card-body">
                    <!-- Se utiliza old ej: {{ old('name') }} para repoblar el campo 
                    con el valor anterior después de una redirección con errores -->
                    <form method="POST" action="{{ url('register') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name">{{ __('auth.register.name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">{{ __('auth.register.email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">{{ __('auth.register.password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                            name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password-confirm">{{ __('auth.register.password_confirmation') }}</label>
                            <input id="password-confirm" type="password" class="form-control" 
                            name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
