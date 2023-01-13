<header>
    <nav class="navbar">
      <div class="container">
        <a href="{{route('home')}}" class="img-link">
          <img
            src="{{asset('images/dc-logo.png')}}"
            alt="dc-logo">
        </a>
        <ul>
            @foreach ($headermenu as $item)
            <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
            @endforeach
        </ul>
      </div>
    </nav>
    <div>
        <section class="jumbotron">
        </section>
      </div>
  </header>
