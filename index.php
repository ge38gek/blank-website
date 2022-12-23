<?php
	//include '../defines.php';

	// VERIFICATION STEPS
	file_put_contents( 'verify.log', print_r( $_GET, true ), FILE_APPEND );
	echo $_GET['hub_challenge'];
	die();

	// TESTING OF THE WEBHOOKS
	// $json = file_get_contents( 'php://input' );
	// $data = json_decode( $json );
	// file_put_contents( 'data.log', print_r( $data, true ), FILE_APPEND );
	// //die();

	// $commentId = '17893015459452492';
	// $mediaId = '17908649842399636';

	// $params = array(
	// 	'endpoint_url' => 'https://graph.facebook.com/' . $instagramAccountId . '/mentions',
	// 	'type' => 'POST',
	// 	'url_params' => array(
	// 		'comment_id' => $commentId,
	// 		'media_id' => $mediaId,
	// 		'message' => 'This is an auto reply from a webhook!',
	// 		'access_token' => $accessToken,
	// 	)
	// );

	// $responseInfo = makeApiCall( $params );

	// echo '<pre>';
	// print_r($responseInfo);

	// function makeApiCall( $params ) {
	// 	$ch = curl_init();

	// 	curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $params['url_params'] ) );
	// 	curl_setopt( $ch, CURLOPT_POST, 1 );

	// 	curl_setopt( $ch, CURLOPT_URL, $params['endpoint_url'] );

	// 	// set other curl options
	// 	curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
	// 	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, true );
	// 	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

	// 	$response = curl_exec( $ch );

	// 	curl_close( $ch );

	// 	$responseArray = json_decode( $response, true );

	// 	return $responseArray;
	// }
?>

 <html lang="en">
   <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />

     <link
       rel="stylesheet"
       href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
       integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
       crossorigin="anonymous"
     />

     <title>Original Coast Clothing</title>
   </head>

   <body></body>
 </html>

<div class="container">
  <h1>Hola Chubby!!</h1>
  <img src="/logo.png" />
  <p class="lead">
    We’re open 7 days, so start your shopping experience now!
  </p>
  <p>
    This site is part of the sample Instagram experience of Original Coast
    Clothing
  </p>
  <ul>
    <li>
      <a href="https://www.originalcoastclothing.com/"
        >Original Coast Clothing Website</a
      >
    </li>
    <li>
      Want to build your own?
      <a
        href="https://developers.facebook.com/docs/messenger-platform/instagram/sample-experience"
        >View the docs</a
      >
    </li>
  </ul>
</div>
