<!-- resources/views/fragments/header.blade.php -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">DBSL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">{{ __('header.welcome') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">{{ __('header.about') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">{{ __('header.contact') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/auth/register') }}">{{ __('header.register') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/auth/login') }}">{{ __('header.login') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
