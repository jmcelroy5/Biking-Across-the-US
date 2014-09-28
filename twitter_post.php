function image_upload(){    

    define( 'YOUR_CONSUMER_KEY' , 'RSa4csBoghSu3tkRZfsBCaftO');
    define( 'YOUR_CONSUMER_SECRET' , 'xhOcbBCjpF3fvpGA3HMcnZX6cvSb8VRIH3R9YQRZD2SHWTp1bn');

    require ('twitt/tmhOAuth.php');
    require ('twitt/tmhUtilities.php');

    $tmhOAuth = new tmhOAuth(array(
             'consumer_key'    => "RSa4csBoghSu3tkRZfsBCaftO",
             'consumer_secret' => "xhOcbBCjpF3fvpGA3HMcnZX6cvSb8VRIH3R9YQRZD2SHWTp1bn",
             'user_token'      => "2834275362-LbCDG8G7JInIpgQ4h0HemxIIuieubBV8VBRTV2Z",
             'user_secret'     => "DymgLgj3irt4Kv7L0bJatIqS6KyBnt8M00wlwoagObsi8",
    ));

    $image = 'image.jpg';

    $code = $tmhOAuth->request( 'POST','https://upload.twitter.com/1/statuses/update_with_media.json',
       array(
            'media[]'  => "@{$image};type=image/jpeg;filename={$image}",
            'status'   => 'message text written here',
       ),
        true, // use auth
        true  // multipart
    );

    if ($code == 200){
       tmhUtilities::pr(json_decode($tmhOAuth->response['response']));
    }else{
       tmhUtilities::pr($tmhOAuth->response['response']);
    }
    return tmhUtilities;
}
