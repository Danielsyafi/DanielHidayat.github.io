<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Kiokuツ</title>
  <link rel="stylesheet" href="/cssGame/style.css">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
</head>

<body>
    <!-- Tambahkan elemen div untuk menampilkan achievement -->
  <div id="achievement" class="achievement">
    <span id="achievement-text"></span>
  </div>
  
  <div class="container">
    <!-- ... -->
  </div>

  <section class="image" id="image">
    <div class="Star1">
        <img src="/img/Star1.gif" alt="">
    </div>
    <div class="Star2">
        <img src="/img/Star2.gif" alt="">
    </div>
</section>
  
  <h1 id="level-title">Press A Key to Start</h1>
  <div class="container">
    <div lass="row">

      <div type="button" id="green" class="btn green">

      </div>

      <div type="button" id="red" class="btn red">

      </div>
    </div>

    <div class="row">

      <div type="button" id="yellow" class="btn yellow">

      </div>
      <div type="button" id="blue" class="btn blue">

      </div>

    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="/jsGame/game.js" charset="utf-8"></script>

</body>

</html>
