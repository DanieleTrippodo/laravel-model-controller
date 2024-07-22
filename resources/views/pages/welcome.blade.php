@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
            @include('components.card', ['movie' => $movie])
        @endforeach
    </div>
</div>
@endsection
