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
      <h1 style="text-align:center;">JAVA EASY QUIZ</h1>
      <br>
        <ol>
      <li>What is a class in java?</li>
      <input type="radio" name="question1" id="correct1">A. A class is a blueprint from which individual objects are created. A class can contain fields and methods to describe the behavior of an object.<br>
      <input type="radio" name="question1">B. Class is a special data type.<br>
      <input type="radio" name="question1">C. Class is used to allocate memory to a data type.<br>
      <input type="radio" name="question1">D. None of the above.<br><br>

    <li>Who owns Java?</li>
      <input type="radio" name="question2" id="correct2">A. Oracle<br>
      <input type="radio" name="question2">B. Mark Zuckerberg<br>
      <input type="radio" name="question2">C. Elon Musk<br>
      <input type="radio" name="question2">D. None of the above<br><br>

    <li>The java was created on what year?</li>
      <input type="radio" name="question3">A. 2010<br>
      <input type="radio" name="question3" id="correct3">B. 1995<br>
      <input type="radio" name="question3">C. 2000<br>
      <input type="radio" name="question3">D. 1985<br><br>

    <li>Java devices run on how many?</li>
      <input type="radio" name="question4" id="correct4">A. 3 billion<br>
      <input type="radio" name="question4">B. 1 million<br>
      <input type="radio" name="question4">C. 50 million<br>
      <input type="radio" name="question4">D. All of the above<br><br>

    <li>It is said that Java is a block of code that, when called, performs specific actions mentioned in it. What is it called?</li>
      <input type="radio" name="question5" id="correct5">A. Method<br>
      <input type="radio" name="question5">B. Return<br>
      <input type="radio" name="question5">C. Char<br>
      <input type="radio" name="question5">D. Classes<br><br>
      
    <li>In Java, it is a copy of a specific class. What is it called?</li>
      <input type="radio" name="question6">A. Classes<br>
      <input type="radio" name="question6" id="correct6">B. Objects<br>
      <input type="radio" name="question6">C. Methods<br>
      <input type="radio" name="question6">D. Character<br><br>

    <li>In Java, it is a template used to create objects and to define object data types and methods. What is it called?</li>
      <input type="radio" name="question7" id="correct7">A. Class<br>
      <input type="radio" name="question7">B. Objects<br>
      <input type="radio" name="question7">C. Methods<br>
      <input type="radio" name="question7">D. None of the above<br><br>

    <li>What program is used to create a Java?</li>
      <input type="radio" name="question8" id="correct8">A. Netbeans<br>
      <input type="radio" name="question8">B. Mozilla Firefox<br>
      <input type="radio" name="question8">C. Google Chrome<br>
      <input type="radio" name="question8">D. All of the above<br><br>

    <li>What to insert when creating comments?</li>
      <input type="radio" name="question9" id="correct9">A. //<br>
      <input type="radio" name="question9">B. !!<br>
      <input type="radio" name="question9">C. !<br>
      <input type="radio" name="question9">D. None of the above<br><br>

    <li>It specifies what type of value a method returns.</li>
      <input type="radio" name="question10" id="correct10">A. returnType<br>
      <input type="radio" name="question10">B. methodType<br>
      <input type="radio" name="question10">C. return<br>
      <input type="radio" name="question10">D. None of the above<br><br>


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