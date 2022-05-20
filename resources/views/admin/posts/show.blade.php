@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2>
                    {{$post->author}}
                </h2>

                <div>
                    <img src="{{$post->image}}" alt="">
                </div>

                <p>
                    {{$post->description}}
                </p>
            </div>
        </div>
    </div>

@endsection