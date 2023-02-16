<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>GFG- Store Data</title>

    <style>
/* Importing the Roboto font from Google Fonts. */
@import url("https://fonts.googleapis.com/css?family=Roboto:400");

/* Set font of all elements to 'Roboto' */
* {
	font-family: 'Roboto', sans-serif;
	font-weight: 400;
}

/* Remove outline of all elements on focus */
*:focus {
	outline: 0;
}

body {
	background: whitesmoke;  /* Set background color to #263238*/
}

h3 {
	text-align: center;
}

/* Add styles to 'container' class */
.container {
	padding: 12px 24px 24px 24px;
	margin: 48px 12px;
	background: #E3F2FD;
	border-radius: 4px;
}

/* Add styles to 'label' selector */
label {
	font-size: 0.85em;
	margin-left: 12px;
}


/* Add styles to show 'focus' of selector */
input[type=text]:focus,input[type=email]:focus, textarea:focus {
	border: 1px solid green;
}

/* Add styles to the submit button */
input[type=submit] {
	background: #64B5F6;
	margin: 0 auto;
	outline: 0;
	color: white;
	border: 0;
	padding: 12px 24px;
	border-radius: 4px;
	transition: all ease-in-out 0.1s;
	position: relative;
	display: inline-block;
	text-align: center;
}

/* Add styles for 'focus' property */
input[type=submit]:focus {
	background: #A5D6A7;
	color: whitesmoke;
}

/* Style 'hover' property */
input[type=submit]:hover {
	background: #2196F3;
}

/* Align items to center of the 'div' with the class 'center' */
.center {
	text-align: center;
}
 
        </style>
</head>
  
<body>
    <div class="container">
    <center>
        <h1 style="background-color:#E3F2FD;">Contact Us</h1>
  
        <form action="insert.php" method="post"   >
              
              
<p>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </p>
  
  

  
              
              
              
<p>
                <label for="phone">Phone:</label>
                <input type="number" name="phone" id="phone">
            </p>
  
  
              
              
              
<p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </p>
  
  
              
            <input type="submit" value="Submit">
            </div>


        </form>
       
    </center>
</body>
  
</html>

</body>
</html>