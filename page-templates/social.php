<?php
/**
 * Template Name: Social Template
 */

get_header(); ?>

    <!-- Main Content -->
    <div class="container">        
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div id="social-counts" class="row">
                    <div class="col-xs-4 text-center">
                        <a href="https://www.facebook.com/chivenewengland" target="_blank">
                            <div class="well well-sm facebook">
                                <i class="fa fa-facebook-official fa-2x"></i><br/>
                                <span class="font-light hidden-xs">Likes</span>
                                <span id="facebook-count" class="counter" data-from="0" data-to="<?php echo facebook_likes(); ?>"></span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xs-4 text-center">
                        <a href="https://www.twitter.com/chivenewengland" target="_blank">
                            <div class="well well-sm twitter">
                                <i class="fa fa-twitter fa-2x"></i><br/>
                                <span class="font-light hidden-xs">Followers</span>
                                <span id="twitter-count" class="counter" data-from="0" data-to="<?php echo twitter_followers(); ?>"></span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xs-4 text-center">
                        <a href="https://www.instagram.com/chive_newengland" target="_blank">
                            <div class="well well-sm instagram">
                                <i class="fa fa-instagram fa-2x"></i><br/>
                                <span class="font-light hidden-xs">Followers</span>
                                <span id="instagram-count" class="counter" data-from="0" data-to="<?php echo instagram_followers(); ?>"></span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <h2 class="font-instagram text-center"><i class="fa fa-instagram fa-2x"></i></h2>
                <div id="instafeed-page" class="row"></div>
                
            </div>
        </div>
    </div>

<?php get_footer(); ?>
