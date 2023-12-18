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
      <div class="content">
    <p><a href="library">library</a> > <a href="jsmedium">JavaScript Medium Module</a> > <a href="quizjsmedium">JavaScript Medium Quiz</a></p>
  </div>
        <div class="flex-container">
          <div class="box">
                
          <form id="quizForm">
    <div>
      <h1 style="text-align:center;">JAVASCRIPT MEDIUM QUIZ</h1>
      <br>
        <ol>
      <li>What is JavaScript primarily used for in web development?</li>
      <input type="radio" name="question1">A. Styling web pages<br>
      <input type="radio" name="question1">B. Structuring web content<br>
      <input type="radio" name="question1" id="correct1">C. Implementing complex features on web pages<br>
      <input type="radio" name="question1">D. Defining HTML tables<br><br>

    <li>Which of the following is NOT one of the layers of standard web technologies mentioned in the article?</li>
      <input type="radio" name="question2">A. HTML<br>
      <input type="radio" name="question2">B. CSS<br>
      <input type="radio" name="question2">C. JavaScript<br>
      <input type="radio" name="question2" id="correct2">D. PHP<br><br>

    <li>What does CSS stand for in web development?</li>
      <input type="radio" name="question3">A. Central Style Sheet<br>
      <input type="radio" name="question3" id="correct3">B. Cascading Style Sheet<br>
      <input type="radio" name="question3">C. Computer Style Syntax<br>
      <input type="radio" name="question3">D. Conditional Style Selection<br><br>

    <li>What does the DOM API allow you to do in JavaScript?</li>
      <input type="radio" name="question4">A. Retrieve geographical information<br>
      <input type="radio" name="question4">B. Create animated graphics<br>
      <input type="radio" name="question4" id="correct4">C. Manipulate HTML and CSS<br>
      <input type="radio" name="question4">D. Play audio and video<br><br>

    <li>Which API is responsible for retrieving geographical information in JavaScript?</li>
      <input type="radio" name="question5">A. Audio and Video API<br>
      <input type="radio" name="question5">B. Canvas and WebGL API<br>
      <input type="radio" name="question5" id="correct5">C. Geolocation API<br>
      <input type="radio" name="question5">D. Document Object Model (DOM) API<br><br>
      
    <li>What is the purpose of Application Programming Interfaces (APIs) in JavaScript?</li>
      <input type="radio" name="question6">A. To create HTML content<br>
      <input type="radio" name="question6" id="correct6">B. To provide ready-made code building blocks<br>
      <input type="radio" name="question6">C. To define CSS styles<br>
      <input type="radio" name="question6">D. To execute server-side code<br><br>

    <li>Which type of code is run on the user's computer in web development?</li>
      <input type="radio" name="question7">A. Server-side code<br>
      <input type="radio" name="question7">B. Compiled code<br>
      <input type="radio" name="question7">C. Static code<br>
      <input type="radio" name="question7" id="correct7">D. Client-side code<br><br>

    <li>What term is used to describe the ability to update the display of a web page to show different content in different circumstances?</li>
      <input type="radio" name="question8">A. Static code<br>
      <input type="radio" name="question8">B. Compiled code<br>
      <input type="radio" name="question8" id="correct8">Dynamic code<br>
      <input type="radio" name="question8">D. Interpreted code<br><br>

    <li>How is JavaScript applied to an HTML page?</li>
      <input type="radio" name="question9">A. Using < style> elements<br>
      <input type="radio" name="question9">B. Using < link> elements<br>
      <input type="radio" name="question9" id="correct9">C. Using < script> elements<br>
      <input type="radio" name="question9">D. Using < div> elements<br><br>

    <li>What is a potential issue with loading JavaScript in the head of an HTML document?</li>
      <input type="radio" name="question10">A. It increases performance<br>
      <input type="radio" name="question10" id="correct10">B. It may cause errors if the script modifies HTML before it's parsed<br>
      <input type="radio" name="question10">C. It ensures the page loads faster<br>
      <input type="radio" name="question10">D. It is the recommended practice<br><br>


      <input type="button" name="submit" value="SubmitQuiz" onClick="calculateScore()">
  </form>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <p>    <a id="scoreDisplay"></a> <span class="close" onClick="closeModal()">Close</span></p>

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