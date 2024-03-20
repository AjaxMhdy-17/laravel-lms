<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Waiting Room</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Your custom CSS styles here */
    .waiting-room-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 2rem;
      text-align: center;
    }
    .waiting-room-header {
      font-size: 2.5rem;
      color: #2c3e50;
      margin-bottom: 2rem;
    }
    .waiting-room-content {
      background-color: #fff;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    .redirecting-message {
      display: none;
      color: #e74c3c;
      font-size: 1.2rem;
      margin-top: 1rem;
    }
    .illustration {
      max-width: 100%;
      height: auto;
      margin-bottom: 2rem;
    }
  </style>
  <script>
    // JavaScript code remains unchanged
  </script>
</head>
<body onload="startPolling()">
  <div class="container waiting-room-container">
    <div class="waiting-room-content">
      <img src="https://i.pinimg.com/originals/f7/74/18/f77418b9aad5a18165b0e54c1691035f.jpg" alt="Illustration" class="illustration">
      <h1 class="waiting-room-header">Welcome to the Waiting Room</h1>
      <p>
        Thank you for your patience. Your account is <b style="color: #e74c3c">Inactive</b>. We are working hard to get you in as soon as possible.
        Please wait while we prepare everything for you.
      </p>
      <div class="details">
        <p>
          Estimated wait time: <span id="avg-wait-time"> 1 Day </span>
        </p>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
