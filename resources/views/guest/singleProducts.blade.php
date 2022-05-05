@extends('layout.base')

@section('main-content')
    <div>    
        <div class="singleproduct-wrapper d-flex">
            <div class="comic-wrapper">
                <h2>{{$comic["title"]}} </h2>
            
                <div class="info-box d-flex">
                    <div class="d-flex info-item">
                        <span>
                            U.S. Price: {{$comic["price"]}}
                        </span>
                        <span>
                            AVAILABLE
                        </span>
                        <span>
                        Check Availability
                        </span>
                    </div>
                </div>
                <p>
                    {{$comic["description"]}}
                </p>
            </div>
        </div>
        <div>
            <div>
                <span>
                    Art by:
                </span>
            </div>
        </div>
    </div>
@endsection