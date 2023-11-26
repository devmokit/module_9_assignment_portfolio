@extends('layouts.app')
@section('title', 'Home')
@section('content')
@include('components.home.hero')
@include('components.home.about')
@include('components.home.service')
@include('components.home.portfolio')
@include('components.home.contact')

@endsection