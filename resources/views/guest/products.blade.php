@extends('layout.base')

@section('main-content')
    <main>
        <div class="content-wrapper">
            @foreach($comics as $comic)
            <div class="card-wrapper">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            @endforeach
        </div>
    </main>
@endsection

@dump($comics)