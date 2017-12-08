@extends('layout')
@section('title')
  RCI Links
@endsection
@section('customCSS')
    <link rel="stylesheet" href="{{ asset('css/links.css') }}">
@endsection
@section('contents')
  @include('alerts.display')
  @include('links.display')
@endsection
