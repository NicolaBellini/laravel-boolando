@extends('layout.main')
@section('content')

<main class="bg-light">
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to Zalando</h1>
            <p>Your ultimate fashion destination</p>
            <a href="{{ route('product') }}" class="btn btn-shop">Shop Now</a>
        </div>
    </div>
</main>

@endsection


