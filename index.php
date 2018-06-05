<!doctype html>
<html>
    <head>
        <style type="text/css">

            body {font-family:Arial, Sans-Serif;}

            #container {width:300px; margin:0 auto;}

            /* Nicely lines up the labels. */
            form label {display:inline-block; width:140px;}

            /* You could add a class to all the input boxes instead, if you like. That would be safer, and more backwards-compatible */
            form input[type="text"],
            form input[type="password"],
            form input[type="email"] {width:160px;}

            form .line {clear:both;}
            form .line.submit {text-align:right;}

        </style>
    </head>
    <body>
	
	<?php
include_once("configuration.php");

if(isset($_GET['msg']) )
{
	if($_GET['msg'] == "as1d")
	{
		 echo "<p style='color:green;'>Recored added successfully</p>";
	}
	else if($_GET['msg'] == "af3d")
	{
		  echo "<p style='color:red;'>Please enter data</p>";
	}
	else{
		echo "<p style='color:red;'>An unexpected error occurred</p>";
	}
}

?>
        <div id="container">
            <form method="post" action="<?php echo $insert_url; ?>">
                <h1>Add details</h1>
				
                <div class="line"><label for="username">First Name : </label><input type="text" id="fname" name="fname" /></div>
                <div class="line"><label for="pwd">Second Name  : </label><input type="text" id="sname" name="sname" /></div>
                <!-- You may want to consider adding a "confirm" password box also -->
                <div class="line"><label for="surname">Email *: </label><input type="email" id="email" name="email" /></div>
                <div class="line"><label for="other_names">Mobile *: </label><input type="number" id="mobile" name="mobile" /></div>
                
                <div class="line submit"><input type="submit" value="Submit" /></div>

                
            </form>
        </div>
    </body>
</html>