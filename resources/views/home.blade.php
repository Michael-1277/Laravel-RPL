@extends('layouts.app')

@section('title', 'Home - Michael.ID')

@section('content')
<!-- Hero Section -->
<section class="min-vh-100 d-flex align-items-center"
    style="background: linear-gradient(rgba(45, 55, 73, 1), rgba(0, 0, 0, 0.9)), url('{{ asset('images/bg-2.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 mb-4 terminal-prompt typewriter">
                    Welcome to My Portfolio
                </h1>
                <p class="lead mb-4 text-light">
                    <span class="terminal-prompt">#</span> Hi, I'm Michael Nugroho
                </p>
                <p class="mb-4 text-secondary">
                    Crafting innovative technology solutions with modern development practices. Specializing in
                    full-stack development,
                    system architecture, and building scalable applications.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('services') }}" class="btn btn-outline-success">
                        <i class="fas fa-code me-2"></i>View Services
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-success">
                        <i class="fas fa-envelope me-2"></i>Contact Me
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection