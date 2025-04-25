<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Bootcamp course</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome  CDN Link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Googlefont Poppins CDN Link -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">
  <!-- bootstrap CDN link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 
</head>

<body>
  <div class="sidebar">
    <div class="brand-detail">
      <i class="brand-logo"></i>
      <span class="brand-name">Fullstack</span>
    </div>

    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class="fa-solid fa-house"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>

      <li class="log_out">
        <a href="#">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>

  <section class="main">
    <nav>
      <div class="sidebar-button">
        <i role="button" class='fa-solid fa-bars sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>

    <div class="main-content">


    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
    }
  </script>

</body>

</html>