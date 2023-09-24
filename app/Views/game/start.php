<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiokuツ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@800&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="/cssGame/Main.css">
   
</head>

<body>
    <section class="background">

    <section class="image" id="image">
        <div class="Star1">
            <img src="/img/Star1.gif" alt="">
        </div>
        <div class="Star2">
            <img src="/img/Star2.gif" alt="">
        </div>
    </section>

    <section class="about" id="about">
        
        <div class="row">
            <div class="content">
                <h3>Kiokuツ</h3>
                <h4>HIGHEST LEVEL 1</h4>
                <div class="startBtn">
                   <a href="/Game/index1" button id="start">START</button></a>
                </div>
                <div class="startBtn">
                   <img src="/img/play.png" alt="" onclick="toggleAudio()">
                   
                   <input type="range" min="0" max="1" step="0.1" value="1" oninput="setVolume(this.value)" class="volume hide">

                  
</div>
            </div>
        </div>
    </section>
    </section>

    <audio loop src="/sounds/bgmusic.mp3" id="myAudio"></audio>

    <script>
        var audio = document.getElementById("myAudio");

        function toggleAudio() {
            if (audio.paused) {
                audio.play();
                document.querySelector('.volume').classList.remove('hide');
            } else {
                audio.pause();
                document.querySelector('.volume').classList.add('hide');
            }
        }

        function pauseAudio() {
            audio.pause();
            document.querySelector('.volume').classList.add('hide');
        }

        function setVolume(volume) {
            audio.volume = volume;
        }
    </script>
    
    
</body>
</html>
