<div class="movie">
    <a href="#" class="movie__img">
        @if ($movie['poster'])
            <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}">
        @else
            <x-icon name="no-img"/>
        @endif

        @if ($movie['premiere'])
            <span class="movie__premiere">Премьера</span>
        @endif
    </a>
    <h3 class="movie__title">
        <a href="#">{{ $movie['title'] }}</a>
    </h3>

    @if ($movie['genres'])
        <ul class="movie__genres">
            @foreach ($movie['genres'] as $genre)
                <li>{{ $genre }}</li>
            @endforeach
        </ul>
    @endif

    @if ($movie['times'])
        <div class="movie-times">
            @foreach ($movie['times'] as $time)
                <div class="movie-times__item">
                    <div class="movie-times__item-inner">
                        <div class="movie-times__time">{{ $time['time'] }}</div>
                        <div class="movie-times__add-info">
                            <div class="movie-times__type">{{ $time['type'] }}</div>
                            <div class="movie-times__price">{{ $time['price'] }}</div>
                        </div>
                    </div>

                    <div class="movie-times__hall">{{ $time['hall'] }}</div>
                </div>
            @endforeach
        </div>
    @else
        <x-button href="#" class="movie__sessions-tomorrow">Сеансы на Завтра</x-button>
    @endif
</div>
