@extends('layouts.app')

@section('content')
    <section class="bg-dark">
        <div class="container ">
            <div class="titleComics bg-primary d-flex align-items-center justify-content-center">
                <h4>CURRENT SERIES</h4>
            </div>

            <div class="row g-4">
                @foreach($Comics as $singleComics)
                    
                <div class="col-2">
                    <div class="card bg-dark text-white border-0 rounded-0 ">
                        <img src="{{ $singleComics["thumb"]}}" class="card-img-top" alt="...">
                        <div class="card-body ps-0">
                            <h5 class="card-title">{{ $singleComics["title"]}}</h5>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
            <div class="loadMore d-flex justify-content-center ">
                <button class="bg-primary mb-3">LOAD MORE</button>
            </div>
    </section>

    <section class=" blueFooter bg-primary ">
        <div class="elements ">
            @foreach ($ItemsList as $item)
                <div class="singleElement">
                    <div class="imageElement">
                        <img src="{{ Vite::asset ($item['img'] )}}" alt="">
                    </div>
                    <div class="textElement">
                        {{ $item['title'] }}
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endsection
