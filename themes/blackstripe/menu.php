<?php 
echo '<ul>
    <li>
        <a id="menuitem_home" href="'.MODULE_INDEX.'">'._HOME.'</a>&nbsp;
    </li>
    <li>
        <a id="menuitem_recent" href="'.MODULE_INDEX.'&type=recent">'._RECENT.'</a>&nbsp;
    </li>';
if (defined('FLICKR_USER_ID')) { 
echo '    <li>
        <a id="menuitem_sets" href="'.MODULE_INDEX.'&type=sets">'._SETS.'</a>&nbsp;
    </li>
    <li>
        <a id="menuitem_tags" href="'.MODULE_INDEX.'&type=tags">'._TAGS.'</a>&nbsp;
    </li>
    <li>
        <a id="menuitem_map" href="'.MODULE_INDEX.'&type=map">'._MAP.'</a>&nbsp;
    </li>
    <li>
        <a id="menuitem_favorites" href="'.MODULE_INDEX.'&type=favorites">'._FAVORITES.'</a>&nbsp;
    </li>
    <li>
        <a id="menuitem_about" href="'.MODULE_INDEX.'&type=about">'._ABOUT.'</a>
    </li>';
 } 
echo '</ul>';
?>
