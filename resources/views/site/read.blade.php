@extends('site.template')
@section('main')
    <!-- Content -->
    <section>
        <header class="main">
            <h1>{{ $news->title }}</h1>
        </header>

        @if(!empty($news->cover))
            <span class="image main"><img src="{{ $news->cover }}" alt="" /></span>
        @endif

        {{ $news->text }}

    </section>
@endsection
