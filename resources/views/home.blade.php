@extends('layout')

@section('title', "Home")

@section('body-title', 'Book List')

@section('body')
<table class="table">
    <thead>
        <tr>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($books as $b)
            <tr>
                <td>
                    <a href="/book/{{$b->id}}" style="color: black; text-decoration: none;">{{ $b->title }}</a>
                </td>
                <td>{{ $b->author }}</td>
            </tr>
        @empty
            
        @endforelse
    </tbody>
</table>
<div class="paginate" style="float: right;">
    {{$books->links()}}
</div>
@endsection