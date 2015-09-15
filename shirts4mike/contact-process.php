<!--<pre>-->
<?php

//echo $_POST['name']. '<br>';
//echo $_POST['email']. '<br>';
//echo $_POST['message']. '<br>';


//to add email sending


header('location: contact-thanks.php');

$pageTitle = "Contact Mike";
$section = "contact";
include('inc/header.php');


?>
<!--</pre>-->


<div class="section page">

    <div class="wrapper">
        
        <h1>Contact</h1>
        
        <p>Thanks for the email! I&rsquo;ll be in touch shortly!</p>
        
    </div>
    
       </div>

<?php include('inc/footer.php') ?>