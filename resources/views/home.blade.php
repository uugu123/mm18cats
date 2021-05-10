@extends('layouts.default')

@section('title', 'Home')

@section('content')
    @include('partials.hero')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @for($i = 0; $i<9; $i++)
                    <div class="col">
                        @include('partials.album-card')
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
