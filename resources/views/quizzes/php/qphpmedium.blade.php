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
      <h1 style="text-align:center;">PHP MEDIUM QUIZ</h1>
      <br>
        <ol>

         <li> What was the original meaning of the abbreviation PHP? </li>
      <input type="radio" name="question1"id="correct1"> A.  Personal Homepage<br>
      <input type="radio" name="question1" >B. Preprocessor Hypertext<br>
      <input type="radio" name="question1">C. Programming Hyper Platform<br>
      <input type="radio" name="question1">D. Preprocessor Hypothesis
 <br><br>

      <li>What does PHP stand for now as a recursive acronym?</li>
      <input type="radio" name="question2"> A. Preprocessor Hyperlink<br>
      <input type="radio" name="question2">B. Hypertext Processor<br>
      <input type="radio" name="question2" id="correct2">C. Hypertext Preprocessor<br>
      <input type="radio" name="question2">D. Personal Homepage<br><br>

      <li>Which engine does PHP primarily run on?</li>
      <input type="radio" name="question3">A. Apache<br>
      <input type="radio" name="question3"id="correct3">B. Zend<br>
      <input type="radio" name="question3">C. Parrot<br>
      <input type="radio" name="question3" >D. HPVM<br><br>

      <li>What is one of the advantages of PHP's platform independence?</li>
      <input type="radio" name="question4">A. Limited OS support<br>
      <input type="radio" name="question4" >B. OS-specific code<br>
      <input type="radio" name="question4"id="correct4">C. Platform-independent<br>
      <input type="radio" name="question4">D. Windows-only compatibility<br><br>

      <li> Which PHP version remains the most widely used as of now? </li>
      <input type="radio" name="question5">A. Version 1<br>
      <input type="radio" name="question5" id="correct5">B. Version 7<br>
      <input type="radio" name="question5">C. Version 8<br>
      <input type="radio" name="question5">D. Version 26 <br><br>

      <li>What is the primary purpose of the XAMPP and WAMP servers?</li>
      <input type="radio" name="question6">A. Graphic design<br>
      <input type="radio" name="question6" id="correct6">B.  Web server hosting<br>
      <input type="radio" name="question6">C.  Data analysis<br>
      <input type="radio" name="question6">D.  Video editing
<br><br>

      <li> Which of the following companies uses PHP to power its site and contributed to the community with Hip Hop for PHP?

</li>
      <input type="radio" name="question7">A. Google<br>
      <input type="radio" name="question7" id="correct7">B. Facebook<br>
      <input type="radio" name="question7">C. Microsoft<br>
      <input type="radio" name="question7">D. Twitter<br><br>

      <li>What is the purpose of the WAMP and XAMPP servers in PHP development?</li>
      <input type="radio" name="question8">A.  Database management<br>
      <input type="radio" name="question8">B. PHP compilation<br>
      <input type="radio" name="question8" id="correct8">C. Web server hosting<br>
      <input type="radio" name="question8">D. Code debugging<br><br>
      
      <li>Which content management system (CMS) is NOT built in PHP?</li>
      <input type="radio" name="question9">A.  WordPress<br>
      <input type="radio" name="question9">B.  Drupal<br>
      <input type="radio" name="question9" >C.  Joomla<br>
      <input type="radio" name="question9"id="correct9">D. Django<br><br>
      

      <li> .How do you embed PHP in HTML for dynamic content?
</li>
      <input type="radio" name="question10" >A. Using { }<br>
      <input type="radio" name="question10">B. Using <!-- --> <br>
	  <input type="radio" name="question10" >C.  By placing it in a <php> tag<br>
      <input type="radio" name="question10"id="correct10">D.  Between <?php ?> tags<br><br>
     


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
     
