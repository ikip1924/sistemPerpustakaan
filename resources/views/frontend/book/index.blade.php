@extends('frontend.templates.default')


@section('content')
<h2>Koleksi Buku</h2>
<blockquote>
    <p class="flow-text">Koleksi buku yang bisa kamu baca & pinjam</p>
</blockquote>
<div class="row">
@foreach ($books as $book)

@include('frontend.templates.components.card-book', ['book'=>$book])

@endforeach
</div>
{{-- pagination --}}

    {{$books->links('vendor.pagination.matearilize') }}


@endsection