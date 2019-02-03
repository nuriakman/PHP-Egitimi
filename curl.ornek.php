<?php


//$ch = curl_init('https://kur.doviz.com/serbest-piyasa/amerikan-dolari');
$ch = curl_init('https://www.doviz.com');
curl_setopt_array($ch, [
  CURLOPT_RETURNTRANSFER => true
]);

$source = curl_exec($ch);
curl_close($ch);


  // preg_match_all('/<span class="name">(.*)<\/span>/' , $source ,$title );
 //preg_match_all('/<span class="name">(.*)<\/span>/' , $source ,$title );
  //preg_match_all('/<span class="value">(.*)<\/span>/' , $source ,$title2);
  preg_match_all('/<span class="menu-row1">(.*)<\/span>/' , $source ,$title1);
  preg_match_all('/<span class="menu-row2">(.*)<\/span>/' , $source ,$title2);
  preg_match_all('/<span class="menu-row3">(.*)<\/span>/' , $source ,$title3);
  unset($title1[0]);
  unset($title2[0]);
  unset($title3[0]);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">

        <table class="table">
          <thead>
            <tr>
              <?php foreach ($title1[1] as $key => $value): ?>
                <th scope="col"><?=$value?></th>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php foreach ($title2[1] as $key => $value): ?>
                <td><?=$value?></td>
              <?php endforeach; ?>
            </tr>
            <tr>
              <?php foreach ($title3[1] as $key => $value): ?>
                <td><?=$value?></td>
              <?php endforeach; ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
