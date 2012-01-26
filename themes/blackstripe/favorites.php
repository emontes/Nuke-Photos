    <?php $p = new Profiler('Favorites page load', 0, 2); ?>
      <div id="leftcontent"></div>

      <div id="centercontent">
        <div id='page_flog_header'>
          <span id='page_flog_title'><?php echo _FAVORITES?></span>
            <span id='page_flog_nav'>
            <?php
            $photos = $photo->get_user_favorite_photos();
            $photo->previous_page_link($photos, "<span style='float:left' class='ui-icon ui-icon-triangle-1-w'></span>"._PREV);
            echo "&nbsp;";
            $photo->next_page_link($photos, _NEXTSHORT."<span style='float:right' class='ui-icon ui-icon-triangle-1-e'></span>");
            ?>
            </span>
        </div>

        <div id='page_flog'>

            <!-- Show the photo and link the photo to the previous photo -->
            <div id='thumbnail_container'>
            	<?php
            		$photo->slideshow_thumbnails( $photos );
            	?>
            </div>
        </div>
      </div>
      
      <div id="rightcontent"></div>

      <script type='text/javascript'>
          $(document).ready(function(){
              $("#menuitem_favorites").addClass("selected");
          });
      </script>