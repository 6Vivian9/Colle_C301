PHP (MEDIUM)
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
       <img src="" alt="" class="profile" />
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
        <ol>
      <li> What is the purpose of the init method in Python classes? </li>
      <input type="radio" name="question1"> A.It is called when an object is created and initializes its attributes.<br>
      <input type="radio" name="question1" id="correct1">B.It is used to define a class constructor.
<br>
      <input type="radio" name="question1">C.It is responsible for destroying an object.<br>
      <input type="radio" name="question1">D.It is a reserved keyword for private methods.
 <br><br>

      <li>What does the yield keyword do in Python?</li>
      <input type="radio" name="question2"id="correct2"> A.It defines a generator function.<br>
      <input type="radio" name="question2">B.It terminates the execution of a function.<br>
      <input type="radio" name="question2" >C. It is used for exception handling.<br>
      <input type="radio" name="question2">D.It converts a variable into a string.<br><br>

      <li>What is the purpose of the super() function in Python?</li>
      <input type="radio" name="question3"id="correct3">A. It calls the parent class constructor.<br>
      <input type="radio" name="question3">B.It defines a superclass in multiple inheritance.<br>
      <input type="radio" name="question3">C.It returns the superclass object.<br>
      <input type="radio" name="question3" >D.It is used for method overloading.
<br><br>

      <li>Which of the following is an immutable data type in Python?</li>
      <input type="radio" name="question4">A.List<br>
      <input type="radio" name="question4" id="correct4">B.Tuple<br>
      <input type="radio" name="question4">C.Set<br>
      <input type="radio" name="question4">D.Dictionary<br><br>

      <li> What does the pass statement in Python signify </li>
      <input type="radio" name="question5">A.It is used to exit a loop.<br>
      <input type="radio" name="question5" id="correct5">B.It is a placeholder that does nothing.<br>
      <input type="radio" name="question5">C.It raises an exception.<br>
      <input type="radio" name="question5">D.It continues to the next iteration in a loop. <br><br>

      <li>How is an exception handled in Python using the try, except, and finally blocks?</li>
      <input type="radio" name="question6">A.try for handling exceptions, except for cleanup, and finally for the main code.<br>
      <input type="radio" name="question6" id="correct6">B.try for the main code, except for handling exceptions, and finally for cleanup.<br>
      <input type="radio" name="question6">C. try for cleanup, except for the main code, and finally for handling exceptions.<br>
      <input type="radio" name="question6">D.try for the main code, except for handling exceptions, and finally for the main code.<br><br>

      <li> What is the purpose of the lambda function in Python?</li>
      <input type="radio" name="question7">A.It is used to define a block of code.<br>
      <input type="radio" name="question7"id="correct7" >B.It creates an anonymous function.<br>
      <input type="radio" name="question7">C.It is a reserved keyword for function parameters.<br>
      <input type="radio" name="question7">D.It initializes a lambda variable.<br><br>

      <li>How does the enumerate function work in Python?</li>
      <input type="radio" name="question8"id="correct8">A.PIt returns the index and the value of an iterable.<br>
      <input type="radio" name="question8">B.It iterates over a dictionary.<br>
      <input type="radio" name="question8" >C.It creates an enumerated list.<br>
      <input type="radio" name="question8">D.It generates a range of numbers.<br><br>
      
      <li>What is the purpose of the str method in Python classes?</li>
      <input type="radio" name="question9"id="correct9">A.It converts an object to a string representation.<br>
      <input type="radio" name="question9">B.It compares two objects for equality.<br>
      <input type="radio" name="question9" >C.It defines the string formatting for a class.<br>
      <input type="radio" name="question9">D.It returns the length of the object.<br><br>
      

      <li> In Python, what is the purpose of the name attribute?</li>
      <input type="radio" name="question10" >A.It is used to access the name of the class.<br>
      <input type="radio" name="question10">B.It is a reserved keyword for naming variables.<br>
	  <input type="radio" name="question10" id="correct10">C.It returns the name of the current module.<br>
      <input type="radio" name="question10">D.It is used to check if a variable exists.<br><br>
     
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
