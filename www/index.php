<style>
body{
background: rgb(14,14,14); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(14,14,14,1) 0%, rgba(125,126,125,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(14,14,14,1) 0%,rgba(125,126,125,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(14,14,14,1) 0%,rgba(125,126,125,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0e0e0e', endColorstr='#7d7e7d',GradientType=0 ); /* IE6-9 */

color: yellow;
font-family: Arial, Helvetica, sans-serif;
font-weight: bold;
}
</style>

<body>

<center>
<br />
<?php

echo gethostname();
echo "<br /><br />";

echo "server date/time = " . date('d/M/Y h:i:s a', time());;

?>
</center>
</body>

