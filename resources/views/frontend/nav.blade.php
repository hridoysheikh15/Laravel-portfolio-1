<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="/"><img src="{{ asset('asset/images/logo.png') }}" loading="lazy"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('quick-info') ? 'active' : '' }}" href="{{ route('quick.info') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about-me') ? 'active' : '' }}" href="{{ route('quick.info') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('my-works') ? 'active' : '' }}" href="{{ route('my.work') }}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('what-am-i-do') ? 'active' : '' }}" href="{{ route('service') }}">Service</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ Request::is('explore-with-me') ? 'active' : '' }}" href="{{ route('quick.info') }}">Blog</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('make-a-meeting') ? 'active' : '' }}" href="{{ route('contact.me') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</div>