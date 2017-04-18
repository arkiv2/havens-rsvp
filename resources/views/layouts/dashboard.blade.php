<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>
</head>
<body>
  <section class="hero is-fullheight is-dark">
    <div class="hero-head">
      <div class="container">
        <nav class="nav">
          <div class="container">
            <div class="nav-left">
              <a class="nav-item" href="../index.html">
                <img src="{{ asset('img/HAVEN.png') }}" alt="Description">
              </a>
            </div>
            <span class="nav-toggle">
              <span></span>
              <span></span>
              <span></span>
            </span>
            <div class="nav-right nav-menu">
              <a class="nav-item">
                About
              </a>
              <a class="nav-item">
                Tour
              </a>
              <a class="nav-item">
                FAQ
              </a>
              <a class="nav-item">
                Contact
              </a>
              <span class="nav-item">
                <a class="button is-default">
                  Get Early Access
                </a>
              </span>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns is-vcentered">
          <div class="column is-5">
            <figure class="image is-4by3">
              <img src="https://images.unsplash.com/photo-1461669802687-84a1aee43a29?dpr=1&auto=format&crop=entropy&fit=crop&w=800&h=600&q=80" class="promo-img" alt="Description">
            </figure>
          </div>
          <div class="column is-6 is-offset-1">
            <h1 class="title is-2">
              Hi! {{ Auth::user()->name }}
            </h1>
            <h2 class="subtitle is-4">
              You have been invited to attend Haven's Baptism
            </h2>
            <br>
            <h2 class="subtitle is-6">
              Enter your mobile number and RSVP code to complete registration and receive updates
            </h2>
            <form method="POST" action="accept">
            {{ csrf_field() }}

            <p class="control has-addons has-text-centered">
              <input id="rsvp_code" name="rsvp_code" class="input is-expanded is-large" type="text" placeholder="Enter RSVP Code">
            </p>

            <p class="control has-addons has-text-centered">
              <input id="user_number" name="user_number" class="input is-expanded is-large" type="text" placeholder="+639XXXXXXXX">
            </p>
            <button class="button is-large is-danger is-outlined">
                Sign Up
            </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-foot">
      <div class="container">
        <div class="tabs is-centered">
          <ul>
            <li><a href="http://bulma.io">Made with bulma</a></li>
            <li><a>Copyright 2016 Bulma</a></li>
            <li><a href="http://unsplash.com">Images via unsplash</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <script src="{{ asset('js/bulma.js') }}"></script>
</body>
</html>