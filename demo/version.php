<html>
   
   <head>
      <title>Lấy Source Code của một trang web trong PHP</title>
   </head>
   <body>
   
       <?php
        $all_lines = file('https://vietjack.com/');  
		foreach ($all_lines as $line_num => $line)  
		 {  
			echo "Dòng thứ {$line_num}: " . htmlspecialchars($line) . "<br>";  
		 } 
       ?>
       
   </body>
</html>