<!DOCTYPE html">
<html>
    <body>
        
		
        <?php
		// Code below delete all files even hidden files also from a folder
			if(isset($_POST['submit'])) // collect form data after submitting an HTML form with method="post" 
			{
				$path = 'C:\Users\HIGHLY~1\AppData\Local\Temp'; // assigning path of the folder to a variable
				$files = glob($path.'\*.json'); // get all file of the specified folder and return an array 

				foreach($files as $file){ // iterate through each item of an array named as 'files'
					if(is_file($file)) // check whether the 'files array' have any files to delete or not 
						unlink($file); // delete file by unlinking them 
				}//leaving for loop
					
				echo "<h1 align='center'>All files are deleted successfully!</h1>";
			}//exiting if block
			else
				echo "Error Occured: Unable to Clear Cache !" 
		
					
        ?>
	</body>
</html>