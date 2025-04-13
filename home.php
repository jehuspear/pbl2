<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pet Camera Monitor</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <header>
    <div class="header-content container">
      <div class="logo">
        <i class="fas fa-paw fa-2x" style="color: var(--primary-gold);"></i>
        <h1>PetCam Monitor</h1>
      </div>
      <div id="current-time" style="color: var(--secondary-gold); font-weight: bold;"></div>
    </div>
  </header>

  <div class="container">
    <div class="dashboard-title">
      <h2>Pet Monitoring Dashboard</h2>
      <p>Keep an eye on your furry friends from anywhere</p>
    </div>

    <div class="camera-container">
      <div class="camera-header">
        <h3><i class="fas fa-video"></i> Live Pet Camera</h3>
      </div>
      
      <div class="iframe-container">
        <!-- Replace the src URL with the actual IP address and port of your ESP32-CAM stream -->
        <img src="http://192.168.1.13/mjpeg/1" alt="Camera Stream">
        <div class="pet-decoration top-left"><i class="fas fa-dog fa-2x" style="color: var(--primary-blue);"></i></div>
        <div class="pet-decoration top-right"><i class="fas fa-cat fa-2x" style="color: var(--primary-blue);"></i></div>
        <div class="pet-decoration bottom-left"><i class="fas fa-paw fa-2x" style="color: var(--primary-gold);"></i></div>
        <div class="pet-decoration bottom-right"><i class="fas fa-bone fa-2x" style="color: var(--primary-gold);"></i></div>
      </div>
      
      <div class="camera-footer">
        <div class="camera-status">
          <div class="status-indicator"></div>
          <span>Camera Online</span>
        </div>
        <div class="camera-timestamp" id="stream-timestamp">Last updated: <span id="timestamp"></span></div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <p>&copy; 2025 PetCam Monitor | Blue & Gold Pet Theme</p>
    </div>
  </footer>

  <script>
    // Update current time
    function updateTime() {
      const now = new Date();
      document.getElementById('current-time').textContent = now.toLocaleTimeString();
      document.getElementById('timestamp').textContent = now.toLocaleString();
    }
    
    // Update time every second
    updateTime();
    setInterval(updateTime, 1000);
  </script>
</body>
</html>
