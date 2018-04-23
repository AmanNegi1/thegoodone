<?php require '../includes/header.php'?>


<?php


    $client = new Services_Twilio($config['account_sid'],$config['auth_token']);


    $_SESSION['code'] = $code = uniqid();

    $con->query("INSERT INTO verifications(code) VALUES('$code')");


    try{

        $client->account->messages->sendMessage($config['phone_number'],'5397771210', $code);


    } catch(Services_Twilio_RestException $e){

        die('Sorry could not connect because it could not ' . $e->getMessage());


    }




    echo "<h3 class='text-center bg-success'>You Code has been sent</h3>";



?>






<?php require '../includes/footer.php'?>
