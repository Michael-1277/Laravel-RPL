@extends('layouts.app')

@section('title', 'Contact - Michael.ID')

@section('content')
<section class="py-5" style="min-height: calc(100vh - 76px);">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <button class="btn btn-terminal mb-4">Contact</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label text-light">
                                <span class="terminal-prompt">></span> Your Name
                            </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label text-light">
                                <span class="terminal-prompt">></span> Your Email
                            </label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label text-light">
                                <span class="terminal-prompt">></span> Your Message
                            </label>
                            <textarea class="form-control @error('message') is-invalid @enderror" 
                                id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-terminal" id="submitBtn">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection