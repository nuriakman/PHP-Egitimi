# PHP Örnek Çalışmaları

## JSON Formatında Veri Üreten omdbapi.com Siteden Veri Çekme

```PHP
<?php

  $url="http://www.omdbapi.com/?t=the+game&y=1997&apikey=fc5c1afa";

  $json = file_get_contents($url);

  $Film = json_decode($json, true);

  echo "<p><img src='{$Film["Poster"]}'></p>";
  echo "<h1>{$Film["Title"]}</h1>";
  echo "<p><b>Film Adı  :</b> {$Film["Title"]}</p>";
  echo "<p><b>Yapım Yılı:</b> {$Film["Year"]}</p>";
  echo "<p><b>Oyuncular :</b> {$Film["Actors"]}</p>";

  // Yöntem 1:
  echo "<p><b>Puanlama (Yöntem 1) :</b><br>";
  echo "{$Film["Ratings"][0]["Source"]} : {$Film["Ratings"][0]["Value"]}<br>";
  echo "{$Film["Ratings"][1]["Source"]} : {$Film["Ratings"][1]["Value"]}<br>";
  echo "{$Film["Ratings"][2]["Source"]} : {$Film["Ratings"][2]["Value"]}<br>";

  // Yöntem 2:
  echo "<p><b>Puanlama (Yöntem 2) :</b><br>";
  foreach ($Film["Ratings"] as $key => $value) {
    echo "{$value["Source"]} : {$value["Value"]}<br>";
  }

  echo "<h1>Tüm Bilgiler</h1>";
  foreach ($Film as $key => $value) {
    if(!is_array($value)) echo "<b>{$key}</b> : {$value}<br>";
  }
```

## print_r($Film); Komutunun ekran çıktısı:

```
Array
(
    [Title] => The Game
    [Year] => 1997
    [Rated] => R
    [Released] => 12 Sep 1997
    [Runtime] => 129 min
    [Genre] => Drama, Mystery, Thriller
    [Director] => David Fincher
    [Writer] => John Brancato, Michael Ferris
    [Actors] => Michael Douglas, Sean Penn, Deborah Kara Unger, James Rebhorn
    [Plot] => After a wealthy banker is given an opportunity to participate in a mysterious game, his life is turned upside down when he becomes unable to distinguish between the game and reality.
    [Language] => English, Cantonese, German
    [Country] => USA
    [Awards] => 1 nomination.
    [Poster] => https://m.media-amazon.com/images/M/MV5BZGVmMDNmYmEtNGQ2Mi00Y2ZhLThhZTYtYjE5YmQzMjZiZGMxXkEyXkFqcGdeQXVyNDk3NzU2MTQ@._V1_SX300.jpg
    [Ratings] => Array
        (
            [0] => Array
                (
                    [Source] => Internet Movie Database
                    [Value] => 7.8/10
                )

            [1] => Array
                (
                    [Source] => Rotten Tomatoes
                    [Value] => 73%
                )

            [2] => Array
                (
                    [Source] => Metacritic
                    [Value] => 61/100
                )

        )

    [Metascore] => 61
    [imdbRating] => 7.8
    [imdbVotes] => 308,573
    [imdbID] => tt0119174
    [Type] => movie
    [DVD] => 06 Jun 2000
    [BoxOffice] => N/A
    [Production] => Universal Pictures
    [Website] => N/A
    [Response] => True
)
```
