@extends('layouts.app')

@section('title', 'Services')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <button class="btn btn-terminal">Services</button>
    </div>

    <div class="row g-4">
        @foreach($services as $service)
        <div class="col-md-4">
            <div class="card card-linux h-100">
                <div class="card-body text-center p-4">
                    <h5 class="card-title terminal-prompt mb-3">{{ $service['name'] }}</h5>
                    <p class="card-text text-light" style="font-family: 'Courier New', monospace;">
                        {{ $service['description'] }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection