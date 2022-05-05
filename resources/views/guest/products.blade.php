@extends('layout.base')

@section('main-content')
    <main>
        <div class="content-wrapper">
            @foreach($comics as $index => $comic)
            <div class="card-wrapper">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <h4>
                    <a href=" {{route("guest-singleProducts" , ["id" => $index] )}}">    
                    {{$comic['title']}}
                    </a>
                </h4>
            </div>
            @endforeach
        </div>
        <div class="bonus">
        <div class="container">
            @foreach($imagesNav as $image)
            <div class="bonus-wrapper">
                <img src="{{$image['url']}}" alt="{{$image['text']}}">
                <h5> {{$image['text']}} </h5>
            </div>
            @endforeach
        </div>
    </div>
    </main>
@endsection