@extends('layout')

@section('title')
    Book Detail - {{ $book->title }}
@endsection

@section('body-title', 'Book Detail')

@section('body')
    <p>Title : {{ $book->title }}</p>
    <p>Author : {{ $book->author }}</p>
    <p>Publisher : {{ $book->publisher }}</p>
    <p>Year : {{ $book->year }}</p>
    <p>Description :</p>
    <p>{{ $book->description }}</p>
@endsection