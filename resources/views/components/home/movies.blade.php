@php
    $movies = [
      [
        'title' => 'Праздники',
        'poster' => '/images/movies/movie-1.jpg',
        'genres' => ['комедия'],
        'times' => [
          ['time' => '15:35', 'hall' => 'Зал 3', 'price' => '1233 ₸', 'type' => '2D'],
          ['time' => '17:40', 'hall' => 'Зал 6 VIP', 'price' => '3080 ₸', 'type' => '2D'],
          ['time' => '19:15', 'hall' => 'Зал 4', 'price' => '1700 ₸', 'type' => '2D'],
          ['time' => '21:05', 'hall' => 'Зал 3', 'price' => '1700 ₸', 'type' => '2D'],
          ['time' => '21:40', 'hall' => 'Зал 6 VIP', 'price' => '4030 ₸', 'type' => '2D'],
          ['time' => '22:45', 'hall' => 'Зал 3', 'price' => '1700 ₸', 'type' => '2D'],
        ],
        'premiere' => true,
      ],
      [
        'title' => 'Мег 2: Бездна',
        'poster' => '/images/movies/movie-2.jpg',
        'genres' => ['экшен', 'триллер'],
        'times' => [
          ['time' => '15:35', 'hall' => 'Зал 6 VIP', 'price' => '4030 ₸', 'type' => '2D'],
          ['time' => '17:40', 'hall' => 'Зал 2 Auro', 'price' => '3080 ₸', 'type' => '2D'],
          ['time' => '19:15', 'hall' => 'Зал 4', 'price' => '1700 ₸', 'type' => '2D'],
        ],
        'premiere' => false,
      ],
      [
        'title' => 'Заложники',
        'poster' => '/images/movies/movie-3.jpg',
        'genres' => ['экшен', 'триллер'],
        'times' => [
          ['time' => '16:10', 'hall' => 'Зал 1', 'price' => '4030 ₸', 'type' => '2D'],
          ['time' => '21:30', 'hall' => 'Зал 1', 'price' => '3080 ₸', 'type' => '2D'],
        ],
        'premiere' => false,
      ],
      [
        'title' => 'Леди Баг и Супер-Кот: Пробуждение силы',
        'poster' => '/images/movies/movie-4.jpg',
        'genres' => ['фентези', 'боевик', 'мелодрама', 'мультфильм', 'комедия'],
        'times' => [
          ['time' => '16:10', 'hall' => 'Зал 1', 'price' => '4030 ₸', 'type' => '2D'],
          ['time' => '21:30', 'hall' => 'Зал 1', 'price' => '3080 ₸', 'type' => '2D'],
        ],
        'premiere' => false,
      ],
      [
        'title' => 'Когда не загрузилась афиша',
        'poster' => null,
        'genres' => ['комедия'],
        'times' => [
          ['time' => '15:35', 'hall' => 'Зал 3', 'price' => '1233 ₸', 'type' => '2D'],
          ['time' => '17:40', 'hall' => 'Зал 6 VIP', 'price' => '3080 ₸', 'type' => '2D'],
        ],
        'premiere' => true,
      ],
      [
        'title' => 'Руслан и Людмила. Больше, чем сказка',
        'poster' => '/images/movies/movie-5.jpg',
        'genres' => ['анимационое приключение'],
        'times' => [],
        'premiere' => true,
      ],
    ];
@endphp

<section class="movies">
    <div class="container">
        <div class="movies__inner">
            @foreach ($movies as $movie)
                <x-home.movie :$movie />
            @endforeach
        </div>
    </div>
</section>
