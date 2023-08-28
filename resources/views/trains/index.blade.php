@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <h1 class="fw-bold text-center pt-2">Trains:</h1>

    <section id="trains">
        <div class="row row-cols-4">

            @forelse ($trains as $train)
                <div class="col">
                    @include('includes.trains.card')
                </div>

            @empty
                <h3 class="fw-bold text-center pt-2">There isn't trains :(</h3>
            @endforelse
        </div>
    </section>

@endsection
