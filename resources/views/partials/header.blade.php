<header >
   <div class="wrapper">
    <div class="container">
      <div class="left">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('product') }}">Prodotti</a></li>
            <li><a href="{{ route('about') }}">Chi Siamo</a></li>
        </ul>

      </div>
      <div class="center">
        <img src="{{Vite::asset('resources/img/boolean-logo.png')}}" alt="" />
      </div>
      <div class="rigth d-flex ">
        @foreach (config('menues.icons') as $icon)

       <i class="{{ $icon['text'] }}"></i>

        @endforeach
      </div>
    </div>
  </div>

</header>
