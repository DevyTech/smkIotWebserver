

  const video = document.getElementById('cameraStream');
  const captureBtn = document.getElementById('captureBtn');
  const capturedImage = document.getElementById('capturedImage');

  // Access the camera and stream it to the video element
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => {
      video.srcObject = stream;
    })
    .catch(error => {
      console.error('Error accessing the camera:', error);
    });

  // Capture the image from the video stream
  captureBtn.addEventListener('click', () => {
    const canvas = document.createElement('canvas');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
    const imageDataUrl = canvas.toDataURL('image/png');

    capturedImage.src = imageDataUrl;
    capturedImage.style.display = 'block';
  });