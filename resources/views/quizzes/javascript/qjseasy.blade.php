<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Library Management System</title>
    <link rel="stylesheet" href="{{ asset('assets/css/quiz.css') }}" />
  </head>
  <body>
  
    <!-- navbar -->
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
        <a href="profile"><img src="{{ asset('assets/images/profileicon.png') }}" alt="profile" class="profile" /></a>
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


        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> </span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> </span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <main>
      <nav>
        <div class="flex-container">
          <div class="box">
                
          <form id="quizForm">
    <div>
    <h1 style="text-align:center;">JAVASCRIPT EASY QUIZ</h1>
      <br>
        <ol>
      <li> What is JavaScript primarily used for? </li>
      <input type="radio" name="question1"> A. Graphic design<br>
      <input type="radio" name="question1" >B. Data analysis<br>
      <input type="radio" name="question1"id="correct1">C. Webpage interactivity<br>
      <input type="radio" name="question1">D. Video editing
 <br><br>

      <li>Which server-side platform allows the use of JavaScript for more advanced functionality?</li>
      <input type="radio" name="question2"> A. Apache<br>
      <input type="radio" name="question2"id="correct2">B. Node.js<br>
      <input type="radio" name="question2" >C. Django<br>
      <input type="radio" name="question2">D. Tomcat<br><br>

      <li>In JavaScript, what is used to control a browser's Document Object Model (DOM)?</li>
      <input type="radio" name="question3">A. JavaBeans<br>
      <input type="radio" name="question3">B. Servlets<br>
      <input type="radio" name="question3"id="correct3">C. Client-side JavaScript<br>
      <input type="radio" name="question3" >D. Server-side JavaScript<br><br>

      <li>How does JavaScript inheritance differ from Java?</li>
      <input type="radio" name="question4">A. JavaScript has no inheritance<br>
      <input type="radio" name="question4" >B. Java uses prototype-based inheritance<br>
      <input type="radio" name="question4"id="correct4">C. JavaScript uses class-based inheritance<br>
      <input type="radio" name="question4">D. Java has dynamic inheritance<br><br>

      <li> Which programming language is JavaScript similar to but without static typing and strong type checking? </li>
      <input type="radio" name="question5"id="correct5">A. Java.<br>
      <input type="radio" name="question5" >B. C++<br>
      <input type="radio" name="question5">C. Python<br>
      <input type="radio" name="question5">D. C# <br><br>

      <li>What does JavaScript use for variable data types?</li>
      <input type="radio" name="question6">A. Static typing<br>
      <input type="radio" name="question6" id="correct6">B. Dynamic typing<br>
      <input type="radio" name="question6">C. Strong typing<br>
      <input type="radio" name="question6">D. Weak typing
<br><br>

      <li> What is the primary purpose of Java's class-based model?
</li>
      <input type="radio" name="question7">A. Dynamic inheritance<br>
      <input type="radio" name="question7" >B. Fast execution<br>
      <input type="radio" name="question7"id="correct7">C. Tightly coupled object hierarchies<br>
      <input type="radio" name="question7">D. Prototype-based objects<br><br>

      <li>Which of the following JavaScript declarations creates a block-scoped, read-only constant?</li>
      <input type="radio" name="question8">A. var<br>
      <input type="radio" name="question8">B. let<br>
      <input type="radio" name="question8" id="correct8">C. const<br>
      <input type="radio" name="question8">D. const and let<br><br>
      
      <li>In JavaScript, what is used to represent symbolic names for values?</li>
      <input type="radio" name="question9"id="correct9">A. Identifiers<br>
      <input type="radio" name="question9">B. Constants<br>
      <input type="radio" name="question8" >C. Variables<br>
      <input type="radio" name="question8">D. Declarations<br><br>
      

      <li> What does a semicolon represent in JavaScript?
</li>
      <input type="radio" name="question10" id="correct10">A. End of a statement<br>
      <input type="radio" name="question10">B. Start of a statement<br>
	  <input type="radio" name="question8" >C. Line continuation<br>
      <input type="radio" name="question8">D. Comment delimiter<br><br>
     
      <input type="button" name="submit" value="SubmitQuiz" onClick="calculateScore()">
  </form>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onClick="closeModal()">Close</span>
      <p id="scoreDisplay"></p>
    </div>
  </div>

    </div>
</ol>
  </form>
            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/quiz.js') }}"></script>
    



    </body>
  </html>