var buttonColours = ["red", "blue", "green", "yellow"];

var gamePattern = [];
var userClickedPattern = [];

var started = false;
var level = 0;

var achievements = [
  { level: 5, message: "You've reached level 5!" },
  { level: 10, message: "Congratulations! Level 10 achieved!" },
  // Tambahkan achievement lainnya sesuai keinginan
];

$(document).keypress(function() {
  if (!started) {
    $("#level-title").text("Level " + level);
    nextSequence();
    started = true;
    playBackgroundMusic(); // Memanggil fungsi untuk memutar musik latar belakang
  }
});

$(".btn").click(function() {
  if (started) {
    var userChosenColour = $(this).attr("id");
    userClickedPattern.push(userChosenColour);

    playSound(userChosenColour);
    animatePress(userChosenColour);

    checkAnswer(userClickedPattern.length-1);
  }
});

function checkAnswer(currentLevel) {
  if (gamePattern[currentLevel] === userClickedPattern[currentLevel]) {
    if (userClickedPattern.length === gamePattern.length) {
      setTimeout(function () {
        nextSequence();
      }, 1000);
    }
  } else {
    playSound("wrong");
    $("body").addClass("game-over");
    window.location.replace("/Game/index2");

    $(document).off("keypress");
    $(document).on("keypress", "#restart", function() {
      restartGame();
    });
  }
  
  checkAchievement(level); // Periksa achievement setiap kali pemain menjawab
}

function nextSequence() {
  userClickedPattern = [];
  level++;
  $("#level-title").text("Level " + level);
  var randomNumber = Math.floor(Math.random() * 4);
  var randomChosenColour = buttonColours[randomNumber];
  gamePattern.push(randomChosenColour);

  $("#" + randomChosenColour).fadeIn(100).fadeOut(100).fadeIn(100);
  playSound(randomChosenColour);
}

function animatePress(currentColor) {
  $("#" + currentColor).addClass("pressed");
  setTimeout(function () {
    $("#" + currentColor).removeClass("pressed");
  }, 100);
}

function playSound(name) {
  var audio = new Audio("/sounds/" + name + ".mp3");
  audio.play();
}

function checkAchievement(level) {
  for (var i = 0; i < achievements.length; i++) {
    if (level === achievements[i].level) {
      showAchievement(achievements[i].message);
      break;
    }
  }
}

function showAchievement(message) {
  // Tampilkan pesan achievement di console atau sesuai dengan kebutuhan Anda
  console.log(message);
}

function restartGame() {
  level = 0;
  gamePattern = [];
  started = false;
  $("#level-title").text("Press Any Key to Start");
  $(".startBtn").html('<button id="start">START</button>');

  $(document).off("keypress");
  $(document).on("keypress", function() {
    if (!started) {
      $("#level-title").text("Level " + level);
      nextSequence();
      started = true;
       // Memanggil fungsi untuk memutar musik latar belakang
    }
  });
}
