<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" >
  <style type="text/css">
     
    input[type=password]{
      width: 25%;
      background-color: white;
      color: black;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      }
      input[type=email]{
        width: 25%;
        background-color: white;
        color: black;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      body{
        background-image: url(charles.jfif);
        background-size: auto;
        font-size: 2em;
        text-align: center;
      }
      header{
        color: maroon;
      }
      label{
        color: grey;
      }
     
      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 10%;
        opacity: 0.9;
      }
      header{
        text-align: center;
        font-size: 3em;
      }

  </style>	
</head>
<body>
	   
		<form action="processlogin.php" method="POST">
		  <header>Login Details</header>
			
		

		      <div>
		        <label for="email"><b>Email Address :</b></label><br>
            <input type="email" name="email" id="email">
          </div>

          <div>
            <label for="pword"><b>Password :</b></label><br>
            <input type="password" name="pword" id="pword">
          </div>

          
          <div>
            <button type="submit" name="login" value="login"></a>Login</button>
          </div>
     
        
	  </form>
	   
</body>
</html>