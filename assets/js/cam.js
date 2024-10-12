var ip_cam = "http://camera.local:81/stream"; // Mengarahkan ke stream ESP32
var streaming = false
$("#streamBtn").click(function () {
  if (streaming) {
    // Jika streaming sedang aktif, stop stream dengan mengosongkan 'src' video
    $("#cameraStream").attr("src","../assets/img/camera-video-off.svg");
    $("#streamBtn").text("Start Stream"); // Ubah teks tombol menjadi 'Start'
    streaming = false; // Set flag menjadi false
  } else {
    // Jika streaming belum aktif, mulai stream
    $("#cameraStream").attr("src", ip_cam);
    $("#streamBtn").text("Stop Stream"); // Ubah teks tombol menjadi 'Stop'
    streaming = true; // Set flag menjadi true
  }
});

  // const video = document.getElementById('cameraStream');
  // const captureBtn = document.getElementById('captureBtn');
  // const capturedImage = document.getElementById('capturedImage');

  // // Access the camera and stream it to the video element
  // navigator.mediaDevices.getUserMedia({ video: true })
  //   .then(stream => {
  //     video.srcObject = stream;
  //   })
  //   .catch(error => {
  //     console.error('Error accessing the camera:', error);
  //   });

  // // Capture the image from the video stream
  // captureBtn.addEventListener('click', () => {
  //   const canvas = document.createElement('canvas');
  //   canvas.width = video.videoWidth;
  //   canvas.height = video.videoHeight;
  //   canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
  //   const imageDataUrl = canvas.toDataURL('image/png');

  //   capturedImage.src = imageDataUrl;
  //   capturedImage.style.display = 'block';
  // });
