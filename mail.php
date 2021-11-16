<?php
    session_start();
    require 'vendor/autoload.php';
    use \Mailjet\Resources;
    $mj = new \Mailjet\Client('3a7e55f449b347f74f2ec5150df34a00','a6e0c5fb088959ef1595f3dae1dbf866',true,['version' => 'v3.1']);
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "fcbonnaire01@gmail.com",
                    'Name' => "François CB"
                ],
                'To' => [
                    [
                        'Email' => htmlspecialchars($_POST['email']),
                        'Name' => "fucking test "
                    ]
                ],
                'Subject' => htmlspecialchars($_POST['subject']),
                'TextPart' => "test email",
                'HTMLPart' => htmlspecialchars($_POST['message'])
            ]
        ]
    ];

    $response = $mj->post(Resources::$Email, ['body' => $body]);
    //   $response->success() && var_dump($response->getData());
    $_SESSION['send_email_true'] = $response->success();
    header('location: index.php');
    exit();
?>
