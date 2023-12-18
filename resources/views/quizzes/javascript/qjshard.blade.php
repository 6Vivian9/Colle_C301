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
    <p><a href="library">library</a> > <a href="jshard">JavaScript Hard Module</a> > <a href="quizjshard">JavaScript Hard Quiz</a></p>
  </div>
        <div class="flex-container">
          <div class="box">
                
          <form id="quizForm">
    <div>
      <h1 style="text-align:center;">JAVASCRIPT HARD QUIZ</h1>
      <br>
        <ol>
      <li>Which of the following is NOT an example of an asynchronous operation in JavaScript?</li>
      <input type="radio" name="question1">A. setTimeout<br>
      <input type="radio" name="question1" id="correct1">B. for loop<br>
      <input type="radio" name="question1">C. fetch<br>
      <input type="radio" name="question1">D. Promises<br><br>

    <li>What represents the execution order of JavaScript tasks involving Promises and setTimeout?</li>
      <input type="radio" name="question2">A. Promises execute before setTimeout<br>
      <input type="radio" name="question2">B. Promises and setTimeout execute simultaneously<br>
      <input type="radio" name="question2">C. setTimeout executes before Promises<br>
      <input type="radio" name="question2" id="correct2">D. Execution order might vary depending on other factors<br><br>

    <li>What is the purpose of Web Workers in JavaScript?</li>
      <input type="radio" name="question3">A. Manipulate the DOM<br>
      <input type="radio" name="question3">B. Create asynchronous functions<br>
      <input type="radio" name="question3" id="correct3">C. Execute scripts in the background without affecting UI responsiveness<br>
      <input type="radio" name="question3">D. Handle CSS animations<br><br>

    <li>Which part of JavaScript handles asynchronous tasks such as setTimeout or I/O operations?</li>
      <input type="radio" name="question4">A. Call Stack<br>
      <input type="radio" name="question4">B. Event Loop<br>
      <input type="radio" name="question4" id="correct4">C. Web APIs<br>
      <input type="radio" name="question4">D. Callback Queue<br><br>

    <li>In the context of the Event Loop, when are microtasks executed?</li>
      <input type="radio" name="question5" id="correct5">A. After the current task and before the next task from the Callback Queue<br>
      <input type="radio" name="question5">B. After the current task and before the Event Loop starts<br>
      <input type="radio" name="question5">C. Before the current task<br>
      <input type="radio" name="question5">D. After the Event Loop has completed its cycle<br><br>
      
    <li>What technique can be used to control the frequency of function executions to improve performance?</li>
      <input type="radio" name="question6">A. Callbacks<br>
      <input type="radio" name="question6">B. Closures<br>
      <input type="radio" name="question6" id="correct6">C. Throttling<br>
      <input type="radio" name="question6">D. Promises<br><br>

    <li>Which JavaScript feature helps in writing asynchronous code that looks synchronous?</li>
      <input type="radio" name="question7" id="correct7">A. Async/Await<br>
      <input type="radio" name="question7">B. Callbacks<br>
      <input type="radio" name="question7">C. Promises<br>
      <input type="radio" name="question7">D. setTimeout<br><br>

    <li>Which function in JavaScript is used to delay the execution of code?</li>
      <input type="radio" name="question8">A. sleep()<br>
      <input type="radio" name="question8">B. wait()<br>
      <input type="radio" name="question8" id="correct8">setTimeOut()<br>
      <input type="radio" name="question8">D. pause()<br><br>

    <li>How can you simulate parallelism in JavaScript?</li>
      <input type="radio" name="question9">A. Using setTimeout<br>
      <input type="radio" name="question9">B. Utilizing Promises<br>
      <input type="radio" name="question9" id="correct9">C. Employing Web Workers<br>
      <input type="radio" name="question9">D. With Callbacks<br><br>

    <li>What happens when you debounce a function in JavaScript?</li>
      <input type="radio" name="question10">A. It speeds up the function execution<br>
      <input type="radio" name="question10">B. It delays the function execution until explicitly called<br>
      <input type="radio" name="question10" id="correct10">C. It restricts the frequency of function execution<br>
      <input type="radio" name="question10">D. It synchronizes the function with the Event Loop<br><br>


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