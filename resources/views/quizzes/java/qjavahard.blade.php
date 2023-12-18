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
    <p><a href="library">library</a> > <a href="javahard">Java Hard Module</a> > <a href="quizjavahard">Java Hard Quiz</a></p>
  </div>
        <div class="flex-container">
          <div class="box">
                
          <form id="quizForm">
    <div>
      <h1 style="text-align:center;">JAVA HARD QUIZ</h1>
      <br>
        <ol>
      <li>What is the main purpose of the `finally` block in a try-catch-finally statement?</li>
      <input type="radio" name="question1" id="correct1">A. To specify code that will be executed regardless of whether an exception is thrown or not.<br>
      <input type="radio" name="question1">B. To indicate the end of the try block<br>
      <input type="radio" name="question1">C. To catch exceptions<br>
      <input type="radio" name="question1">D. None of the above<br><br>

    <li>What is the difference between `ArrayList` and `LinkedList` in Java?</li>
      <input type="radio" name="question2" id="correct2">A. ArrayList is faster for random access, while LinkedList is faster for insertion and deletion.<br>
      <input type="radio" name="question2">B. ArrayList is a collection class, while LinkedList is an interface.<br>
      <input type="radio" name="question2">C. ArrayList is a resizable array, while  LinkedList is a doubly-linked list.<br>
      <input type="radio" name="question1">D. None of the above<br><br>

    <li>What is the purpose of the `super` keyword in Java?</li>
      <input type="radio" name="question3">A. To refer to the current instance of the class<br>
      <input type="radio" name="question3">B. To create an instance of a class<br>
      <input type="radio" name="question3" id="correct3">C. To call the superclass method<br>
      <input type="radio" name="question3">D. None of the above<br><br>

    <li>Which of the following is a checked exception in Java?</li>
      <input type="radio" name="question4">A. NullPointerException<br>
      <input type="radio" name="question4" id="correct3">B. IOException<br>
      <input type="radio" name="question4">C. ArithmeticException<br>
      <input type="radio" name="question1">D. None of the above<br><br>

    <li>What is the purpose of the `transient` keyword in Java?</li>
      <input type="radio" name="question5">A. To make variable unmodifiable<br>
      <input type="radio" name="question5">B. To make a variable thread-safe<br>
      <input type="radio" name="question5" id="correct3">C. To make a variable non-serializable<br>
      <input type="radio" name="question1">D. None of the above<br><br>
      
    <li>What is the difference between `HashMap` and `Hashtable` in Java?</li>
      <input type="radio" name="question6">A. `HashMap is a legacy class, while Hashtable is a modern class.<br>
      <input type="radio" name="question6" id="correct6">B. `HashMap allows null keys and values, while Hashtable does not.<br>
      <input type="radio" name="question6">C. `HashMap is synchronized, while Hashtable is not.<br>
      <input type="radio" name="question1">D. None of the above<br><br>

    <li>What is the purpose of the `volatile` keyword in Java?</li>
      <input type="radio" name="question7" id="correct7">A. To ensure that a variable is not cached-thread-locally<br>
      <input type="radio" name="question7">B. To prevent a variable from being modified<br>
      <input type="radio" name="question7">C. To make a variable thread-local<br>
      <input type="radio" name="question1">D. None of the above<br><br>

    <li>What is the difference between method overloading and method overriding in Java?</li>
      <input type="radio" name="question8">A. Method overloading occurs in the same class, while method overriding occurs in different classes.<br>
      <input type="radio" name="question8">B. Method overloading and method overriding are the same concept in Java.<br>
      <input type="radio" name="question8" id="correct8">Method overloading involves creating a new method with the same name but different parameters, while method overriding involves providing a new implementation for an existing method in a subclass.<br>
      <input type="radio" name="question1">D. None of the above<br><br>

    <li>What is the purpose of the `this` keyword in Java?</li>
      <input type="radio" name="question9">A. To refer to the superclass<br>
      <input type="radio" name="question9">B. To call a method from another class<br>
      <input type="radio" name="question9" id="correct9">C. To refer to the current instance of the class<br>
      <input type="radio" name="question1">D. None of the above<br><br>

    <li>What is the purpose of the `equals()` method in Java?</li>
      <input type="radio" name="question10">A. To convert an object to a string<br>
      <input type="radio" name="question10" id="correct10">B. To compare two objects for equality<br>
      <input type="radio" name="question10">C. To check if an object is null<br>
      <input type="radio" name="question1">D. None of the above<br><br>


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