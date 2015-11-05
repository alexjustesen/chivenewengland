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
                
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-instafeed-page" role="tab" data-toggle="tab"><i class="fa fa-instagram fa-fw"></i> @chive_newengland</a></li>
                    <li role="presentation"><a href="#tab-instafeed-tag-chivenewengland" role="tab" data-toggle="tab"><i class="fa fa-instagram fa-fw"></i> #chivenewengland</a></li>
                </ul>
                
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="chapters">
                        <h2 class="instagram-title text-center"><i class="fa fa-globe fa-fw"></i> State Chapters</h2>
                        <hr/>
                        <p class="font-light">Connect with all the chapter that make Chive New England. Like them, follow them and <strike>make love to them</strike> we're just kidding about that one.</p>
                        
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <div class="well well-sm">
                                    <h3>Boston Chive</h3>
                                    <p>
                                        <a href="https://www.facebook.com/groups/BostonChive/" target="_blank"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
                                        <a href="https://twitter.com/BostonChive" target="_blank"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                                        <a href="https://instagram.com/Boston_Chive" target="_blank"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="well well-sm">
                                    <h3>Chive CT</h3>
                                    <p>
                                        <a href="https://www.facebook.com/groups/chivect.social/" target="_blank"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
                                        <a href="https://twitter.com/ChiveCT" target="_blank"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                                        <a href="https://instagram.com/chive_ct" target="_blank"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="well well-sm">
                                    <h3>Danbury Chive</h3>
                                    <p>
                                        <a href="https://www.facebook.com/danburychive" target="_blank"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
                                        <a href="http://twitter.com/danburychive" target="_blank"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                                        <a href="http://instagram.com/danburychive" target="_blank"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="well well-sm">
                                    <h3>NH Chive</h3>
                                    <p>
                                        <a href="https://www.facebook.com/groups/nhchive" target="_blank"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
                                        <a href="https://www.twitter.com/nhchive" target="_blank"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                                        <a href="https://www.instagram.com/nhchive" target="_blank"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="well well-sm">
                                    <h3>Chive on RI</h3>
                                    <p>
                                        <a href="https://www.facebook.com/groups/ChiveOnRI/" target="_blank"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
                                        <a href="https://twitter.com/ChiveOnRI" target="_blank"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                                        <a href="https://instagram.com/chiveonri" target="_blank"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade in active" id="tab-instafeed-page">
                        <h2 class="font-instagram text-center"><i class="fa fa-instagram fa-2x"></i><br/> <span class="font-light">@chive_newengland</span></h2>
                        <div id="instafeed-page" class="row"></div>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade" id="tab-instafeed-tag-chivenewengland">
                        <h2 class="font-instagram text-center"><i class="fa fa-instagram fa-2x"></i><br/> <span class="font-light">#chivenewengland</span></h2>
                        <div id="instafeed-tag-chivenewengland" class="row"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
