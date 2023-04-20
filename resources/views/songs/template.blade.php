<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--css link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--css link Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="{{ asset('logos/LogoSinNombre.png') }}" type="image/x-icon">

    <title>Playlist</title>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const url = window.location.href;
        const lastParam = url.split("/").pop();
        const heading = document.getElementById("nombre");
        heading.textContent = lastParam;
        document.body.appendChild(heading);
        const contentDiv = document.querySelector("#content");
        contentDiv.appendChild(heading);
      });

    </script>
</head>
<body>

  <div class="contenedor">
      @include('templates/navbar')

      <div class="tabla">
        <h1 id="nombre"></h1>
        <table style="width:100%" border="1">
            <tr id="header""><th id="covertbl">Album</th><th>Cancion</th><th>Autor</th></tr>
            @foreach ($songs as $song)
            <tr onclick=<?php echo "showData('".$song->id."')"?> >
             <td><img id="imgtbl" src=" <?php echo "http://localhost:80/paw233/proyect_web/storage/app/public/".$song->foto ?>" ></td> 
            <!--<td id="covertbl"><img id="imgtbl" src=" <?php echo "http://localhost:80/proyecto_web/storage/app/public/".$song->foto ?>" ></td>-->
            <td>{{$song->nombre}}</td>
            <td>{{$song->autor}}</td>
            <td><form action="./delete{{$song->l_list}}/{{$song->id}}" method="POST">
              @csrf
              @method('DELETE')
              <td><button type="submit" id="liketbl"><span id="liketbl" class="bi bi-trash-fill"></button></td>
            </form></td>
        </tr>
        @endforeach
        </table>
      </div>
    </div>
</body>

<footer>

  @include('templates/player')


<!--
<div id ="content"><h1 id="nombre"></h1></div>
    <table style="width:100%" border="1">
        <tr style="background-color: #CCC;"><th>Album</th><th>Cancion</th><th>Autor</th><th>Acciones</th></tr>
        @foreach ($songs as $song)
        <tr onclick=<?php //echo "showData('".$song->id."')"?> >
            <td><img src=" <?php //echo "http://localhost:8080/paw233/proyect_web/storage/app/public/".$song->foto ?>" ></td>
            <td>{{$song->nombre}}</td>
            <td>{{$song->autor}}</td>
            <td><form action="./delete{{$song->l_list}}/{{$song->id}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit">Delete</button>
            </form></td>
        </tr>
        @endforeach
    </table>
      


</body>
<footer>
    <input type="hidden" id="id">
    <h3 id="cancion"></h3>
    <h5 id="autor"></h5>
    <button onclick="playSound()">Play</button>
    <button onclick="pauseSound()">Pause</button>
    <label for="volume">Volume:</label>
    <input type="range" id="volume" min="0" max="1" step="0.01" value="0.5" oninput="setVolume()">
        <audio id="reprod" src="" type="audio/mpeg"></audio>
    <div>
    <label for="loop-checkbox">Loop Audio</label>
    <input type="checkbox" id="loop-checkbox" />
    <label for="shuffle-checkbox">Shuffle Audio</label>
    <input type="checkbox" id="shuffle-checkbox" />
    <button onclick="nextSong()">Next</button>
    <button onclick="beforeSong()">Before</button>
    <span id="current-time">0:00</span>
    <input type="range" id="seek-bar" min="0" max="100" value="0" step="0.1">
    <span id="duration">0:00</span>
    </div>
</footer>

</html>
<script>
let isShuffle = false;
const audio = document.getElementById("reprod");
const loopCheckbox = document.getElementById("loop-checkbox");
const shuffleCheckbox = document.getElementById("shuffle-checkbox");
loopCheckbox.addEventListener("change", () => {
  audio.loop = loopCheckbox.checked;
});
shuffleCheckbox.addEventListener("change", () => {
  isShuffle = shuffleCheckbox.checked;
});
var songs = "{{$songs}}";
var decodedArrayAsString = songs.replace(/&quot;/g, '"');
var array = JSON.parse(decodedArrayAsString);
var idArray = array.map(obj => obj.id);
var volumeControl = document.getElementById("volume");

function showData(id_s) {
    var songs = "{{$songs}}";
    const decodedArrayAsString = songs.replace(/&quot;/g, '"');
    const array = JSON.parse(decodedArrayAsString);
    const idToFind = parseInt(id_s);
    const subarray = array.find(obj => obj.id === idToFind);
    song = subarray.archivo_au;
    file = document.getElementById("reprod");
    file.src = "http://localhost:8080/paw233/proyect_web/storage/app/public/"+song;
    song = document.getElementById("cancion");
    song.innerText = subarray.nombre;
    autor = document.getElementById("autor");
    autor.innerText = subarray.autor;
    id = document.getElementById("id");
    id.value = subarray.id;
    playSound();
}

  audio.addEventListener("ended", () => {
  if (isShuffle) {
    var id_play = document.getElementById("id");
    id_look = id_play.value;
    var position = idArray.indexOf(parseInt(id_look));
    position = Math.floor(Math.random() * array.length);
    showData(idArray[position]);
  } else {
    nextSong();
    }
  });

function playSound() {
    var audio = document.getElementById("reprod");
    audio.play();
}
function pauseSound() {
    var audio = document.getElementById("reprod");
    audio.pause();
}
function setVolume() {
    var audio = document.getElementById("reprod");
    audio.volume = volumeControl.value;
}
function nextSong(){
    var id_play = document.getElementById("id");
    id_look = id_play.value;
    var position = idArray.indexOf(parseInt(id_look));
    if (isShuffle) {
        position = Math.floor(Math.random() * array.length);
    } else {
        position = (position + 1) % array.length;
    }
    showData(idArray[position]);
}
function beforeSong(){
    var id_play = document.getElementById("id");
    id_look = id_play.value;
    var position = idArray.indexOf(parseInt(id_look));
    if (isShuffle) {
        position = Math.floor(Math.random() * array.length);
    } else {
        position = (position - 1 + array.length) % array.length;
    }
    showData(idArray[position]);
}

let audioSrc = "";

const audioPlayer = document.getElementById("reprod");
const seekBar = document.getElementById("seek-bar");
const currentTime = document.getElementById("current-time");
const duration = document.getElementById("duration");

function loadAudio() {
  audioPlayer.src = audioSrc;
  audioPlayer.load();
  duration.textContent = formatTime(audioPlayer.duration);
}

seekBar.addEventListener("input", function() {
  audioPlayer.currentTime = (seekBar.value / 100) * audioPlayer.duration;
});

audioPlayer.addEventListener("timeupdate", function() {
  seekBar.value = (audioPlayer.currentTime / audioPlayer.duration) * 100;
  currentTime.textContent = formatTime(audioPlayer.currentTime);
});

audioPlayer.addEventListener("loadedmetadata", function() {
  duration.textContent = formatTime(audioPlayer.duration);
});

function formatTime(time) {
  const minutes = Math.floor(time / 60);
  const seconds = Math.floor(time % 60);
  return `${minutes}:${seconds.toString().padStart(2, "0")}`;
}

function changeAudioSrc(newSrc) {
    audioPlayer.src = audioSrc;
    if(audioSrc != newSrc){
        audioSrc = newSrc;
        loadAudio();
    }
}

</script>