<header >
   <div class="wrapper">
    <div class="container">
      <div class="left">
        <ul>
            @foreach (config('menues.menu') as $item)

            <li><a class="{{ Route::currentRouteName() ===  $item['view'] ? 'active' : '' }}"
                 href="{{ route($item['view']) }}">{{ $item['name'] }}</a></li>

            @endforeach

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
