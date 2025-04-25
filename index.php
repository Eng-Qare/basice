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
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.sidebar {
  position: fixed;
  height: 100%;
  width: 240px;
  background: #0A2558;
}

.sidebar.active {
  width: 60px;
}

.sidebar .brand-detail {
  height: 80px;
  display: flex;
  align-items: center;
}

.sidebar .brand-detail i {
  font-size: 28px;
  font-weight: 500;
  color: #fff;
  min-width: 60px;
  text-align: center
}

.sidebar .brand-detail .brand-name {
  color: #fff;
  font-size: 24px;
  font-weight: 500;
  /* text-align:center; */
  /* width:100% */
}

.sidebar .nav-links {
  margin-top: 10px;
}

.sidebar .nav-links li {
  position: relative;
  list-style: none;
  height: 50px;
}

.sidebar .nav-links li a {
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  text-decoration: none;
}

.sidebar .nav-links li a.active {
  background: #081D45;
}

.sidebar .nav-links li a:hover {
  background: #081D45;
}

.sidebar .nav-links li i {
  min-width: 60px;
  text-align: center;
  font-size: 18px;
  color: #fff;
}

.sidebar .nav-links li a .links_name {
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
}

.sidebar .nav-links .log_out {
  position: absolute;
  bottom: 0;
  width: 100%;
}

.main {
  position: relative;
  background: #f5f5f5;
  min-height: 100vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}

.sidebar.active~.main {
  width: calc(100% - 60px);
  left: 60px;
}

.main nav {
  display: flex;
  justify-content: space-between;
  height: 80px;
  background: #fff;
  align-items: center;
  position: fixed;
  width: calc(100% - 240px);
  left: 240px;
  z-index: 100;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
}

.sidebar.active~.main nav {
  left: 60px;
  width: calc(100% - 60px);
}

.main nav .sidebar-button {
  display: flex;
  align-items: center;
  font-size: 24px;
  font-weight: 500;
}

nav .sidebar-button i {
  font-size: 35px;
  margin-right: 10px;
}

.main .main-content {
  position: relative;
  padding: 20px;
  padding-top: 104px;
}


/* Responsive Media Query */
@media (max-width: 1240px) {
  .sidebar {
    width: 60px;
  }

  .sidebar.active {
    width: 220px;
  }

  .main {
    width: calc(100% - 60px);
    left: 60px;
  }

  .sidebar.active~.main {
    width: calc(100% - 220px);
    overflow: hidden;
    left: 220px;
  }

  .main nav {
    width: calc(100% - 60px);
    left: 60px;
  }

  .sidebar.active~.main nav {
    width: calc(100% - 220px);
    left: 220px;
  }
}

@media (max-width: 700px) {
  .sidebar {
    width: 0px;
  }

  .main {
    width: 100%;
    left: 0
  }

  nav {
    width: 100% !important;
    left: 0 !important
  }
}
  </style>
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