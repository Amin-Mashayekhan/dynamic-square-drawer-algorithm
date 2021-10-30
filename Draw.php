<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="Draw.css">
	</head>
	<body>

		<form method="post">
			Height: 	<input type="number" name="height" placeholder="Enter height number" value="10">
			Fill 			<input type="radio" name="fill" value=1 checked>
			Border 	<input type="radio" name="fill" value=0>
			<input type="submit"  value="Draw">
		</form>

		<?php
			if ($_SERVER["REQUEST_METHOD"]== "POST")
			 {
			 	$height =$_POST['height'];
			 	$fill =$_POST['fill'];
				// var_dump($fill);

		 		 if (empty($height))
			 	 {
			 		echo "Height is empty";
			 		return;
			 	 }
				else
			 	 {
			 			draw_square($height , $fill);
			 	 }

			 }

			function draw_square($_height = 5 , $_fill = true )
			{

					echo('<br><pre>');
					for ($row=0; $row <$_height ; $row++)
					 {
						for ($col=0; $col <$_height ; $col++)
						 {
						 	if ($_fill)
						   	 {
						   	 		echo "*";
						 	 }
						 	 else
						 	 {
						   	 		if ($col==0 || $col==$_height-1 || $row==0 || $row==$_height-1)
						   	 		 {
						 	 			echo "*";
						 	 		 }
						 	 		 else
						 	 		 {
						 	 		 	echo"  ";
						 	 		 }
							 }

						 }
						 echo("<br>");
					 }
					 echo('</pre>');

			  }

		 ?>

        	        <footer>
        		                <br>

                          Guided by:  <a target="_blank" href="www.ermile.com"> : Mr.Javad Evazzadeh</a>
        		                <br>
                        		Designed by <a target="_blank" href="www.hayate-ensani.com">Mohammad amin Mashayekhan.</a>
        	        </footer>









	</body>
</html>