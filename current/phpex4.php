// CHAPTER 5: PRACTICAL PHP

<?php

printf("Hello. My name is %s, I am %d years old, and that's %X in hexadecimal and %o in octal", 'Joe', 24, 24, 24);
echo "hello<br>";
printf("<span style='color:#%X%X%X'>Hello again</span>", 65, 126, 245);

echo "<pre>";

printf("The result is: $%15f\n", 123.42/15); // pads 15 spaces

printf("The result is: $%015f\n", 123.42/15); // pads 15 spaces but filled with zeros

printf("The result is: $%15.2f\n", 123.42/15); // pads 15 spaces and to 2 decimal points of precision

printf("The result is: $%015.2f\n", 123.42/15); // pad 15 spaces with zeroes also 2 decimal pt precision 

printf("The result is: $%'@15.2f\n", 123.42/15); // pad 15 spaces with @ symbol and 2 decimal precision

$strang = "Poopdollar";

printf("The result is: [%12s]\n",        $strang);
printf("The result is: [%-12s]\n",  $strang);
printf("The result is: [%012s]\n",  $strang);
printf("The result is: [%'#12s]\n",  $strang);

$stt = "Rasmus Peterdoop";

printf("The result is: [%-12.8s]\n",  $stt);
printf("[%12.10s]\n", $stt);
printf("[%-'@12.10s]\n", $stt);

echo "</pre>";

$hexstring = sprintf("%X%X%X", 123, 35, 90);
echo $hexstring;

echo "balls<br>";
echo time();
echo time() + 7 * 24 * 60 * 60;
echo date("l F jS, Y - g:ia", time());

if (file_exists("testfile.txt")) echo "File exists";
else echo "File not in existence";

/*$nf = fopen("testfile.txt", "w") or die("Failed to create file");

$text = <<<_END
Line 1
Line 2
Line 3
_END;

fwrite($nf, $text) or die("Couldn't write to file");
fclose($nf);
echo "New file 'textfile.txt' written succcessfully!";*/

$readfile = fopen("testfile.txt", 'r') or die("nope");

$textfile = fread($readfile, 10);
fclose($readfile);
echo $textfile;

//copy("testfile.txt", "testfile2.txt") or die("you dun goofed");
// echo "file copied to testfile2.txt";

if (!copy("testfile.txt", "testfile3.txt")) echo "could not copy";
else echo "file cppied successfully";

//if (!rename("testfile2.txt", "testfile2.php")) echo "could not move";
//else echo "file changed successfully";

if (!rename("testfile3.txt", "textfile3.exe")) echo "could not rename";
else echo "file renamed successfully";

if (!unlink("textfile3.exe")) echo "could not delete file might not exist";
else echo "file testfile3.exe deleted";

$fh = fopen("testfile.txt", "r+") or die("lol nope not opening");
$text1 = fgets($fh);


/*
fseek($fh, 2, SEEK_SET);
fwrite($fh, "$text1") or die("couldnt write to file");
fclose($fh);

echo "file testfile.txt updated successfully";*/

if (flock($fh, LOCK_EX))
{
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text1") or die("Couldn't write to file");
flock($fh, LOCK_UN);
}

fclose($fh);
echo "File 'testfile' updated";

echo "<pre>";
echo file_get_contents("testfile.txt");
echo "</pre>";

// echo file_get_contents("www.theinternet.com")

// upload.php example




echo <<<_END
<html><head><title>PHP Form Upload</title></head><body>
<form method='post' action='' enctype='multipart/form-data'>
Select File: <input type='file' name='filename' size='10'>
<input type='submit' value='Upload'>
</form>
_END;

if ($_FILES)
{
$name = $_FILES['filename']['name'];
switch($_FILES['filename']['type'])
{
case 'image/jpeg': $ext = 'jpg'; break;
case 'image/gif': $ext = 'gif'; break;
case 'image/png': $ext = 'png'; break;
case 'image/tiff': $ext = 'tif'; break;
default: $ext = ''; break;
}
if ($ext)
{
$n = "image.$ext";
move_uploaded_file($_FILES['filename']['tmp_name'], $n);
echo "Uploaded Image '$name' as '$n':<br>";
echo "<img src='$n'>";
}
else echo "'$name' is not an accepted image file";
}
else echo "no image uploaded";

echo "</body></html>";

	
	
	
?>