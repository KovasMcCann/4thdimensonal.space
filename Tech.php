<!doctype html>
<title>Cyberia</title>

<?php include "bar.php"?>

<main style="margin: auto">
<p style="font-size: 85px; text-align: center; margin: 3vw;">
Cyberia<span style="font-size: 85px;" class="blinking-cursor">|</span>
</p>

<span style="display: flex; flex-wrap: wrap; justify-content: center; text-align: center;"> 
<span style="width: 150px; height: 200px; padding: 10px; margin: 5px; border: 2px solid #6400a9; background-color: #02000a; background-image: url('../img/privacy.png');   background-size: 100% 100%;  overflow-y: auto; overflow-x: hidden; word-wrap: break-word;">
<h1 style="color: #fff">
<a>Triangulate</a>
</h1>
<h2 style="color: #fff">
A discusion about Privacy
</h2>
</span>
<span style="width: 150px; height: 200px; padding: 10px; margin: 5px; border: 2px solid #6400a9; background-color: #02000a; background-image: url('../img/linux.png');   background-size: 100% 100%;  overflow-y: auto; overflow-x: hidden; word-wrap: break-word;">
<h1 style="color: #fff">
Linux
</h1>
<h2 style="color: #fff">
Someone has to eat the apples and look out the windows
</h2>
</span>
<span style="width: 150px; height: 200px; padding: 10px; margin: 5px; border: 2px solid #6400a9; background-color: #02000a; background-image: url('../img/bsd.png');   background-size: 100% 100%;  overflow-y: auto; overflow-x: hidden; word-wrap: break-word;">
<h1 style="color: #fff">
BSD
</h1>
<h2 style="color: #fff">
A discusion about BSD
</h2>
</span>
<span style="width: 150px; height: 200px; padding: 10px; margin: 5px; border: 2px solid #6400a9; background-color: #02000a; background-image: url('../img/tech.jpg');   background-size: 100% 100%;  overflow-y: auto; overflow-x: hidden; word-wrap: break-word;">
<h1 style="color: #fff">
News
</h1>
<h2 style="color: #fff">
The best Tech news on the internet
</h2>
</span>
<?php 
exec("ls img/general/ | shuf | head -n 1", $file);
echo "<span style='width: 150px; height: 200px; padding: 10px; margin: 5px; border: 2px solid #6400a9; background-color: #02000a; background-image: url("; echo '../img/general/'.$file[0].''; echo ");   background-size: 100% 100%;  overflow-y: auto; overflow-x: hidden; word-wrap: break-word;'>";
?>
<h1 style="color: #fff">
<a href="../Cyberia/General.php" style="text-decoration: none; color: #ffffff;">
General
</a>
</h1>
<h2 style="color: #fff">
A general discusion of tech 
</h2>
</span>
</span>
</h1>
</main>
</body>
<footer>
</footer>
