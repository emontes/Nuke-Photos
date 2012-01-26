<?php $p = new Profiler('About page load', 0, 2); ?>
<?php
require_once( 'user.php' );
?>

      <div id="leftcontent"></div>

      <div id="centercontent">
        <div id='page_header'>
          <span id='page_title'><?php echo _ABOUT?></span>
          <span id='page_nav'>
          </span>
        </div>

        <div id='page'>

            <!-- Show the photo and link the photo to the previous photo -->
            <div id='thumbnail_container'>
	         <table>
	            <tr>
	               <td><h3><?php echo _USER?></h3></td>
	               <td><?php $user->realname(); ?></td>
	            </tr>
	            <tr>
	               <td><h3><?php echo _LOCATION?></h3></td>
	               <td><?php $user->location(); ?></td>
	            </tr>
	            <tr>
	            <tr>
	               <td><h3><?php echo _PROFILEURL?></h3></td>
	               <td><?php $user->profilelink(); ?></td>
	            </tr>
	            <tr>
	               <td><h3><?php echo _PHOTOSURL?></h3></td>
	               <td><?php $user->photoslink(); ?></td>
	            </tr>
	            <tr>
	               <td><h3><?php echo _MOBILEURL?></h3></td>
	               <td><?php $user->mobilelink(null, $user->get_mobilelink()); ?></td>
	            </tr>
	            <tr>
	               <td><h3><?php echo _FIRSTPHOTOGRAPH?></h3></td>
	               <td><?php $user->firstdate(); ?></td>
	            </tr>
	            <tr>
	               <td><h3><?php echo _PHOTOGRAPHSTAKEN?></h3></td>
	               <td><?php $user->photos_count(); ?></td>
	            </tr>
	            <tr>
	            	<td><h3><?php echo _GROUPS?></h3></td>
	            	<td>
						<?php $user->public_groups_list_links(null, '', '<p />'); ?>
					</td>
	            </tr>
	         </table>		
            </div>
        </div>
      </div>

      <script type='text/javascript'>
          $(document).ready(function(){
              $("#menuitem_about").addClass("selected");
          });
      </script>