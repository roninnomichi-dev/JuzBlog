<?php
session_start();
require_once 'myconf.php';
include 'Parsedown.php';
$parsedown = new Parsedown();
$page = "markdown cheatsheet";



include 'head.html.php';
?>
</div>
<div class="container">
  <h1 class="display-2">markdown</h1>
  <p>from <a href="http://assemble.io/docs/Cheatsheet-Markdown.html">http://assemble.io/docs/Cheatsheet-Markdown.html</a></p>
  <br>
  <?php  $md = fopen("markdown.md", "r") or die($error = "Unable to open file!");
echo $parsedown->text(fread($md, filesize('markdown.md')));
fclose($md); ?>
</div>






<?php include 'foot.html.php'; ?>
