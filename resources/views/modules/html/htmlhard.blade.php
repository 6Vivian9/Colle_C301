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
            <a href="videos" class="nav_link">
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
        <br>
      <p><a href="library">library</a> > <a href="htmlhard">HTML Hard Module</a></p>
    </div>
        <div class="flex-container">
          <div class="box">

          <h2 style="text-align:center;">What is HTML?</h2>
                <br>
                <ul>
                  <li>HTML, the HyperText Markup Language, serves as the standard markup language for documents intended for display in web browsers. It plays a crucial role in defining the meaning and structure of web content. Often complemented by technologies like Cascading Style Sheets (CSS) and scripting languages such as JavaScript, HTML documents are received by web browsers from servers or local storage and transformed into multimedia web pages.</li>
                  <br>
                  <li>HTML outlines the semantic structure of a web page and originally included cues for its visual appearance. HTML elements form the fundamental building blocks of web pages, allowing the embedding of images, interactive forms, and other objects. These elements provide a structured approach to document creation, specifying the semantics for text elements like headings, paragraphs, lists, links, and quotes. Tags, enclosed in angle brackets, delineate HTML elements, with tags like (img) and (input) directly introducing content.</li>
                  <br>
                  <li>Browsers do not display HTML tags but use them to interpret the content of the page. Additionally, HTML can incorporate programs written in scripting languages such as JavaScript, influencing the behavior and content of web pages. The inclusion of CSS defines the visual look and layout of the content.</li>
                  <br>
                  <li>The World Wide Web Consortium (W3C), formerly responsible for HTML and currently overseeing CSS standards, has advocated for the use of CSS over explicit presentational HTML since 1997. HTML5, a variant of HTML, is employed for displaying video and audio content, primarily utilizing the (canvas) element in conjunction with JavaScript.</li>
                </ul>
                <br>
                <h2 style="text-align:center;">Markup</h2> 
                <br>
                <p>HTML markup consists of several key components, including those called tags (and their attributes), character-based data types, character references and entity references. HTML tags most commonly come in pairs like (h1) and (/h1), although some represent empty elements and so are unpaired, for example (img). The first tag in such a pair is the start tag, and the second is the end tag (they are also called opening tags and closing tags).</p>
                <p>Another important component is the HTML document type declaration, which triggers standards mode rendering.</p>
                <p>The following is an example of the classic "Hello, World!" program:</p>
                <img src="{{ asset('assets/images/htmlhard1.png') }}">
                <p>The text between (html) and (/html) describes the web page, and the text between (body) and (/body) is the visible page content. The markup text (title) This is a title (/title) defines the browser page title shown on browser tabs and window titles and the tag (div) defines a division of the page used for easy styling. Between (head) and (/head), a (meta) element can be used to define webpage metadata.</p>
                <p>The Document Type Declaration (!DOCTYPE html) is for HTML5. If a declaration is not included, various browsers will revert to "quirks mode" for rendering.</p>
                <br>
                <br>
                <h2 style="text-align:center;">Elements</h2>
                <br>
                <img src="{{ asset('assets/images/htmlhard2.png') }}">
                <p>HTML documents imply a structure of nested HTML elements. These are indicated in the document by HTML tags, enclosed in angle brackets thus: (p).</p>
                <p>In the simple, general case, the extent of an element is indicated by a pair of tags: a "start tag" (p) and "end tag" (/p). The text content of the element, if any, is placed between these tags.</p>
                <p>Tags may also enclose further tag markup between the start and end, including a mixture of tags and text. This indicates further (nested) elements, as children of the parent element.</p>
                <p>The start tag may also include the element's attributes within the tag. These indicate other information, such as identifiers for sections within the document, identifiers used to bind style information to the presentation of the document, and for some tags such as the (img) used to embed images, the reference to the image resource in the format like this: (img src="example.com/example.jpg")</p>
                <p>Some elements, such as the line break (br /), or (br /) do not permit any embedded content, either text or further tags. These require only a single empty tag (akin to a start tag) and do not use an end tag.</p>
                <p>Many tags, particularly the closing end tag for the very commonly used paragraph element (p), are optional. An HTML browser or other agent can infer the closure for the end of an element from the context and the structural rules defined by the HTML standard. These rules are complex and not widely understood by most HTML authors.</p>
                <p>The general form of an HTML element is therefore: (tag attribute1="value1" attribute2="value2")''content''(/tag). Some HTML elements are defined as empty elements and take the form (tag attribute1="value1" attribute2="value2"). Empty elements may enclose no content, for instance, the (br /) tag or the inline (img) tag. The name of an HTML element is the name used in the tags. The end tag's name is preceded by a slash character, /, and that in empty elements the end tag is neither required nor allowed. If attributes are not mentioned, default values are used in each case.</p>
                <h6>Element examples</h6>
                <p>Header of the HTML document: (head)...(/head). The title is included in the head, for example:</p>
                <img src="{{ asset('assets/images/htmlhard3.png') }}">
                <h6>Headings</h6>
                <p>HTML headings are defined with the (h1) to (h6) tags with H1 being the highest (or most important) level and H6 the least:</p>
                <img src="{{ asset('assets/images/htmlhard4.png') }}">
                <p>The effects are:</p>
                <h1>Heading level 1</h1>
                <h2>Heading level 2</h2>
                <h3>Heading level 3</h3>
                <h4>Heading level 4</h4>
                <h5>Heading level 5</h5>
                <h6>Heading level 6</h6>
                <br>
                <p>CSS can drastically change the rendering.</p>
                <h6>Paragraphs:</h6>
                <img src="{{ asset('assets/images/htmlhard5.png') }}">
                <h6>Line breaks</h6>
                <p>(br /). The difference between (br /) and (p) is that (br /) breaks a line without altering the semantic structure of the page, whereas (p) sections the page into paragraphs. The element (br /) is an empty element in that, although it may have attributes, it can take no content and it may not have an end tag.</p>
                <img src="{{ asset('assets/images/htmlhard6.png') }}">
                <p>This is a link in HTML. To create a link the (a) tag is used. The href attribute holds the URL address of the link.</p>
                <img src="{{ asset('assets/images/htmlhard7.png') }}">
                <h6>Inputs</h6>
                <p>There are many possible ways a user can give input/s like:</p>
                <img src="{{ asset('assets/images/htmlhard8.png') }}">
                <h6>Comments:</h6>
                <img src="{{ asset('assets/images/htmlhard9.png') }}">
                <p>Comments can help in the understanding of the markup and do not display in the webpage.</p>
                <h6>There are several types of markup elements used in HTML:</h6>
                <ul>
                  <li>Structural markup indicates the purpose of text
                    <p>- For example, (h2) Golf (/h2) establishes "Golf" as a second-level heading. Structural markup does not denote any specific rendering, but most web browsers have default styles for element formatting. Content may be further styled using Cascading Style Sheets (CSS).</p>
                  </li>
                  <li>Presentational markup indicates the appearance of the text, regardless of its purpose
                    <p>- For example, (b) bold text (/b) indicates that visual output devices should render "boldface" in bold text, but gives a little indication what devices that are unable to do this (such as aural devices that read the text aloud) should do. In the case of both (b) bold text (/b) and (i) italic text (/i), there are other elements that may have equivalent visual renderings but that are more semantic in nature, such as (strong) strong text (/strong) and (em) emphasized text (/em) respectively. It is easier to see how an aural user agent should interpret the latter two elements. However, they are not equivalent to their presentational counterparts: it would be undesirable for a screen reader to emphasize the name of a book, for instance, but on a screen, such a name would be italicized. Most presentational markup elements have become deprecated under the HTML 4.0 specification in favor of using CSS for styling.</p>
                  </li>
                  <li>Hypertext markup makes parts of a document into links to other documents
                    <p>- An anchor element creates a hyperlink in the document and its href attribute sets the link's target URL. For example, the HTML markup (a href="https://en.wikipedia.org/") Wikipedia (/a), will render the word "Wikipedia" as a hyperlink. To render an image as a hyperlink, an img element is inserted as content into the a element. Like br, img is an empty element with attributes but no content or closing tag. (a href="https://example.org")(img src="image.gif" alt="descriptive text" width="50" height="50" border="0")(/a).</p>
                  </li>
                </ul>
                <h2 style="text-align:center;">Data types</h2>
                <br>
                <p>HTML defines several data types for element content, such as script data and stylesheet data, and a plethora of types for attribute values, including IDs, names, URIs, numbers, units of length, languages, media descriptors, colors, character encodings, dates and times, and so on. All of these data types are specializations of character data.</p>
                <br>
                <h2 style="text-align:center;">Document type declaration</h2>
                <br>
                <p>HTML documents are required to start with a Document Type Declaration (informally, a "doctype"). In browsers, the doctype helps to define the rendering mode—particularly whether to use quirks mode.</p>
                <p>The original purpose of the doctype was to enable the parsing and validation of HTML documents by SGML tools based on the Document Type Definition (DTD). The DTD to which the DOCTYPE refers contains a machine-readable grammar specifying the permitted and prohibited content for a document conforming to such a DTD. Browsers, on the other hand, do not implement HTML as an application of SGML and as consequence do not read the DTD.</p>
                <p>HTML5 does not define a DTD; therefore, in HTML5 the doctype declaration is simpler and shorter:</p>
                <img src="{{ asset('assets/images/htmlhard10.png') }}">
                <p>An example of an HTML 4 doctype</p>
                <img src="{{ asset('assets/images/htmlhard11.png') }}">
                <p>This declaration references the DTD for the "strict" version of HTML 4.01. SGML-based validators read the DTD in order to properly parse the document and to perform validation. In modern browsers, a valid doctype activates standards mode as opposed to quirks mode.</p>
                <p>In addition, HTML 4.01 provides Transitional and Frameset DTDs, as explained below. The transitional type is the most inclusive, incorporating current tags as well as older or "deprecated" tags, with the Strict DTD excluding deprecated tags. The frameset has all tags necessary to make frames on a page along with the tags included in transitional type.</p>
                <br>
                    <br><br>
<h2 style="text-align:left;">Take Quiz:</h2>
<br>
<h5 onclick="htmlhard()">Click Me To Take Quiz</h5>
            </div>
        </div>
      </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>