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
      <h1 style="text-align:center;">PHP HARD QUIZ</h1>
      <br>
        <ol>

        <li>What is the key characteristic of a resource data type in PHP?</li>
      <input type="radio" name="question1" id="correct1">A. It represents a PHP resource such as a database query.<br>
      <input type="radio" name="question1">B. It can store multiple values.<br>
      <input type="radio" name="question1">C. It is used for arithmetic operations.<br>
      <input type="radio" name="question1">D. It is case-sensitive.<br><br>

    <li>In PHP, what does the === operator check for?</li>
      <input type="radio" name="question2">A. Equality without considering data types.<br>
      <input type="radio" name="question2">B. Logical AND operation.<br>
      <input type="radio" name="question2">C. Inequality.<br>
      <input type="radio" name="question2" id="correct2">D. Identity, checking both value and data type.<br><br>

    <li>How would you declare a constant named "MAX_SIZE" in PHP?</li>
      <input type="radio" name="question3" id="correct3">A. const MAX_SIZE = 100;<br>
      <input type="radio" name="question3">B. define(MAX_SIZE, 100);<br>
      <input type="radio" name="question3">C. constant(MAX_SIZE, 100);<br>
      <input type="radio" name="question3">D. MAX_SIZE = 100;<br><br>

      <li>What does the ++$x operator do in PHP?</li>
      <input type="radio" name="question4">A. #<br>
      <input type="radio" name="question4" id="correct4">B. $ <br>
      <input type="radio" name="question4">C. &<br>
      <input type="radio" name="question4">D. !<br><br>

      <li>What is the correct way to end a PHP statement?</li>
      <input type="radio" name="question5" id="correct5">A. Increments the value of $x by 1 and then evaluates to the new value.<br>
      <input type="radio" name="question5">B. Decrements the value of $x by 1.<br>
      <input type="radio" name="question5">C. Evaluates to the current value of $x and then increments it by 1.<br>
      <input type="radio" name="question5">D. Checks if $x is greater than 1.<br><br>
      
      <li>Which logical operator in PHP evaluates to true if only one of the conditions is true?</li>
      <input type="radio" name="question6">A. &&<br>
      <input type="radio" name="question6">B. !<br>
      <input type="radio" name="question6">C. ^<br>
      <input type="radio" name="question6" id="correct6">D. ||<br><br>

      <li>Which function is used to determine the data type of a variable in PHP?</li>
      <input type="radio" name="question7">A. type()<br>
      <input type="radio" name="question7" id="correct7">B. var_dump()<br>
      <input type="radio" name="question7">C. data_type()<br>
      <input type="radio" name="question7">D. determine_type()<br><br>

      <li>What is the purpose of constants in PHP?</li>
      <input type="radio" name="question8">A. To store dynamic values<br>
      <input type="radio" name="question8">B. To confuse developers<br>
      <input type="radio" name="question8">C. To replace variables<br>
      <input type="radio" name="question8" id="correct8">D. To store values that cannot be changed during the script<br>
    
      <li> What is the purpose of data types in PHP?</li>
      <input type="radio" name="question9">A. To confuse developers      <br>
      <input type="radio" name="question9">B. To limit the flexibility of variables      <br>
      <input type="radio" name="question9">C. To increase the complexity of programming      <br>
      <input type="radio" name="question9" id="correct9">D. To determine the type of data a variable can store      <br>

      <li>Which of the following is a compound data type in PHP?</li>
      <input type="radio" name="question10" id="correct10">A. Array<br>
      <input type="radio" name="question10" >B. Integer<br>
      <input type="radio" name="question10" >C. Boolean<br>
      <input type="radio" name="question10">D. Float<br><br>

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