@extends('base')
@section('title', 'Critères de garde')
@section('content')
    @include('shared.header')
    @livewire('custody-criteria-form')
    @include('shared.footer')
@endsection
