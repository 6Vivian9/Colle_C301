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
      <h1 style="text-align:center;">JAVA MEDIUM QUIZ</h1>
      <br>
        <ol>
      <li>Name the data type: "true"</li>
      <input type="radio" name="question1">A. boolean<br>
      <input type="radio" name="question1">B. char<br>
      <input type="radio" name="question1" id="correct1">C. string<br>
      <input type="radio" name="question1">D. double<br><br>

    <li>Name the data type: 1.0</li>
      <input type="radio" name="question2" id="correct2">A. double<br>
      <input type="radio" name="question2">B. int<br>
      <input type="radio" name="question2">C. char<br>
      <input type="radio" name="question2">D. boolean<br><br>

    <li>Name the data type: '3'</li>
      <input type="radio" name="question3" id="correct3">A. int<br>
      <input type="radio" name="question3">B. char<br>
      <input type="radio" name="question3">C. string<br>
      <input type="radio" name="question3">D. None of the above<br><br>

    <li>What data type would you use for storing the number of students in a class?</li>
      <input type="radio" name="question4">A. boolean<br>
      <input type="radio" name="question4">B. string<br>
      <input type="radio" name="question4">C. double<br>
      <input type="radio" name="question4" id="correct4">D. int<br><br>

    <li>How would you declare a variable storing a person's name?</li>
      <input type="radio" name="question5">A. string name = "Jeff";<br>
      <input type="radio" name="question5">B. name String = "Jeff";<br>
      <input type="radio" name="question5">C. String name = Jeff;<br>
      <input type="radio" name="question5" id="correct5">D. String name = "Jeff";<br><br>
      
    <li>How would you declare a variable that tells you that someone passed a class?</li>
      <input type="radio" name="question6">A. boolean passed = 'true';<br>
      <input type="radio" name="question6" id="correct6">B. boolean passed = true;<br>
      <input type="radio" name="question6">C. passed = true;<br>
      <input type="radio" name="question6">D. String passed = "true";<br><br>

    <li>Which expression evaluates to false?</li>
      <input type="radio" name="question7">A. 15 % 3 < 2<br>
      <input type="radio" name="question7" id="correct7">B. 3 * 3 % 2 <= 0<br>
      <input type="radio" name="question7">C. false == false<br>
      <input type="radio" name="question7">D. false == false == false == false<br><br>

    <li>Which declaration with throw an error?</li>
      <input type="radio" name="question8">A. String name = "1 1233 141";<br>
      <input type="radio" name="question8">B. double num = 1;<br>
      <input type="radio" name="question8" id="correct8">int bigNumber = 1234567890;<br>
      <input type="radio" name="question8">D. char random = '7';<br><br>

    <li>What prints out "I love Java" successfully?</li>
      <input type="radio" name="question9">A. System.out.println(I love Java);<br>
      <input type="radio" name="question9">B. Systemoutprintln("I love Java);<br>
      <input type="radio" name="question9" id="correct9">C. System.out.println("I love" + " Java");<br>
      <input type="radio" name="question9">D. System.out.println("I love Java")<br><br>

    <li>Which declaration will throw an error?</li>
      <input type="radio" name="question10">A. double num = 8;<br>
      <input type="radio" name="question10" id="correct10">B. int averageGrade = 89.7;<br>
      <input type="radio" name="question10">C. boolean done = false;<br>
      <input type="radio" name="question10">D. String done = "true";<br><br>


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