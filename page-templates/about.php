<?php
/**
 * Template Name: About Template
 */

    get_header();

    $avatar_args = array( 'class' => 'img-responsive img-circle');
    $users_args = array(
        'fields'    => array('ID', 'display_name', 'user_email', 'user_login'),
        'orderby'   => 'ID'
    );

    $users = get_users( $users_args );
?>

<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                               
                <div class="row">
                   
                    <div class="col-sm-12 text-center">
                        <div class="well well-sm">
                            <h3>Boston Chive</h3>
                            <ul class="list-inline text-center">
                               
                                <?php foreach( $users as $key => $user) : ?>
                                    <?php if( get_the_author_meta( 'chapter', $user->ID ) == 'Boston Chive') : ?>
                                    
                                    <li class="shake shake-crazy">
                                        <?php echo get_avatar( $user->ID, 150, '', $user->display_name, $avatar_args ); ?>
                                        <h3><?php echo $user->display_name; ?></h3>
                                    </li>
                                    
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                
                            </ul>
                            <p>
                                <a href="https://www.facebook.com/groups/BostonChive/" target="_blank"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
                                <a href="https://twitter.com/BostonChive" target="_blank"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                                <a href="https://instagram.com/Boston_Chive" target="_blank"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 text-center">
                        <div class="well well-sm">
                            <h3>Chive CT</h3>
                            <ul class="list-inline text-center">
                               
                                <?php foreach( $users as $key => $user) : ?>
                                    <?php if( get_the_author_meta( 'chapter', $user->ID ) == 'Chive CT') : ?>
                                    
                                    <li class="shake shake-slow">
                                        <?php echo get_avatar( $user->ID, 150, '', $user->display_name, $avatar_args ); ?>
                                        <h3><?php echo $user->display_name; ?></h3>
                                    </li>
                                    
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </ul>
                            <p>
                                <a href="https://www.facebook.com/groups/chivect.social/" target="_blank"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
                                <a href="https://twitter.com/ChiveCT" target="_blank"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                                <a href="https://instagram.com/chive_ct" target="_blank"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 text-center">
                        <div class="well well-sm">
                            <h3>Danbury Chive</h3>
                            <ul class="list-inline text-center">
                               
                                <?php foreach( $users as $key => $user) : ?>
                                    <?php if( get_the_author_meta( 'chapter', $user->ID ) == 'Danbury Chive') : ?>
                                    
                                    <li class="shake shake-little">
                                        <?php echo get_avatar( $user->ID, 150, '', $user->display_name, $avatar_args ); ?>
                                        <h3><?php echo $user->display_name; ?></h3>
                                    </li>
                                    
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                
                            </ul>
                            <p>
                                <a href="https://www.facebook.com/danburychive" target="_blank"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
                                <a href="http://twitter.com/danburychive" target="_blank"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                                <a href="http://instagram.com/danburychive" target="_blank"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 text-center">
                        <div class="well well-sm">
                            <h3>NH Chive</h3>
                            <ul class="list-inline text-center">
                                
                                <?php foreach( $users as $key => $user) : ?>
                                    <?php if( get_the_author_meta( 'chapter', $user->ID ) == 'NH Chive') : ?>
                                    
                                    <li class="shake shake-chunk">
                                        <?php echo get_avatar( $user->ID, 150, '', $user->display_name, $avatar_args ); ?>
                                        <h3><?php echo $user->display_name; ?></h3>
                                    </li>
                                    
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                
                            </ul>
                            <p>
                                <a href="https://www.facebook.com/groups/nhchive" target="_blank"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
                                <a href="https://www.twitter.com/nhchive" target="_blank"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                                <a href="https://www.instagram.com/nhchive" target="_blank"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 text-center">
                        <div class="well well-sm">
                            <h3>Chive on RI</h3>
                            <ul class="list-inline text-center">
                                
                                <?php foreach( $users as $key => $user) : ?>
                                    <?php if( get_the_author_meta( 'chapter', $user->ID ) == 'Chive on RI') : ?>
                                    
                                    <li class="shake shake-rotate">
                                        <?php echo get_avatar( $user->ID, 150, '', $user->display_name, $avatar_args ); ?>
                                        <h3><?php echo $user->display_name; ?></h3>
                                    </li>
                                    
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                
                            </ul>
                            <p>
                                <a href="https://www.facebook.com/groups/ChiveOnRI/" target="_blank"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
                                <a href="https://twitter.com/ChiveOnRI" target="_blank"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                                <a href="https://instagram.com/chiveonri" target="_blank"><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
