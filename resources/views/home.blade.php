@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <div class="container">
        <h1 class="text-center mt-3">{{ $train->agency }}</h1>
    </div>
@endsection
