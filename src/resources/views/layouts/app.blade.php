<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  @yield('css')
  @livewireStyles
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
      @if (Auth::check())
      <form class="form" action="/logout" method="post">
      @csrf
<button class="header-nav__button">logout</button>
</form>
@endif
      <!-- <nav>
        <ul class="header-nav">
          <li class="header-nav__item">
            <a class="header-nav__link" href="/">login</a>
          </li>
        </ul>
      </nav> -->
    </div>
    </div>
  </header>

  <main>
    @yield('content')
    @livewireScripts
  </main>
</body>

</html>