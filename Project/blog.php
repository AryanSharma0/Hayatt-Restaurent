<?php

    
    require 'vendor/autoload.php';
    use MongoDB\Driver\Manager;
    use MongoDB\Driver\ServerApi;
    $serverApi = new ServerApi(ServerApi::V1);
    $client = new MongoDB\Client(
        'mongodb+srv://Aryan432:YxI5XJo8Y3XWRpgK@cluster0.fdkmm.mongodb.net/?retryWrites=true&w=majority', [], ['serverApi' => $serverApi]);
        $db = $client->Hayatt;
        echo "Database mydb selected \n";
        $collection = $db->Query;
        echo "Collection selected succsessfully";
        
        // $document = array( 
        //     "title" => "MongoDB", 
        //     "description" => "database", 
        //     "likes" => 100,
        //     "url" => "http://www.tutorialspoint.com/mongodb/",
        //     "by" => "tutorials point"
        //  );
        //  $collection->insertOne($document);4




       
?>



















<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />
    <link rel="stylesheet" href="style.css" />
    <style>
    div#comment-section {
        border-top: 1px solid #ccc;
    }

    div#comment-section form input.comment-input {
        width: 200px;
    }

    div#comment-section form textarea[name=comment] {
        width: 255px;
    }

    span.input-label {
        font-weight: bold;
        padding-right: 10px;
    }
    </style>
    <title>My Blog Site</title>
</head>

<body>
    <?php
  

error_reporting(0);
if (isset($_POST['form_submitted'])){
    $email = $_POST["commenter_email"];
    $name = $_POST["commenter_name"];
    $comment = $_POST["comment"];
    if(empty($email)){
        $err ="PLease Enter Email";
        
        
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){

        $err ="Invalid Email Address..";
        

    }
    elseif(filter_var($email,FILTER_VALIDATE_EMAIL) && (!empty($name)) &&(!empty($comment))){
       echo' <script>alert("Your wuery is sent. Thank You !! ")</script>';
        
        
    }
    if (empty($name)) {
        $err_name="Please Enter Your Name !";
    }
    if (empty($comment)) {
        $err_comment="Please Enter Your Message !";
    }
}


    
if(filter_var($email,FILTER_VALIDATE_EMAIL) && (!empty($name)) &&(!empty($comment))){
$document = array( 
    "Name" => $_POST['commenter_name'], 
    "Email" =>$_POST['commenter_email'], 
    "Comment" => $_POST['comment'],
 );
 $collection->insertOne($document);
}
    ?>



    <div id="contentarea">
        <div id="innercontentarea">

            <div id="comment-section">
                <h3>Comments</h3>

                <h3>Post your comment</h3>
                <form action="blog.php" method="post">
                    <span class="input-label">Name <?php echo $err_name ?></span>
                    <input type="text" name="commenter_name" class="comment-input" />
                    <br /><br />
                    <span class="input-label">Email    <?php echo $err ?></span>
                    <input type="text" name="commenter_email" autocomplete="off" class="comment-input" />
                    <br /><br />
                    <?php echo $err_comment ?>
                    <textarea name="comment" rows="5"></textarea><br /><br />
                    <input type="hidden" name="form_submitted" value="1" />
                    <input type="submit" name="btn_submit" value="Submit" />

                </form>

            </div>
        </div>
    </div>
</body>

</html> 