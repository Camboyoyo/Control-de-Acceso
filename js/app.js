//capturar video ó imagen
 var localstream, canvas, video, cxt, canvas2;
canvas = document.getElementById("canvas");
canvas2 = document.getElementById("canvas2");
cxt = canvas.getContext("2d");
cxt2 = canvas2.getContext("2d");
video = document.getElementById("video");
let videoOptions = {
    video: {
      frameRate: {
        ideal: 80,
        max: 100,
      },
    },
  };

function getVideo() {
    if(!navigator.getUserMedia){
        navigator.getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
    }
    if(!window.URL){
        window.URL = window.webkitURL;
    }
    if (navigator.getUserMedia) {
        navigator.getUserMedia({"video" : videoOptions, "audio": false
        }, function(stream) {
            document.getElementById("foto").style.display = "block";
            try {
                localstream = stream;
                video.srcObject = stream;
                video.play();
                video.style.transform = "scaleX(-1)";
            } catch (error) {
                video.srcObject = null;
            }
        }, function(err){
            let mensaje = ("Permiso de la Cámara no Concedido");
            document.getElementById("texto").innerText = mensaje;
            document.getElementById("texto").style.textAlign = "center";
            document.getElementById("alert").style.display = "block";
        });
    } else {
        let mensaje = ("No se ha Encontrado una Cámara");
        document.getElementById("texto").innerText = mensaje;
        document.getElementById("texto").style.textAlign = "center";
        document.getElementById("alert").style.display = "block";
        return;
    }
}

function turnOffCamera() {
  video.pause();
  video.srcObject = null;
  localstream.getTracks()[0].stop();
}

//4.------------>Llamada a la función get
function foto_cerrar(){
  document.getElementById("foto").style.display = "none";
  turnOffCamera()
}

//4. ----------> Button y foto
function foto() {
  cxt.drawImage(video, 0, 0, canvas.width, canvas.height);
  cxt2.drawImage(video, 0, 0, canvas.width, canvas.height);
  canvas.style.transform = "scaleX(-1)";
  canvas2.style.transform = "scaleX(-1)";
  let data = canvas.toDataURL("image/png");
  document.querySelector(".photo").setAttribute("src", data);
}