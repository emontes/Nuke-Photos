    <?php
    $p = new Profiler('Photo page load', 0, 2);
    ?>

    <div id="leftcontent"></div>

    <div id="centercontent">
        <div id='page_header'>
            <span id='page_title'>
                <?php $photo->photopage_link(null, $photo->get_title()); ?>
            </span>&nbsp;by&nbsp;<?php $photo->userlink(); ?>
            <span id='page_nav'>
                <?php
                $photo->previous_page_link($photo->photoList, "<span style='float:left' class='ui-icon ui-icon-triangle-1-w'></span>"._PREV);
                echo "&nbsp;";
                $photo->next_page_link($photo->photoList, _NEXTSHORT."<span style='float:right' class='ui-icon ui-icon-triangle-1-e'></span>");
                ?>
            </span>
        </div>
        <div id='page'><!-- Build the photo detail floating div -->
            <div id='info_comments'>
                <div>
                    <div class='heading'>
                        <?php $photo->title(); ?>
                    </div>
                    <button id="close" style="position:absolute;top:0;right:0;">Close</button>
                </div>
                <div style="float:left;width:200px">
                    <div class='thumb'>
                        <?php $photo->photopage_link(null, $photo->get_img(null, 'Small', 200)); ?>
                    </div>
                    <?php $photo->description(); ?>
                </div>
                <div style="float:right;width:350px" id="accordion" class="ui-accordion">
                    <h3 class="no_hover"><a href="#"><?php echo _DETAILS;?></a></h3>
                    <div>
                    <?php
                    $geo = $photo->get_geo_location();
                    if ($geo) {
                        $lat = $geo["latitude"];
                        $long = $geo["longitude"];
                        $img = "<img width='300' height='100' src='http://maps.google.com/maps/api/staticmap?center={$lat},{$long}&zoom=8&size=300x100&maptype=roadmap&markers=|{$lat},{$long}&sensor=false'/>";
                        echo "<a href='index.php?type=map'>{$img}</a>";
                    }
                    ?>
                    <table>
                        <tr>
                            <td><?php echo _TAGS;?></td>
                            <td><?php $photo->tags_list(null, '', ' '); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo _OWNER;?></td>
                            <td><?php $photo->userlink(); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo _DATE;?></td>
                            <td><?php $photo->dateposted(); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo _VIEWS;?></td>
                            <td><?php $photo->views_count(); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo _COMMENTS;?></td>
                            <td><?php $photo->comments_count(); ?></td>
                        </tr>
                        <?php
                        $geo = $photo->get_geo_location();
                        if ($geo["latitude"]) {
                        ?>
                            <tr>
                                <td>Geo</td>
                                <td>
                                <?php
                                echo $geo["latitude"] . "," . $geo["longitude"];
                                ?>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                            <tr>
                                <td><?php echo _LICENCE;?></td>
                                <td><?php $photo->license_link(); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo _LINKS;?></td>
                                <td>
                                <?php
                                $photo->photopage_link(null, "Flickr");
                                echo ", ";
                                $photo->permalink(null, "Permalink");
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
                    <h3 class="no_hover"><a href="#">exif</a></h3>
                    <div><?php $photo->exif(); ?></div>
                    <h3 class="no_hover"><a href="#"><?php echo _COMMENTS;?></a></h3>
                    <div>
                    <?php
                    $photo->comments_list(null, '<li>', ' says:<br/>', '</li>', false);
                    $photo->photopage_link(null, "Leave a comment");
                    ?>
                    </div>
                </div>
            </div>


            <!-- Show the photo and link the photo to the previous photo -->
            <div class='photo'>
                                <?php
                                                if ($photo->paramPhotoId) {
                                                    $photo->img(null, FLOGR_PHOTO_QUALITY, FLOGR_MAIN_PHOTO_SIZE);
                                                } else {
                                                    $photo->next_page_link($photo->photoList, '');
                                                    $photo->previous_page_link($photo->photoList, '');
                                                    $photo->img(null, FLOGR_PHOTO_QUALITY, FLOGR_MAIN_PHOTO_SIZE);
                                                }
                                        ?>
            </div>

    </div>

    <div id='page_meta'><span style='float: left'><?php $photo->dateposted(); ?></span>
        <span id="toolbar" style='float: right'>
            <button>info</button>
            <button>exif</button>
            <button><?php $photo->comments_count(); ?></button>
            <button><?php echo $photo->get_photopage_link(); ?></button>
        </span>
    </div>
</div>

<div id="rightcontent"></div>

<script type='text/javascript'>
    $(document).ready(function(){

        $("#menuitem_home").addClass("selected");

        $("#accordion").accordion();

        $("#info_comments_toggle").click(function(){
            $("#info_comments").css("visibility", "visible");
        });
        
        $("#info_comments tr:even").addClass("alt");

        $("#close").button({
            icons: {
                primary: "ui-icon-circle-close"
            },
            text: false
        }).click(function(){
            $("#info_comments").css("visibility", "hidden");
        });

        $("#toolbar").buttonset();

        $("#toolbar button:first").button({ // info button
            icons: {
                primary: "ui-icon-info"
            },
            text: false
        }).click(function(){
            $("#accordion").accordion("activate", 0);
            $("#info_comments").css("visibility", "visible");
        }).next().button({ // exif button
            icons: {
                primary: "ui-icon-image"
            },
            text: false
        }).click(function(){
            $("#accordion").accordion("activate", 1);
            $("#info_comments").css("visibility", "visible");
        }).next().button({ // comment button
            icons: {
                primary: "ui-icon-comment"
            },
            text: true
        }).click(function(){
            $("#accordion").accordion("activate", 2);
            $("#info_comments").css("visibility", "visible");
        }).next().button({ // flickr button
            icons: {
                primary: "ui-icon-extlink"
            },
            text: false
        }).click(function(){
            window.location = $(this).text();
        })
    });
</script>