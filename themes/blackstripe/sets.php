    <?php $p = new Profiler('Sets page load', 0, 2); ?>
      <div id="leftcontent"></div>

      <div id="centercontent">
        <div id='page_flog_header'>
          <span id='page_flog_title'>
          <?php
          if ( $set->paramSetId ) {
          	$set->title();
          } else {
           	echo _SETS;
          }
           ?>
          </span>
            <span id='page_flog_nav'>
            <?php
            if ($set->paramSetId) {
                $setPhotos = $set->get_set_photos();
                $set->previous_page_link($setPhotos, "<span style='float:left' class='ui-icon ui-icon-triangle-1-w'></span>"._PREV);
                echo "&nbsp;";
                $set->next_page_link($setPhotos, _NEXTSHORT."<span style='float:right' class='ui-icon ui-icon-triangle-1-e'></span>");
            }
            ?>
            </span>
        </div>

        <div id='page_flog'>

            <!-- Show the photo and link the photo to the previous photo -->
            <div id='thumbnail_container'>
            	<?php
            		if ( $set->paramSetId ) { 
            			$set->slideshow_thumbnails( $setPhotos );            			
            		} else {
            			$set->set_list();
            		}
            	?>
            </div>
        </div>
      </div>
      
      <div id="rightcontent"></div>

      <script type='text/javascript'>
          $(document).ready(function(){
              $("#menuitem_sets").addClass("selected");
          });
      </script>