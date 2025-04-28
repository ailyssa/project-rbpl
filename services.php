<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Services - Speedfix Garage</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
      color: #1c1c1c;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      border-bottom: 1px solid #ddd;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 50px;
      margin-right: 10px;
    }

    .user {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .user img {
      width: 36px;
      height: 36px;
      border-radius: 50%;
    }

    .user-info {
      font-size: 14px;
    }

    .main-content {
      padding: 40px;
    }

    .heading {
      font-size: 32px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .subheading {
      font-size: 14px;
      color: #555;
      max-width: 500px;
      margin-bottom: 30px;
    }

    .services {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .service-card {
      flex: 1;
      min-width: 300px;
      max-width: 360px;
      background-color: #f9f9f9;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 3px 8px rgba(0,0,0,0.05);
      display: flex;
      flex-direction: column;
    }

    .service-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .service-card-content {
      padding: 20px;
      flex: 1;
    }

    .service-card h3 {
      margin-top: 0;
      font-size: 18px;
    }

    .service-card p {
      font-size: 14px;
      color: #555;
      margin-bottom: 20px;
    }

    .service-card a {
      display: inline-block;
      padding: 10px 18px;
      border-radius: 8px;
      background-color: white;
      color: #c0392b;
      font-weight: bold;
      border: 1px solid #c0392b;
      text-decoration: none;
      font-size: 14px;
      transition: 0.2s;
    }

    .service-card a:hover {
      background-color: #c0392b;
      color: white;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <img src="logo.png" alt="Speedfix Garage Logo">
      <div>
        <strong>Speedfix Garage</strong><br>
        <small>Drive In. Speed Up. Drive Out.</small>
      </div>
    </div>

    <div class="user">
      <img src="user-avatar.jpg" alt="User">
      <div class="user-info">
        <strong>Ammi Watts</strong><br>
        <small>My settings</small>
      </div>
    </div>
  </header>

  <div class="main-content">
    <div class="heading">We Always Provide The Best Service</div>
    <div class="subheading">
      <strong>Services</strong><br>
      While we can customize your services plan to suit your needs, most clients schedule regular services:
    </div>

    <div class="services">
      <div class="service-card">
        <img src="periodic.jpg" alt="Periodic Maintenance">
        <div class="service-card-content">
          <h3>Periodic Maintenance Service</h3>
          <p>This service aims to keep the vehicle in optimal condition through routine checks, oil changes, brake inspections, electrical system diagnostics, and other essential component maintenance.</p>
          <a href="#">Book Now →</a>
        </div>
      </div>

      <div class="service-card">
        <img src="repair.jpg" alt="Repair and Maintenance">
        <div class="service-card-content">
          <h3>Repair and Maintenance Service</h3>
          <p>This service includes repairing various vehicle components such as the engine, suspension, transmission, and fuel injection system to ensure the vehicle remains in top shape.</p>
          <a href="#">Book Now →</a>
        </div>
      </div>

      <div class="service-card">
        <img src="bodyrepair.jpg" alt="Body Repair">
        <div class="service-card-content">
          <h3>Body Repair and Painting Service</h3>
          <p>This service focuses on repairing body damage from collisions or accidents, repainting, and detailing to maintain the vehicle’s smooth and attractive appearance.</p>
          <a href="#">Book Now →</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
