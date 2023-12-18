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
    <p><a href="library">library</a> > <a href="sqlhard">SQL Hard Module</a> > <a href="quizmysqlhard">SQL Hard Quiz</a></p>
  </div>
        <div class="flex-container">
          <div class="box">
                
          <form id="quizForm">
    <div>
      <h1 style="text-align:center;">MYSQL HARD QUIZ</h1>
      <br>
        <ol>

        <li> What does the SQL acronym "DDL" stand for?
 </li>
      <input type="radio" name="question1"id="correct1"> A. Data Definition Language<br>
      <input type="radio" name="question1" >B. Data Display Language<br>
      <input type="radio" name="question1">C. Data Design Language<br>
      <input type="radio" name="question1">D. Database Description Language
 <br><br>

      <li>Which SQL clause is used to filter the results of a SELECT query to include only rows that satisfy a specified condition?</li>
      <input type="radio" name="question2"id="correct2"> A. WHERE<br>
      <input type="radio" name="question2">B. HAVING<br>
      <input type="radio" name="question2" >C. FILTER<br>
      <input type="radio" name="question2">D. CONDITION<br><br>

      <li> What is the purpose of the SQL GROUP BY clause?</li>
      <input type="radio" name="question3"id="correct3">A. To group rows based on a specified column<br>
      <input type="radio" name="question3">B. To order the result set in ascending order<br>
      <input type="radio" name="question3">C. To perform mathematical calculations on numeric columns<br>
      <input type="radio" name="question3" >D. To filter rows based on a condition<br><br>

      <li>Which SQL function is used to find the total number of rows in a table?</li>
      <input type="radio" name="question4"id="correct4">A. COUNT(*)<br>
      <input type="radio" name="question4" >B. SUM()<br>
      <input type="radio" name="question4">C. TOTAL()<br>
      <input type="radio" name="question4">D. NUM_ROWS()<br><br>

      <li>  What is the purpose of the SQL JOIN clause? </li>
      <input type="radio" name="question5"id="correct5">A. To create a new table by combining rows from two existing tables<br>
      <input type="radio" name="question5" >B. To filter rows based on a specified condition<br>
      <input type="radio" name="question5">C. To update existing records in a table<br>
      <input type="radio" name="question5">D. To perform mathematical operations on numeric columns <br><br>
	  

      <li> Which SQL statement is used to modify existing data in a table?</li>
      <input type="radio" name="question6"id="correct6">A. UPDATE<br>
      <input type="radio" name="question6" >B.   MODIFY<br>
      <input type="radio" name="question6">C.  ALTER<br>
      <input type="radio" name="question6">D.  CHANGE
<br><br>

      <li> What is the purpose of the SQL ORDER BY clause?

</li>
      <input type="radio" name="question7">A. To filter rows based on a specified condition<br>
      <input type="radio" name="question7" >B. To group rows based on a specified column<br>
      <input type="radio" name="question7"id="correct7">C. To order the result set in ascending or descending order
<br>
      <input type="radio" name="question7">D.  To join multiple tables in a query <br><br>


      <li> Which SQL data type is used to store variable-length character strings?
</li>
      <input type="radio" name="question8"id="correct8">A.  VARCHAR <br>
      <input type="radio" name="question8">B. CHAR<br>
      <input type="radio" name="question8" >C. TEXT<br>
      <input type="radio" name="question8">D. STRING<br><br>
      
      <li> What does the SQL acronym "ACID" stand for in the context of database transactions?</li>
      <input type="radio" name="question9"id="correct9">A. Atomicity, Consistency, Isolation, Durability<br>
      <input type="radio" name="question9">B.  Accuracy, Continuity, Integrity, Durability<br>
      <input type="radio" name="question9" >C. Association, Concurrency, Integrity, Durability<br>
      <input type="radio" name="question9">D. Allowing, Checking, Isolating, Deferring<br><br>
      

      <li>  Which SQL clause is used to remove all rows from a table without removing the table structure?
</li>
      <input type="radio" name="question10" >A. DELETE <br>
      <input type="radio" name="question10">B. TRUNCATE<br>
	  <input type="radio" name="question10"id="correct10" >C.  DROP<br>
      <input type="radio" name="question10">D.  REMOVE<br><br>



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