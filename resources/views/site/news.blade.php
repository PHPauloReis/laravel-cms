@extends('site.template')
@section('main')
    <!-- Section -->
    <section>
        <header class="major">
            <h2>Notícias</h2>
        </header>
        <div class="posts">
            @foreach($news as $newsItem)
                <article>
                    @if(!empty($newsItem->cover))
                        <a href="{{ route('newsRead', ['news' => $newsItem, 'slug' => $newsItem->slugTitle]) }}" class="image"><img src="{{ $newsItem->cover }}" alt="" /></a>
                    @endif
                    <h3>{{ $newsItem->title }}</h3>
                    <p>{{ $newsItem->subtitle }}</p>
                    <ul class="actions">
                        <li><a href="{{ route('newsRead', ['news' => $newsItem, 'slug' => $newsItem->slugTitle]) }}" class="button">Leia</a></li>
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
