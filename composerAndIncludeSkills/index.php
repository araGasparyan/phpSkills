<?php
require_once __DIR__.'\vendor\autoload.php';



//$log = new Monolog\Logger('name');
//$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
//$log->addWarning('Foo');

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);

$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);
//dont ovveriden view
/*
$app = new \Slim\Slim();
 */

//first example
/*
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
 */

$app->get('/', function() use($app){
   $app->render('about.twig');
});

$app->get('/contact', function() use($app){
    

    //DEBUG check it with name function

    
    $app->render('contact.twig');
});
  
$app->post('/contact', function() use($app){
    $name=$app->request()->post('name');
    $email=$app->request()->post('email');
    $msg=$app->request()->post('msg');
  
    if(!empty($name) && !empty($email) && !empty($msg)){
        $claenName=  filter_var($name, FILTER_SANITIZE_STRING);
        $claenEmail =  filter_var($email, FILTER_SANITIZE_EMAIL);
        $claenMsg=  filter_var($msg, FILTER_SANITIZE_STRING);
    }else{
      $app->redirect('contact');
    }
    
    // Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('vochklini.chi@gmail.com')
  ->setPassword('LittleRichard')
  ;

//test it!!!!!!!!!
//$transport = Swift_SmtpTransport::newInstance('mail.matenadaran.am', 465, 'ssl')
//  ->setUsername('digitization@matenadaran.am')
//  ->setPassword('d_404_igit')
//  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();
*/

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
  $message = Swift_Message::newInstance('Wonderful Subject');
  $message->setFrom(array($claenEmail => $claenName));
  $message->setTo(array('ara1987-87@mail.ru' => 'Ara'));
  $message->setBody($claenMsg);
  ;

// Send the message
$result = $mailer->send($message);
echo $result.' I am result';
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});




$app->run();