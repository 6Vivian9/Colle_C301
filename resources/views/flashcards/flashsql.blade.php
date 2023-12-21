<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Favicon.png') }}">

		<title>Flashcards</title>
		<link rel="stylesheet" href="{{ asset('assets/css/flashcard4.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/flashcard.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/flashcard2.css') }}" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>  
<body >
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

			<!-- end -->
			
		  <!-- Sidebar Open / Close -->
		  <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> ‎ ‎ ‎ ‎ ‎ ‎ </span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> ‎ ‎ ‎ ‎ ‎ ‎ </span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
	<div class="content">
	<p><a href="flashcards">Flashcards</a> > <a href="flashsql">MYSQL FlashCards</a></p>
    </div>
    <main>
<div class="flash_container">
		<!-- Title -->
		<h1>FLASHCARDS GUESSING GAME</h1>

			<div class="cards_container">
		
				<!-- First Card -->	
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does SQL stand for?</p></div>
				   <div class="back"><p>Structured Query Language.</p></div>		
				</div>		
				</div>

		<!-- Second Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "SELECT" statement in SQL?</p></div>
				   <div class="back"><p>It is used to retrieve data from a database table.</p></div>		
				</div>		
				</div>

		<!-- Third Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the difference between "INNER JOIN" and "OUTER JOIN" in SQL? </p></div>
				   <div class="back"><p>INNER JOIN" returns only the matched records between two tables, while "OUTER JOIN" returns both matched and unmatched records from the specified tables.</p></div>		
				</div>		
				</div>

		<!-- Fourth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the SQL statement used to add a new record to a table?</p></div>
				   <div class="back"><p>"INSERT INTO table_name (column1, column2, ...) VALUES (value1, value2, ...)".</p></div>		
				</div>		
				</div>

		<!-- Fifth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does the term "primary key" mean in SQL?</p></div>
				   <div class="back"><p> It is a unique identifier for each record in a table, ensuring its uniqueness and serving as a reference point for other tables.</p></div>		
				</div>		
				</div>

		<!-- Sixth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "GROUP BY" clause in SQL?</p></div>
				   <div class="back"><p>It is used to group rows based on specified columns, enabling aggregation functions like COUNT, SUM, AVG, etc</p></div>		
				</div>		
				</div>

		<!-- Seventh Card -->	
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the SQL statement used to delete records from a table?</p></div>
				   <div class="back"><p> "DELETE FROM table_name WHERE condition".</p></div>		
				</div>		
				</div>

		<!-- Eigth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the difference between "COUNT()" and "COUNT(column_name)" in SQL?</p></div>
				   <div class="back"><p>"COUNT()" counts all rows in a table, while "COUNT(column_name)" counts only the non-null values in the specified column.</p></div>		
				</div>		
				</div>

		<!-- Ninth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "ORDER BY" clause in SQL?</p></div>
				   <div class="back"><p> It is used to sort the retrieved data based on specified columns in ascending (default) or descending order.</p></div>		
				</div>		
				</div>

		<!-- Tenth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>Which SQL statement is used to retrieve data from a database?</p></div>
				   <div class="back"><p>The SQL statement used to retrieve data from a database is the SELECT statement.</p></div>		
				</div>		
				</div>

		<!-- Eleventh Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the SQL statement "INSERT INTO"?</p></div>
				   <div class="back"><p>The "INSERT INTO" statement is used in SQL to add new records or rows into a database table.</p></div>		
				</div>		
				</div>

		<!-- Twelfth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is a primary key in a database table?</p></div>
				   <div class="back"><p>A primary key is a column or a combination of columns that uniquely identifies each row in a database table.</p></div>		
				</div>		
				</div>

			</div>
		</div>
	</main>
	
    <script src="{{ asset('assets/js/library.js') }}"></script>

</body>

</html>