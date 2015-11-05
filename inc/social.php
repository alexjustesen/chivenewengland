<?php //inc/social.php

/*
 * The following functions handle getting counts from various social media platforms.
 */

function facebook_likes() {
        
    $pageid         = '1375189499438982';
    $appid          = '481137742061091';
    $appsecret      = 'b4583e624c177b4236f1d875c742d033';
    $fields         = 'likes'; // as a string comma separated
    
    $api_version    = 'v2.5';
	$api_url        = 'https://graph.facebook.com/'.$api_version.'/'.$pageid.'?fields='.$fields.'&access_token='.$appid.'|'.$appsecret;
    $api_response   = wp_remote_get( $api_url );
	$api_body       = json_decode( wp_remote_retrieve_body( $api_response ) );
    
	// Extract the likes count from the JSON object
	if( isset( $api_body->likes ) ) { return $api_body->likes; }
    else { return 0; }
    
}

function instagram_followers() {
    
    $user_id        = '1414843815';
    $access_token   = '1414843815.467ede5.248f1e4e8dcf42ae9d1c730165b7cf77';
    
    $api_url        = 'https://api.instagram.com/v1/users/'.$user_id.'?access_token='.$access_token;
    $api_response   = wp_remote_get( $api_url );
    $api_body       = json_decode( wp_remote_retrieve_body( $api_response ) );
    
    // Extract the followers count from the JSON object
    if( isset( $api_body->data->counts->followed_by ) ) { return $api_body->data->counts->followed_by; }
    else { return 0; }
    
}

function twitter_followers() {
    
    $twitterID      = 'chivenewengland';
    
    $api_url        = "https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names=" . $twitterID;
    $api_response   = wp_remote_get( $api_url );
    $api_body       = json_decode( wp_remote_retrieve_body( $api_response ) );
        
    // Extract the followers count from the JSON object
    if( isset( $api_body ) ) { return $api_body[0]->followers_count; }
    else { return 0; }
    
}
