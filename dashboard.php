<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Speeden Garage</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      font-family: 'Inter', sans-serif;
      height: 100%;
    }

    .hero {
      background-image: url(garage.jpeg); 
      background-size: cover;
      background-position: center;
      height: 100vh;
      position: relative;
      color: white;
    }

    .overlay {
      background-color: rgba(0, 0, 0, 0.5);
      height: 100%;
      width: 100%;
    }

    .container {
      padding: 50px;
      max-width: 1200px;
      margin: auto;
      position: relative;
      top: 20%;
    }

    .logo {
      height: 100px;
      margin-bottom: 30px;
    }

    .hero-text h1 {
      font-size: 48px;
      font-weight: 800;
      margin-bottom: 20px;
    }

    .hero-text .tagline {
      font-size: 16px;
      opacity: 0.8;
    }

    .hero-text .desc {
      font-size: 14px;
      margin-bottom: 30px;
      opacity: 0.9;
    }

    .buttons {
      display: flex;
      gap: 15px;
    }

    .btn {
      padding: 12px 25px;
      text-decoration: none;
      font-weight: 700;
      border-radius: 5px;
      transition: background 0.3s ease;
    }

    .btn.red {
      background-color: #e63946;
      color: white;
    }

    .btn.red:hover {
      background-color: #d62828;
    }

    .btn.white {
      border: 2px solid white;
      color: white;
    }

    .btn.white:hover {
      background-color: white;
      color: #333;
    }
  </style>
</head>
<body>
  <header class="hero">
    <div class="overlay">
      <div class="container">
        <img src="logo.png" alt="Speedfix Garage" class="logo">
        <div class="hero-text">
          <p class="tagline">Quality</p>
          <h1>Specialized, efficient, and thorough car services</h1>
          <p class="desc">We provide performing car repair using the least amount of time, energy, and money.</p>
          <div class="buttons">
            <a href="#" class="btn red">Get Start Now</a>
            <a href="#" class="btn white">View all Services</a>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>
</html>