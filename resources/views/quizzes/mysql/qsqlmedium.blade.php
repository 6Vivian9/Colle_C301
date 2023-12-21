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
    <p><a href="library">library</a> > <a href="sqlmedium">SQL Medium Module</a> > <a href="quizmysqlmedium">SQL Medium Quiz</a></p>
  </div>
        <div class="flex-container">
          <div class="box">
                
          <form id="quizForm">
    <div>
      <h1 style="text-align:center;">MYSQL MEDIUM QUIZ</h1>
      <br>
        <ol>

        </li>
      <input type="radio" name="question1"> A.  HTML<br>
      <input type="radio" name="question1" id="correct1">B.MySQL<br>
      <input type="radio" name="question1">C. Java<br>
      <input type="radio" name="question1">D. PHP
 <br><br>

      <li>MySQL can handle databases of various sizes, from small applications to large enterprise systems.</li>
      <input type="radio" name="question2"> A. Flexibility<br>
      <input type="radio" name="question2">B. High Performance<br>
      <input type="radio" name="question2" >C. Security<br>
      <input type="radio" name="question2"id="correct2">D. Scalability<br><br>

      <li> What is the meaning of RDBMS</li>
      <input type="radio" name="question3">A. Ralational database management system<br>
      <input type="radio" name="question3"id="correct3">B. Relational database management system<br>
      <input type="radio" name="question3">C. Relation define bite management system<br>
      <input type="radio" name="question3" >D. Rational define bite manage systems<br><br>

      <li>A container for tables and related objects. Each MySQL server can have multiple databases.</li>
      <input type="radio" name="question4">A. Database Table<br>
      <input type="radio" name="question4" id="correct4">B. Database<br>
      <input type="radio" name="question4">C. Table Database<br>
      <input type="radio" name="question4">D. Table<br><br>

      <li>  A collection of data organized into rows and columns. </li>
      <input type="radio" name="question5">A. Database Table<br>
      <input type="radio" name="question5" >B. Database<br>
      <input type="radio" name="question5">C. Table Database<br>
      <input type="radio" name="question5"id="correct5">D. Table <br><br>

      <li> What is the purpose of indexing in MySQL?</li>
      <input type="radio" name="question6">A. To store duplicate values efficiently<br>
      <input type="radio" name="question6" id="correct6">B.  To enhance data retrieval speed<br>
      <input type="radio" name="question6">C.  To enforce data uniqueness<br>
      <input type="radio" name="question6">D.  To organize data in tables
<br><br>

      <li> Which type of index is suitable for searching within large text fields?

</li>
      <input type="radio" name="question7">A. B-tree Index<br>
      <input type="radio" name="question7" >B. Unique Index<br>
      <input type="radio" name="question7"id="correct7">C. Full-Text Index<br>
      <input type="radio" name="question7">D. Spatial Index <br><br>

      <li>What does a Unique Index ensure in MySQL?</li>
      <input type="radio" name="question8"id="correct8">A.  Data uniqueness in indexed columns <br>
      <input type="radio" name="question8">B. Efficient range queries<br>
      <input type="radio" name="question8" >C. Sorting data in ascending order<br>
      <input type="radio" name="question8">D. Enforcing foreign key relationships<br><br>
      
      <li>Which SQL clause benefits the most from the use of indexes?</li>
      <input type="radio" name="question9">A. GROUP BY<br>
      <input type="radio" name="question9">B.  ORDER BY<br>
      <input type="radio" name="question9" id="correct9">C. WHERE<br>
      <input type="radio" name="question9">D. HAVING<br><br>
      

      <li>  In which scenario is a B-tree index most effective?
</li>
      <input type="radio" name="question10" >A. Searching within large text fields <br>
      <input type="radio" name="question10">B. Ensuring data uniqueness<br>
	  <input type="radio" name="question10"id="correct10" >C.  Handling equality and range queries<br>
      <input type="radio" name="question10">D.  Storing spatial data<br><br>
     


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