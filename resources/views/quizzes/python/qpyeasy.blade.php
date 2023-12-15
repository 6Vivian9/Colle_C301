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
      <li> Who was created the Python? </li>
      <input type="radio" name="question1"> A.Henry Sy<br>
      <input type="radio" name="question1" id="correct1">B.Guido van Rossum
<br>
      <input type="radio" name="question1">C.James Gosling<br>
      <input type="radio" name="question1">D.Bill Joy
 <br><br>

      <li>When was the Python released?</li>
      <input type="radio" name="question2"id="correct2"> A.1991<br>
      <input type="radio" name="question2">B.1986<br>
      <input type="radio" name="question2" >C. 1999<br>
      <input type="radio" name="question2">D.1968<br><br>

      <li>It is used for? EXCEPT</li>
      <input type="radio" name="question3">A. Web development<br>
      <input type="radio" name="question3">B.Web Application<br>
      <input type="radio" name="question3">C.Software development<br>
      <input type="radio" name="question3" id="correct3">D.System scripting<br><br>

      <li>Scope that refers to the objects available in the current function</li>
      <input type="radio" name="question4">A.Global Scope<br>
      <input type="radio" name="question4" id="correct4">B.Local Scope<br>
      <input type="radio" name="question4">C.Module-level Scope<br>
      <input type="radio" name="question4">D.Outermost Scope<br><br>

      <li> Scope that refers to the global objects of the current module accessible in the program. </li>
      <input type="radio" name="question5">A.Local Scope<br>
      <input type="radio" name="question5" >B.Outermost Scope<br>
      <input type="radio" name="question5"id="correct5">C.Global Scope<br>
      <input type="radio" name="question5">D.Module-level Scope <br><br>

      <li>Scope that refers to the objects available throughout the code.</li>
      <input type="radio" name="question6">A.Local Scope<br>
      <input type="radio" name="question6" >B.Outermost Scope<br>
      <input type="radio" name="question6"id="correct6">C. Global Scope<br>
      <input type="radio" name="question6">D.Module-level Scope<br><br>

      <li>Scope that refers to all the built-in names callable in the program</li>
      <input type="radio" name="question7">A.Local Scope<br>
      <input type="radio" name="question7" >B.Outermost Scope<br>
      <input type="radio" name="question7"id="correct7">C.Global Scope<br>
      <input type="radio" name="question7">D.Module-level Scope<br><br>

      <li>What is PEP</li>
      <input type="radio" name="question8"id="correct8">A.Python Enhancement Proposal<br>
      <input type="radio" name="question8">B.Python Expose Potential<br>
      <input type="radio" name="question8" >C.Python Enhancement Person<br>
      <input type="radio" name="question8">D.Post-Exposure prophylaxis<br><br>
      
      <li>Python can be used on a server to create web applications?</li>
      <input type="radio" name="question9"id="correct9">A.True<br>
      <input type="radio" name="question9">B. False<br>
      <br>

      <li>Python can connect to database systems?</li>
      <input type="radio" name="question10" id="correct10">A.True<br>
      <input type="radio" name="question10">B.False<br>
     
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