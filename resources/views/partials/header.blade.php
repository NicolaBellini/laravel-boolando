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
        <img src="{{Vite::}}" alt="" />
      </div>
      <div class="rigth">
        <div v-for="(item, index) in icons" :key="index" v-html="item"></div>
      </div>
    </div>
  </div>

</header>
