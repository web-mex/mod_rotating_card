<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_rotating_card
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


?>


<div class="rotating_card<?php echo $moduleclass_sfx; ?>"
    <?php if ($params->get('backgroundimage')) : ?>
        style="background-image:url(<?php echo $params->get('backgroundimage'); ?>)"

    <?php endif; ?> >

	<?php echo $module->content;?>


</div>

<div class="row">
    <h1 class="title">
        <?php echo $box_title;?>
        <br>
        <small><?php echo $box_subtitle;?>            </small>
    </h1>
    <div class="col-sm-10 col-sm-offset-1">
        <div class="col-md-4 col-sm-6">
            <div class="card-container">
                <div class="card">
                    <div class="front-panel">
                        <div class="cover">
                            <img src="<?php echo $img1->image_fulltext;?>"/>
                        </div>


                        <div class="user">
	                        <?php if ($img1->image_intro) : ?>
                            <img class="img-circle" src="<?php echo $img1->image_intro;?>"/>
	                        <?php endif; ?>
                        </div>



                        <div class="content">
                            <div class="main">
                                <h3 class="name"><?php echo $box[0]->title;?></h3>
                                <p class="profession"><?php echo $img1->image_intro_caption;?></p>
                                <p class="text-center">"<?php echo $box1_start;?>"</p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i> Auto Rotation
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back-panel">
                        <div class="header">
                            <h5 class="motto">" <?php echo $box1_back_teaser;?>"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <?php echo $box[0]->introtext; ?>
                                <!--
                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>
                                !-->

                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a class="btn btn-default " href="<?php echo $url1->urla;?>"><?php echo $url1->urlatext;?></a>

                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
        <!--         <div class="col-sm-1"></div> -->
        <div class="col-md-4 col-sm-6">
            <div class="card-container manual-flip">
                <div class="card">
                    <div class="front-panel">
                        <div class="cover">
                            <img src="<?php echo $img2->image_fulltext;?>"/>
                        </div>

                            <div class="user">
	                            <?php if ($img2->image_intro) : ?>
                                <img class="img-circle" src="<?php echo $img2->image_intro;?>"/>
	                            <?php endif; ?>
                            </div>

                        <div class="content">
                            <div class="main">
                                <h3 class="name"><?php echo $box[1]->title;?></h3>
                                <p class="profession"><?php echo $img2->image_intro_caption;?></p>
                                <p class="text-center">"<?php echo $box2_start;?>"</p>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple click" ">
                                    <i class="fa fa-mail-forward"></i> Manuelle Rotation
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back-panel">
                        <div class="header">
                            <h5 class="motto">"<?php echo $box2_back_teaser;?>"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
	                            <?php echo $box[1]->introtext; ?>

                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn btn-simple click" rel="tooltip" title="Flip Card" ">
                                <i class="fa fa-reply"></i> Zurück
                            </button>
                            <div class="social-links text-center">
                                <a class="btn btn-default " href="<?php echo $url2->urla;?>"><?php echo $url2->urlatext;?></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
        <!--         <div class="col-sm-1"></div> -->
        <div class="col-md-4 col-sm-6">
            <div class="card-container">
                <div class="card">
                    <div class="front-panel">
                        <div class="cover">
                            <img src="<?php echo $img3->image_fulltext;?>"/>
                        </div>
                            <div class="user">
	                            <?php if ($img3->image_intro) : ?>
                                <img class="img-circle" src="<?php echo $img3->image_intro;?>"/>
	                            <?php endif; ?>
                            </div>

                        <div class="content">
                            <div class="main">
                                <h3 class="name"><?php echo $box[2]->title;?></h3>
                                <p class="profession"><?php echo $img3->image_intro_caption;?></p>
                                <p class="text-center">"<?php echo $box3_start;?>"</p>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                    <i class="fa fa-mail-forward"></i> Auto Rotation
                                </div>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back-panel">
                        <div class="header">
                            <h5 class="motto">"<?php echo $box3_back_teaser;?>"</h5>
                        </div>
                        <div class="content">
                            <div class="main">

	                            <?php echo $box[2]->introtext; ?>

                                <!--
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>
                                    !-->
                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a class="btn btn-default " href="<?php echo $url3->urla;?>"><?php echo $url3->urlatext;?></a>
                                <!--
                                <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="https://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="https://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                !-->
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col-sm-3 -->
    </div> <!-- end col-sm-10 -->
</div> <!-- end row -->
<small class="pull-right">Dieses Modul wurde von Web-Mex entwickelt</small>

<script type="text/javascript">
    jQuery(document).ready(function($){

        $('.click').on('click', function() {

            var $card = $(this).closest('.card-container');

            if($card.hasClass('hover')){
                $card.removeClass('hover');
            } else {
                $card.addClass('hover');
            }


        });


    });

</script>
