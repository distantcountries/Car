
@extends('layout.master')

@section('title')
    About Us
@endsection

@section('content')
<h1>Cars</h1>
<ul>
    @foreach ($cars as $car)
        <li>
        <a href="cars/{{ $car->id}}">{{ $car->title }} </a>
        </li>
    @endforeach
</ul>
@endsection

