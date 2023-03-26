<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body {
 background-image: url(./img/Linux-black-background.png);
 background-repeat: no-repeat, repeat;
 background-color: black;

}
input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 0 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #d76e18;
  width: 200px;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 45%;
  margin-top: 80px;
  font-size: 20px;
}

input[type=submit]:hover {
  background-color: #45a049;

}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-top: 200px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}



/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
  }
}
a:link,  a:visited {
  background-color: rgb(228, 126, 31);
  color: rgb(255, 255, 255);
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  padding-top: 10px;
}

a:hover, a:active {
  background-color: green;
  color: white;
  position: le;
}
</style>
</head>
<body>
<div class="header">
        <a href="./index.php" >HOME</a>
        
    </div>
    <div><a href="./users/get.php" style="float: right; margin-top: -28px;  font-weight: bold;">Get list of users</a></div>

<div class="container">
    <h1 style="text-align: center;color: rgba(16, 32, 3, 0.984);">Please enter your name</h1>

  <form action="resolver.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname"></label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="username" placeholder="Your name..">
      </div>
    </div>
   

   
    
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
