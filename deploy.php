<?php
  $sitePathName = "mst3k.tv";
  $output = shell_exec("rsync -avz --delete ~/dev/".$sitePathName." ~/www/");
  echo "<pre>$output</pre>";
?>
