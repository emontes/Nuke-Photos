   </div>


<?php 
 
 
 
 echo '<div id="footer_flog">';
 if ($photo && $photo->get_userId() == FLICKR_USER_ID) {
 	echo "Photo &copy;&nbsp;";
 	$photo->userlink();
 	echo "&nbsp;|&nbsp;";
 }
 echo '<a href="https://github.com/emontes/Nuke-Photos">Nuke Photos</a> Powered by <a href="http://flogr.googlecode.com">Flogr</a> &amp; <a href="http://flickr.com"><span style="color: rgb(0, 102, 204);">Flick</span><span style="color: rgb(255, 0, 153);">r</span></a>';
 echo '</div></div>';
 

 ?>