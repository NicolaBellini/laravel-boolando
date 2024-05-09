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
                       <img src="{{ asset('img/' . $product['frontImage']) }}" alt="" />

                    </div>
                    <div class="tag">
                    <!-- applico la classe sostenibilità solo se il .value è uguale a sostenibilità -->
                        <div
                            class="badge"
                           class="{{ $product['badges'][0]['value'] === 'Sostenibilità' ? 'sost' : 'discount' }}"

                        >
                            {{ $product['badges'][0]['value'] }}
                        </div>
                        <!-- applico la classe discount o una stringa vuota se il value è diverso da sostenibilità o striga vuota -->
                        {{-- <div
                            class="badge"
                           class="{{ $product['badges'][1]['value'] === 'Sostenibilità' ? 'sost' : 'discount' }}"

                        >
                            {{ $product['badges'][1]['value'] }}
                        </div> --}}
                    </div>
                    <div class="liked" @click="{!! '$product[\'isInFavorites\'] = !$product[\'isInFavorites\']' !!}">
                        <div>
                            <span><i class="fa-solid fa-heart {{ $product['isInFavorites'] ? 'favorite' : '' }}"></i></span>
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

