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
    <p><a href="library">library</a> > <a href="phpeasy">PHP Easy Module</a> > <a href="quizphpeasy">PHP Easy Quiz</a></p>
  </div>
        <div class="flex-container">
          <div class="box">
                
          <form id="quizForm">
    <div>
      <h1 style="text-align:center;">PHP EASY QUIZ</h1>
      <br>
        <ol>
        <li>What does PHP stand for?</li>
      <input type="radio" name="question1" id="correct1">A. PHP: Hypertext Preprocessor<br>
      <input type="radio" name="question1">B. PHP: Hypertext Process<br>
      <input type="radio" name="question1">C. Personal Hypertext Processor<br>
      <input type="radio" name="question1">D. Private Home Page<br><br>

    <li>PHP server scripts are surrounded by delimiters, which?</li>
      <input type="radio" name="question2">A. &lt ?php...?? &gt<br>
      <input type="radio" name="question2">B. &lt ?php...? &gt<br>
      <input type="radio" name="question2">C. &lt <&>...</&> &gt<br>
      <input type="radio" name="question2" id="correct2">D. &lt ?php...? &gt<br><br>

    <li>How do you write "Hello World" in PHP</li>
      <input type="radio" name="question3" id="correct3">A. echo "Hello World";<br>
      <input type="radio" name="question3">B. Document.Write("Hello World");<br>
      <input type="radio" name="question3">C. "Hello World";<br>
      <input type="radio" name="question3">D. echo "Hello World"<br><br>

      <li>All variables in PHP start with which symbol?</li>
      <input type="radio" name="question4">A. #<br>
      <input type="radio" name="question4" id="correct4">B. $ <br>
      <input type="radio" name="question4">C. &<br>
      <input type="radio" name="question4">D. !<br><br>

      <li>What is the correct way to end a PHP statement?</li>
      <input type="radio" name="question5" id="correct5">A. ;<br>
      <input type="radio" name="question5">B. &lt /php &gt<br>
      <input type="radio" name="question5">C. New line<br>
      <input type="radio" name="question5">D.< bgcolor = “yellow”><br><br>
      
      <li>The PHP syntax is most similar to:</li>
      <input type="radio" name="question6">A. Javascript<br>
      <input type="radio" name="question6">B. VBScript<br>
      <input type="radio" name="question6">C. Laravel<br>
      <input type="radio" name="question6" id="correct6">D. Perl and C <br><br>

      <li>How do you get information from a form that is submitted using the "get" method?</li>
      <input type="radio" name="question7">A. Request.Form;<br>
      <input type="radio" name="question7" id="correct7">B. $_GET[];<br>
      <input type="radio" name="question7">C. Request.QueryString;<br>
      <input type="radio" name="question7">D.< b><br><br>

      <li>When using the POST method, variables are displayed in the URL:</li>
      <input type="radio" name="question8">A. True<br>
      <input type="radio" name="question8" id="correct8">B. False<br>
    
      <li> In PHP you can use both single quotes ( ' ' ) and double quotes ( " " ) for strings:</li>
      <input type="radio" name="question9">A. False<br>
      <input type="radio" name="question9" id="correct9"> True<br>

      <li>How can you open a link in a new tab/browser window?</li>
      <input type="radio" name="question10" id="correct10">A. False<br>
      <input type="radio" name="question10">B. True<br><br>


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