<!doctype html>
<title>District 6616</title>

<?php include "bar.php"?>

<main style="margin: auto">
<p style="font-size: 85px; text-align: center; margin: 3vw;">
District 6616<span style="font-size: 85px;" class="blinking-cursor">|</span>
</p>

<p style="text-align: center; margin-bottom: 0px;">
A image board hosted on tor 
</p>


<h3 style="font-size: 35px; background-color: #00050a;">
Rules
</h3>

<ul>
<li>
Don't post inaproprate content no henti, NSFW or links to such things.
</li>
<li>
Be nice don't be a troll this is a community not a wastland
</li>
<li>
Flooding is not permitted. We define flooding as posting similar posts more than 3 times per hour, making a thread on a topic for which a thread already exists, or posting in such a way that it significantly changes the composition of a board. Common sense will be utilized.
</li>
<li>
Adhere to the same standards of behavior online that you follow in real life
</li>
<li>
forgiv other people mistakes
</li>
</ul>

<h3 style="font-size: 35px; background-color: #00050a;">
Boards
</h3>

<ul style=""> 
<li>
cyberia (tech)
</li>
<ul>
<li>
triangulate (privacy)
</li>
<li>
Linux
</li>
<li>
BSD
</li>
<li>
News
</li>
<li>
General
</li>
</ul>
<li>
Music
</li>
<li>
void (lounge)
</li>
<li>
voyeger (Webpage links)
</li>
<ul>
<li>
Clearnet
</li>
<li>
Tor 
</li>
</ul>
<li>
Desecent (diving)
</li>
<li>
Embasador (site updaates)
</li>
</ul>

<h3 style="font-size: 35px; background-color: #00050a;">
Stats
</h3>

<?php
 #Storage graph
 echo('<h2 style="color:  #1aff1a ">');
 echo('Storage');
 echo('<h2 style="color:  #1aff1a ">');
 exec("df -h | grep '/dev/sda3'  | awk '/^'/'dev {print $3 }' | sed 's/G//g'", $zzzz);
 exec("df -h | grep '/dev/sda3'  | awk '/^'/'dev {print $2 }' | sed 's/G//g'", $zzz);
 echo("$zzzz[0]G/$zzz[0]G");
  echo('</h2>');
 echo('<meter id="storage" value="'.$zzzz[0].'" min="0" max="'.$zzz[0].'">2 out of 10</meter><br>');
 ?>

 <?php
 echo('<h2 style="color:  #1aff1a ">');
 echo('RAM');
 exec("free -h | awk '/^Mem:/ {print $2}' | sed 's/Gi//g'",$total);
 exec("free -h | awk '/^Mem:/ {print $3}' | sed 's/Gi//g'",$used);
 echo('</h2>');
 echo('<h2 style="color:  #1aff1a ">');
 echo("$used[0]Gi/$total[0]Gi");
 echo('</h2>');
 echo('<meter id="storage" value="'.$used[0].'" min="0" max="'.$total[0].'">2 out of 10</meter><br>');
?>



</main>
</body>
<footer>
</footer>
