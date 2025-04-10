<?php

$categoryArray = [
    "Drama",
    "Action",
    "Musical",
    "Adventure"
];

$movies = [
    'Drama' => [
        [
            'title' => 'The Shawshank Redemption',
            'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
            'imdb_rating' => 9.3,
            'images' => [
                'https://upload.wikimedia.org/wikipedia/en/8/81/ShawshankRedemptionMoviePoster.jpg'
            ],
            'cast' => ['Tim Robbins', 'Morgan Freeman', 'Bob Gunton'],
            'director' => 'Frank Darabont'
        ],
        [
            'title' => 'Forrest Gump',
            'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75.',
            'imdb_rating' => 8.8,
            'images' => [
                'https://upload.wikimedia.org/wikipedia/en/6/67/Forrest_Gump_poster.jpg'
            ],
            'cast' => ['Tom Hanks', 'Robin Wright', 'Gary Sinise'],
            'director' => 'Robert Zemeckis'
        ]
    ],
    'Action' => [
        [
            'title' => 'Mad Max: Fury Road',
            'description' => 'In a post-apocalyptic wasteland, Max teams up with Furiosa to flee from a cult leader and his army in an armored tanker truck.',
            'imdb_rating' => 8.1,
            'images' => [
                'https://upload.wikimedia.org/wikipedia/en/6/6e/Mad_Max_Fury_Road.jpg'
            ],
            'cast' => ['Tom Hardy', 'Charlize Theron', 'Nicholas Hoult'],
            'director' => 'George Miller'
        ],
        [
            'title' => 'John Wick',
            'description' => 'An ex-hitman comes out of retirement to track down the gangsters that killed his dog and took everything from him.',
            'imdb_rating' => 7.4,
            'images' => [
                'https://upload.wikimedia.org/wikipedia/en/9/98/John_Wick_TeaserPoster.jpg'
            ],
            'cast' => ['Keanu Reeves', 'Michael Nyqvist', 'Alfie Allen'],
            'director' => 'Chad Stahelski'
        ]
    ],
    'Musical' => [
        [
            'title' => 'La La Land',
            'description' => 'While navigating their careers in Los Angeles, a pianist and an actress fall in love while attempting to reconcile their aspirations for the future.',
            'imdb_rating' => 8.0,
            'images' => [
                'https://upload.wikimedia.org/wikipedia/en/a/ab/La_La_Land_%28film%29.png'
            ],
            'cast' => ['Ryan Gosling', 'Emma Stone', 'Rosemarie DeWitt'],
            'director' => 'Damien Chazelle'
        ],
        [
            'title' => 'The Greatest Showman ',
            'description' => 'Celebrates the birth of show business and tells of a visionary who rose from nothing to create a spectacle that became a worldwide sensation.',
            'imdb_rating' => 7.6,
            'images' => [
                'https://m.media-amazon.com/images/M/MV5BMjI1NDYzNzY2Ml5BMl5BanBnXkFtZTgwODQwODczNTM@._V1_FMjpg_UY2048_.jpg'
            ],
            'cast' => ['Hugh Jackman', 'Michelle Williams', 'Zac Efron'],
            'director' => 'Michael Gracey'
        ]
    ],
    'Adventure' => [
        [
            'title' => 'The Lord of the Rings: The Fellowship of the Ring',
            'description' => 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.',
            'imdb_rating' => 8.8,
            'images' => [
                'https://m.media-amazon.com/images/M/MV5BNzIxMDQ2YTctNDY4MC00ZTRhLTk4ODQtMTVlOWY4NTdiYmMwXkEyXkFqcGc@._V1_FMjpg_UY2936_.jpg'
            ],
            'cast' => ['Elijah Wood', 'Ian McKellen', 'Orlando Bloom'],
            'director' => 'Peter Jackson'
        ],
        [
            'title' => 'Pirates of the Caribbean: The Curse of the Black Pearl',
            'description' => 'Blacksmith Will Turner teams up with eccentric pirate Captain Jack Sparrow to save his love, the governor\'s daughter, from Jack\'s former pirate allies, who are now undead.',
            'imdb_rating' => 8.0,
            'images' => [
                'https://m.media-amazon.com/images/M/MV5BYzA3MjczNDItNzczYy00OTdlLTg3YzctYjM4YjFlMTY5N2U2XkEyXkFqcGc@._V1_FMjpg_UY2000_.jpg'
            ],
            'cast' => ['Johnny Depp', 'Geoffrey Rush', 'Orlando Bloom'],
            'director' => 'Gore Verbinski'
        ]
    ]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Blog App</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="categories my-2">
                        <ul class="list-group">
                            <?php
                            for ($i = 0; $i < count($categoryArray); $i++) {
                                echo "<li class='list-group-item'>$categoryArray[$i]</li>";
                            }

                            ?>

                        </ul>
                    </div>
                </div>
                <div class="col-10">
                    <div class="row">
                        <?php
                        foreach ($movies as $category => $movieList) {
                            foreach ($movieList as $movie) {
                                echo "<div class='card m-2 col-3' style='width: 18rem;'>
                                <img src=" . $movie['images'][0] . " class='card-img-top' alt='{$movie['title']}'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$movie['title']}</h5>
                                    <p class='card-text'>" . substr(ucwords($movie['description']), 0, 50) . "...</p>
                                    <a href='#' class='btn btn-primary'>More</a>
                                    <div class='mt-2'>
                                        <span class='badge bg-primary'>100 likes</span>
                                        <span class='badge bg-primary'> 0 comments</span>
                                        <span class='badge bg-secondary'>1 share</span>
                                    </div>
                                </div>
                            </div>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>