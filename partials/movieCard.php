<?php

declare(strict_types=1);

$movies = [
    '0' => [
        [
            'title' => 'The Shawshank Redemption',
            'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
            'imdb_rating' => 9.3,
            'images' => [
                'https://upload.wikimedia.org/wikipedia/en/8/81/ShawshankRedemptionMoviePoster.jpg'
            ],
            'cast' => ['Tim Robbins', 'Morgan Freeman', 'Bob Gunton'],
            'director' => 'Frank Darabont',
            'genre' => 'Drama'
        ],
        [
            'title' => 'Forrest Gump',
            'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75.',
            'imdb_rating' => 8.8,
            'images' => [
                'https://upload.wikimedia.org/wikipedia/en/6/67/Forrest_Gump_poster.jpg'
            ],
            'cast' => ['Tom Hanks', 'Robin Wright', 'Gary Sinise'],
            'director' => 'Robert Zemeckis',
            'genre' => 'Drama'
        ]
    ],
    '1' => [
        [
            'title' => 'Mad Max: Fury Road',
            'description' => 'In a post-apocalyptic wasteland, Max teams up with Furiosa to flee from a cult leader and his army in an armored tanker truck.',
            'imdb_rating' => 8.1,
            'images' => [
                'https://upload.wikimedia.org/wikipedia/en/6/6e/Mad_Max_Fury_Road.jpg'
            ],
            'cast' => ['Tom Hardy', 'Charlize Theron', 'Nicholas Hoult'],
            'director' => 'George Miller',
            'genre' => 'Action'
        ],
        [
            'title' => 'John Wick',
            'description' => 'An ex-hitman comes out of retirement to track down the gangsters that killed his dog and took everything from him.',
            'imdb_rating' => 7.4,
            'images' => [
                'https://upload.wikimedia.org/wikipedia/en/9/98/John_Wick_TeaserPoster.jpg'
            ],
            'cast' => ['Keanu Reeves', 'Michael Nyqvist', 'Alfie Allen'],
            'director' => 'Chad Stahelski',
            'genre' => 'Action'
        ]
    ],
    '2' => [
        [
            'title' => 'La La Land',
            'description' => 'While navigating their careers in Los Angeles, a pianist and an actress fall in love while attempting to reconcile their aspirations for the future.',
            'imdb_rating' => 8.0,
            'images' => [
                'https://upload.wikimedia.org/wikipedia/en/a/ab/La_La_Land_%28film%29.png'
            ],
            'cast' => ['Ryan Gosling', 'Emma Stone', 'Rosemarie DeWitt'],
            'director' => 'Damien Chazelle',
            'genre' => 'Musical'
        ],
        [
            'title' => 'The Greatest Showman ',
            'description' => 'Celebrates the birth of show business and tells of a visionary who rose from nothing to create a spectacle that became a worldwide sensation.',
            'imdb_rating' => 7.6,
            'images' => [
                'https://m.media-amazon.com/images/M/MV5BMjI1NDYzNzY2Ml5BMl5BanBnXkFtZTgwODQwODczNTM@._V1_FMjpg_UY2048_.jpg'
            ],
            'cast' => ['Hugh Jackman', 'Michelle Williams', 'Zac Efron'],
            'director' => 'Michael Gracey',
            'genre' => 'Musical'
        ]
    ],
    '3' => [
        [
            'title' => 'The Lord of the Rings: The Fellowship of the Ring',
            'description' => 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.',
            'imdb_rating' => 8.8,
            'images' => [
                'https://m.media-amazon.com/images/M/MV5BNzIxMDQ2YTctNDY4MC00ZTRhLTk4ODQtMTVlOWY4NTdiYmMwXkEyXkFqcGc@._V1_FMjpg_UY2936_.jpg'
            ],
            'cast' => ['Elijah Wood', 'Ian McKellen', 'Orlando Bloom'],
            'director' => 'Peter Jackson',
            'genre' => 'Adventure'
        ],
        [
            'title' => 'Pirates of the Caribbean: The Curse of the Black Pearl',
            'description' => 'Blacksmith Will Turner teams up with eccentric pirate Captain Jack Sparrow to save his love, the governor\'s daughter, from Jack\'s former pirate allies, who are now undead.',
            'imdb_rating' => 8.0,
            'images' => [
                'https://m.media-amazon.com/images/M/MV5BYzA3MjczNDItNzczYy00OTdlLTg3YzctYjM4YjFlMTY5N2U2XkEyXkFqcGc@._V1_FMjpg_UY2000_.jpg'
            ],
            'cast' => ['Johnny Depp', 'Geoffrey Rush', 'Orlando Bloom'],
            'director' => 'Gore Verbinski',
            'genre' => 'Adventure'
        ]
    ]
];


$descriptionCharacterLimit = 75;

function slug(string $title): string
{
    return strtolower(str_replace(' ', '-', trim($title)));
}

function description($movie)
{
    global $descriptionCharacterLimit;
    return strlen($movie['description']) > $descriptionCharacterLimit ?
        substr(ucwords($movie['description']), 0, $descriptionCharacterLimit) . '...'
        : ucwords($movie['description']);
}

?>

<div class="col-10">
    <div class="row">
        <?php
        foreach ($movies as $movieList):
            foreach ($movieList as $movie): ?>
                <div class='card m-2 col-3' style='width: 18rem;'>
                    <img src="<?php echo $movie['images'][0] ?>" class='card-img-top' alt="<?php echo $movie['title'] ?>">
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo ucwords($movie['title']) ?></h5>
                        <p class='card-text'><?php echo (description($movie)) ?></p>
                        <a href='details.php?title="<?php echo slug($movie["title"]) ?>' class='btn btn-primary'>Read More</a>
                        <div class='mt-2'>
                            <span class='badge bg-primary'>Genre: <?php echo $movie['genre'] ?></span>
                            <span class='badge bg-warning'><?php echo $movie["imdb_rating"] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach;
        endforeach;
        ?>
    </div>
</div>