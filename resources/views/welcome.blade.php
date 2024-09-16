@extends('components.layout')

@section('title', 'Web Development')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    
    <link rel="stylesheet" href="{{ asset('styles/styles_h.css') }}">
@endsection

@section('content')
    <div class="container">
        <img src="{{ asset('assets/img/home/logo.svg') }}" alt="Laravel Logo" class="logo">
        <h1>Web Development</h1>
        <h2>Group Laravel Project</h2>
        <a href="{{ url('/about') }}">
            <button>Explore More</button>
        </a>
    </div>
@endsection
