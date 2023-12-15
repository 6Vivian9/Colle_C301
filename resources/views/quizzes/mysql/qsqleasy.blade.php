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
      <h1 style="text-align:center;">HTML EASY QUIZ</h1>
      <br>
        <ol>

        <li> This section teaches you how to use SQL statements to manage data in MySQL. It’ll provide you with everything you need to know to work with MySQL effectively.
 </li>
      <input type="radio" name="question1"> A.  MySQL Stored Procedures<br>
      <input type="radio" name="question1" >B. MySQL Triggers<br>
      <input type="radio" name="question1"id="correct1">C. MySQL Basics<br>
      <input type="radio" name="question1">D. MySQL Index
 <br><br>

      <li>In this section, you will learn how to insert, update, and delete data from tables using various MySQL statements</li>
      <input type="radio" name="question2"id="correct2"> A. Modifying data in MySQL<br>
      <input type="radio" name="question2">B. Managing databases<br>
      <input type="radio" name="question2" >C. MySQL globalization<br>
      <input type="radio" name="question2">D. Grouping data<br><br>

      <li>This provides you with a technique to query data based on a pattern.</li>
      <input type="radio" name="question3">A. BETWEEN<br>
      <input type="radio" name="question3">B. OR<br>
      <input type="radio" name="question3">C. NOT IN<br>
      <input type="radio" name="question3" id="correct3">D. LIKE<br><br>

      <li>Gives you an overview of joins supported in MySQL including inner join, left join, and right join.</li>
      <input type="radio" name="question4"id="correct4">A. Joins<br>
      <input type="radio" name="question4" >B. Table & Column Aliases<br>
      <input type="radio" name="question4">C. SELECT<br>
      <input type="radio" name="question4">D. LIMIT<br><br>

      <li> Generates multiple grouping sets considering a hierarchy between columns specified in the GROUP BY clause. </li>
      <input type="radio" name="question5">A. HAVING COUNT<br>
      <input type="radio" name="question5" >B. CROSS JOIN<br>
      <input type="radio" name="question5">C. HAVING COUNT<br>
      <input type="radio" name="question5"id="correct5">D. ROLLUP <br><br>

      <li>Combines two or more result sets of multiple queries into a single result set.</li>
      <input type="radio" name="question6">A. EXCEPT<br>
      <input type="radio" name="question6" id="correct6">B.  UNION<br>
      <input type="radio" name="question6">C.  INTERSECT<br>
      <input type="radio" name="question6">D.  EXISTS
<br><br>

      <li> Shows you step by step how to create a new database in MySQL Server.

</li>
      <input type="radio" name="question7">A.DROP DATABASE<br>
      <input type="radio" name="question7" >B. Selecting a database<br>
      <input type="radio" name="question7"id="correct7">C. CREATE DATABASE<br>
      <input type="radio" name="question7">D. Table & Column Aliases <br><br>

      <li>Show you how to use the unique constraint to enforce the uniqueness of values in a column or a group of columns in a table.</li>
      <input type="radio" name="question8"id="correct8">A.  Unique constraint <br>
      <input type="radio" name="question8">B. NOT NUL<br>
      <input type="radio" name="question8" >C. Primary key<br>
      <input type="radio" name="question8">D. CHECK constraint<br><br>
      
      <li>In this section, you will learn how to insert, update, and delete data from tables using various MySQL statements.</li>
      <input type="radio" name="question9"id="correct9">A.  Modifying data in MySQL<br>
      <input type="radio" name="question9">B.  MySQL constraints<br>
      <input type="radio" name="question9" >C. Managing databases<br>
      <input type="radio" name="question9">D. MySQL transaction<br><br>
      

      <li> Walk you through various natural sorting techniques in MySQL using the ORDER BY clause.
</li>
      <input type="radio" name="question10" >A. Prepared Statement <br>
      <input type="radio" name="question10">B. Insert date values<br>
	  <input type="radio" name="question10" >C.  Transaction<br>
      <input type="radio" name="question10"id="correct10">D.  Natural sorting<br><br>



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