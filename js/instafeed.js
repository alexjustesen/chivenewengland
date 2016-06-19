/*  js/app.js
 *
 *  Created     6/19/2016
 *  Updated     6/19/2016
 *
 *  Version     v1.0.0
 */

var clientID = '084fe0f502ef4ba495ef9074be67aaad';
var accessTotken = '1650222888.084fe0f.f12a3d83141f4cd6ac52b9e40d7a7d8e';

// Instafeed for Instagram
function instafeedPage() {
    // Get page feed.
    var pageData = new Instafeed({
        clientId: clientID, // You will need to register an APP on Instagram to get your clientID which is required for feeds.
        accessToken: accessTotken, // You will need to register an APP on Instagram to get your access_token which is required for page feeds.
        get: 'user',
        userId: 1650222888,
        links: true,
        limit: 12,
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        target: 'instafeed-page',
        template: '<div class="col-xs-12 col-sm-4"><a href="{{link}}" target="_blank"><div class="well well-sm"><div class="row"><div class="instafeed-image-wrap col-xs-12"><img src="{{image}}" class="lazy img-responsive"/><div class="instafeed-info">{{likes}} Likes + {{comments}} Comments</div></div><div class="col-xs-12"><div class="instafeed-caption">{{caption}}</div></div></div></div></a></div>'
    });
    pageData.run();
}
function instafeedTag($tagName) {
    // Empty the target
    $target = "instafeed-tag-"+$tagName;
    $( "#"+$target ).empty();
    
    // Get tag feed.
    var tagData = new Instafeed({
        clientId: clientID, // You will need to register an APP on Instagram to get your clientID which is required for feeds.
        accessToken: accessTotken, // You will need to register an APP on Instagram to get your access_token which is required for page feeds.
        get: 'tagged',
        tagName: $tagName,
        links: true,
        limit: 12,
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        target: $target,
        template: '<div class="col-xs-12 col-sm-4"><a href="{{link}}" target="_blank"><div class="well well-sm"><div class="row"><div class="instafeed-image-wrap col-xs-12"><img src="{{image}}" class="lazy img-responsive"/><div class="instafeed-info">{{likes}} Likes + {{comments}} Comments</div></div><div class="col-xs-12"><div class="instafeed-caption">{{caption}}</div></div></div></div></a></div>'
    });
    tagData.run();
}
