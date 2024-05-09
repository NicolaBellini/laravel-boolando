@extends('layout.main')
@section('content')


<main class="bg-light">
    <div class="container justify-content-center  d-flex flex-wrap">

        @foreach ($products as $product)

            <div
                class="card-wrapper"
                v-for="(product, index) in newProducts"
                :key="index"
            >
                    <div class="card-image">
                        <img src="{{ Vite::asset("resources/img/1.webp") }}" alt="" class="hovered-image" />
                         <img src="{{ Vite::asset("resources/img/1.webp") }}" alt="" class="hovered-image" />

                        <div class="tag">
                        <!-- applico la classe sostenibilità solo se il .value è uguale a sostenibilità -->
                            @foreach($product['badges'] as $badge)
                                <div class="badge {{ $badge['value'] === 'Sostenibilità' ? 'sost' : 'discount' }}">
                                    {{ $badge['value'] }}
                                </div>
                            @endforeach
                        </div>
                        <div class="liked"  onclick="$set($product['isInFavorites'], !$product['isInFavorites'])"  >
                            <div>
                                <span><i class="fa-solid fa-heart {{ $product['isInFavorites'] ? 'favorite' : '' }}"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="info">
                        <div class="brand">{{ $product['brand'] }}</div>
                        <div>
                            <h3>{{ $product['name'] }}</h3>
                        </div>
                        <div>
                            <span>{{ $product['price'] }}</span>
                        </div>
                    </div>
                </div>




        @endforeach


    </div>
</main>


@endsection

