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
    <link rel="stylesheet" href="{{ asset('assets/css/module.css') }}" />
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
       <img src="{{ asset('assets/images/Bea.jpg') }}" alt="" class="profile" />
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
                
                <h2 style="text-align:left;">What is HTML?</h2>
                <br>
                <ul>
                  <li>HTML stands for Hyper Text Markup Language</li>
                  <li>HTML is the standard markup language for creating Web pages</li>
                  <li>HTML describes the structure of a Web page</li>
                  <li>HTML consists of a series of elements</li>
                  <li>HTML elements tell the browser how to display the content</li>
                  <li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>
</ul>
<br>
<h4 style="text-align:left;">A Simple HTML Document</h4>
<b>Examples:</b>

 // image here 


<b>Example Explained</b>

<ul>
  <li>The < !DOCTYPE html> declaration defines that this document is an HTML5 document</li>
  <li>The < html> element is the root element of an HTML page</li>
  <li>The < head> element contains meta information about the HTML page</li>
  <li>The < title> element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)</li>
  <li>The < body> element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
  <li>The < h1> element defines a large heading</li>
  <li>The < p> element defines a paragraph</li>
</ul>
<br>
<h4 style="text-align:left;">A Simple HTML Document</h4>
<b>What is an HTML Element?</b>
<p>An HTML element is defined by a start tag, some content, and an end tag:</p>

// image here 

<p><b>Note:</b> Some HTML elements have no content (like the <br> element). These elements are called empty elements. Empty elements do not have an end tag!</p>

<br>
<h4 style="text-align:left;">Web Browsers</h4>
<p>The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them correctly.</p>
<p>A browser does not display the HTML tags, but uses them to determine how to display the document:</p>

// image here 

<br>
<h4 style="text-align:left;">HTML Page Structure</h4>
<p>Below is a visualization of an HTML page structure:</p>

// image here 

<p><b>Note:</b> The content inside the < body> section will be displayed in a browser. The content inside the < title> element will be shown in the browser's title bar or in the page's tab</p>

<br>
<h4 style="text-align:left;">HTML History</h4>
<p>Since the early days of the World Wide Web, there have been many versions of HTML:</p>

// image here 

<br>
<h2 style="text-align:left;">HTML Basic Examples</h2>
<h4 style="text-align:left;">HTML Documents</h4>
<p>All HTML documents must start with a document type declaration: < !DOCTYPE html>.</p>
<p>The HTML document itself begins with < html> and ends with < /html>.</p>
<p>The visible part of the HTML document is between < body> and < /body>.</p>

// image here 

<br>
<h4 style="text-align:left;">The <!DOCTYPE> Declaration</h4>
<p>The <!DOCTYPE> declaration represents the document type, and helps browsers to display web pages correctly.</p>
<p>It must only appear once, at the top of the page (before any HTML tags).</p>
<p>The <!DOCTYPE> declaration is not case sensitive.</p>
<p>The <!DOCTYPE> declaration for HTML5 is:</p>
<p>< !DOCTYPE html></p>

<br>
<h4 style="text-align:left;">HTML Headings</h4>
<p>HTML headings are defined with the < h1> to < h6> tags.</p>
<p>< h1> defines the most important heading. < h6> defines the least important heading: </p>
<br>
<b>Examples:</b>

// image here 

<br>
<h4 style="text-align:left;">HTML Paragraphs</h4>
<p>HTML paragraphs are defined with the <p> tag:</p>

<b>Example</b>

// image here 

<br>
<h4 style="text-align:left;">HTML Links</h4>
<p>HTML links are defined with the < a> tag:</p>

<b>Example</b>

<p>< a href="https://www.w3schools.com">This is a link< /a></p>

<p>The link's destination is specified in the href attribute. </p>
<p>Attributes are used to provide additional information about HTML elements.</p>
<p>You will learn more about attributes in a later chapter.</p>

<br>
<h4 style="text-align:left;">HTML Images</h4>
<p>HTML images are defined with the < img> tag.</p>
<p>The source file (src), alternative text (alt), width, and height are provided as attributes:</p>
<b>Example</b>
<p>< img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142"></p>

<br>
<h4 style="text-align:left;">How to View HTML Source</h4>
<p>Have you ever seen a Web page and wondered "Hey! How did they do that?"</p>
<B>View HTML Source Code:</b>
<p>Click CTRL + U in an HTML page, or right-click on the page and select "View Page Source". This will open a new tab containing the HTML source code of the page.</p>
<br>
<b>Inspect an HTML Element:</b>
<p>Right-click on an element (or a blank area), and choose "Inspect" to see what elements are made up of (you will see both the HTML and the CSS). You can also edit the HTML or CSS on-the-fly in the Elements or Styles panel that opens.</p>
 
<br><br>
<h2 style="text-align:left;">Take Quiz:</h2>
<br>
<h5 onclick="htmleasy()">Click Me To Take Quiz</h5>


            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>