<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Library Management System</title>
        <link rel="stylesheet" href="{{ asset('assets/css/flashcard3.css') }}" />


  </head>
  <body>
  
  <nav class="navbar">
      <div class="logo_item">
        
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="{{ asset('assets/images/TS Logo.png') }}" alt="">TECH SKILL
      </div>


      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>

<div class="dropdown">
    <img src="{{ asset('assets/images/profileicon.png') }}" onclick="toggleDropdown()" class="dropbtn">
    <div id="myDropdown" class="dropdown-content">
      <a href="profile">Profile</a>
      <a href="/">Logout</a>
    </div>
  </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
         <ul class="menu_items">
          <li class="item">
		      &nbsp
			  &nbsp
			  &nbsp
			  
            <a href="home" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-home"></i>
              </span>
              <span class="navlink">Home</span>
            </a>
          </li>

          <ul class="menu_items">
          <li class="item">
            <a href="library" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-grid-alt"></i>
              </span>
              <span class="navlink">Library</span>
            </a>
          </li>
		
		<ul class="menu_items">
          <li class="item">
            <a href="video" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-video"></i>
              </span>
              <span class="navlink">Videos</span>
            </a>
          </li>
  
		  <ul class="menu_items">
          <li class="item">
            <a href="flashcards" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-card"></i>
              </span>
              <span class="navlink">Flashcard</span>
            </a>
          </li>
		
          <!-- end -->
		  
        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> ‎ ‎ ‎ ‎ ‎ ‎ </span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> ‎ ‎ ‎ ‎ ‎ ‎ </span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <main>
  <nav>
  <h1 class="headertitle"> Flashcards </h1>

    <div class="flex-container">
      <a href="flashjava" class="box">
        <img src="{{ asset('assets/images/Java.png') }}">
        <p>Java</p>
      </a>
      <a href="flashhtml" class="box">
        <img src="{{ asset('assets/images/HTML.png') }}">
        <p>Hyper Text Markup Language</p>
      </a>
      <a href="flashjs" class="box">
        <img src="{{ asset('assets/images/Javascript.png') }}">
        <p>JavaScript</p>
      </a>
      <a href="flashphp" class="box">
        <img src="{{ asset('assets/images/php.png') }}">
        <p>PHP: Hypertext Preprocessor</p>
      </a>
      <a href="flashpy" class="box">
        <img src="{{ asset('assets/images/Python.png') }}">
        <p>Python</p>
      </a>
      <a href="flashsql" class="box">
        <img src="{{ asset('assets/images/mySql.png') }}">
        <p>Structured Query Language</p>
      </a>
    </div>
  </nav>
</main>
 
 
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/library.js') }}"></script>
    
  </body>
</html>