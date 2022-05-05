@extends('layout.base')

@section('main-content')
    <div>    
        <div class="content-wrapper">
            
            @foreach($comics as $comic => $index)
            <div class="card-wrapper">
                <h4>{{comics["title"]}} </h4>
            </div>
            @endforeach
        </div>
    </div>
@endsection