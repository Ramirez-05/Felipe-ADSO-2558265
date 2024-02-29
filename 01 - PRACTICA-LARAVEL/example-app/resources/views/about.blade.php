@extends('layouts.landing')

@section('title', 'About')

@section('content')
    <h1>About</h1>
    @component('_components.card')
        @slot('title', 'Service1')
        @slot('content', 'This is the content for service 1')     
    @endcomponent

    @component('_components.card')
        @slot('title', 'Service2')
        @slot('content', 'This is the content for service 2')     
    @endcomponent
@endsection