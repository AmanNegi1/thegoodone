<?php
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>


<?php

    $people  = array(

        '+16455767473' => 'Maria Santiago',
        '+15455767473' => 'Jose Santiago',
        '+13455767473' => 'Peter Williams',
        '+11455767473' => 'John Doe',
        '+15397771210' => 'Edwin Diaz',


);


    if(!$name = $people[$_REQUEST['From']]){


        $name = "nobody";


    }


?>



<Response>


    <Sms><?php echo "Hi ". $name . " How are you? Thanks for calling" ?> </Sms>


</Response>