<?php
require 'C:\xampp\htdocs\web\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\web\PHPMailer-master\src\SMTP.php';
require 'C:\xampp\htdocs\web\PHPMailer-master\src\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and clean user input
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$manager = isset($_POST['manager']) ? trim($_POST['manager']) : '';
$revI = isset($_POST['revI']) ? trim($_POST['revI']) : '';
$jobtitle = isset($_POST['jobtitle']) ? trim($_POST['jobtitle']) : '';
$department = isset($_POST['department']) ? trim($_POST['department']) : '';
$pac = isset($_POST['pac']) ? trim($_POST['pac']) : '';
$revII = isset($_POST['revII']) ? trim($_POST['revII']) : '';
$Category1 = isset($_POST['Category1']) ? trim($_POST['Category1']) : '';
$Objective1 = isset($_POST['Objective1']) ? trim($_POST['Objective1']) : '';
$SuccessMeasure1 = isset($_POST['SuccessMeasure1']) ? trim($_POST['SuccessMeasure1']) : '';
$Weight1 = isset($_POST['Weight1']) ? trim($_POST['Weight1']) : '';
$MidYearReview1 = isset($_POST['MidYearReview1']) ? trim($_POST['MidYearReview1']) : '';
$EndYearReview1 = isset($_POST['EndYearReview1']) ? trim($_POST['EndYearReview1']) : '';

$Category2 = isset($_POST['Category2']) ? trim($_POST['Category2']) : '';
$Objective2 = isset($_POST['Objective2']) ? trim($_POST['Objective2']) : '';
$SuccessMeasure2 = isset($_POST['SuccessMeasure2']) ? trim($_POST['SuccessMeasure2']) : '';
$Weight2 = isset($_POST['Weight2']) ? trim($_POST['Weight2']) : '';
$MidYearReview2 = isset($_POST['MidYearReview2']) ? trim($_POST['MidYearReview2']) : '';
$EndYearReview2 = isset($_POST['EndYearReview2']) ? trim($_POST['EndYearReview2']) : '';

$Category3 = isset($_POST['Category3']) ? trim($_POST['Category3']) : '';
$Objective3 = isset($_POST['Objective3']) ? trim($_POST['Objective3']) : '';
$SuccessMeasure3 = isset($_POST['SuccessMeasure3']) ? trim($_POST['SuccessMeasure3']) : '';
$Weight3 = isset($_POST['Weight3']) ? trim($_POST['Weight3']) : '';
$MidYearReview3 = isset($_POST['MidYearReview3']) ? trim($_POST['MidYearReview3']) : '';
$EndYearReview3 = isset($_POST['EndYearReview3']) ? trim($_POST['EndYearReview3']) : '';

$Category4 = isset($_POST['Category4']) ? trim($_POST['Category4']) : '';
$Objective4 = isset($_POST['Objective4']) ? trim($_POST['Objective4']) : '';
$SuccessMeasure4 = isset($_POST['SuccessMeasure4']) ? trim($_POST['SuccessMeasure4']) : '';
$Weight4 = isset($_POST['Weight4']) ? trim($_POST['Weight4']) : '';
$MidYearReview4 = isset($_POST['MidYearReview4']) ? trim($_POST['MidYearReview4']) : '';
$EndYearReview4 = isset($_POST['EndYearReview4']) ? trim($_POST['EndYearReview4']) : '';

$Category5 = isset($_POST['Category5']) ? trim($_POST['Category5']) : '';
$Objective5 = isset($_POST['Objective5']) ? trim($_POST['Objective5']) : '';
$SuccessMeasure5 = isset($_POST['SuccessMeasure5']) ? trim($_POST['SuccessMeasure5']) : '';
$Weight5 = isset($_POST['Weight5']) ? trim($_POST['Weight5']) : '';
$MidYearReview5 = isset($_POST['MidYearReview5']) ? trim($_POST['MidYearReview5']) : '';
$EndYearReview5 = isset($_POST['EndYearReview5']) ? trim($_POST['EndYearReview5']) : '';

$Category6 = isset($_POST['Category6']) ? trim($_POST['Category6']) : '';
$Objective6 = isset($_POST['Objective6']) ? trim($_POST['Objective6']) : '';
$SuccessMeasure6 = isset($_POST['SuccessMeasure6']) ? trim($_POST['SuccessMeasure6']) : '';
$Weight6 = isset($_POST['Weight6']) ? trim($_POST['Weight6']) : '';
$MidYearReview6 = isset($_POST['MidYearReview6']) ? trim($_POST['MidYearReview6']) : '';
$EndYearReview6 = isset($_POST['EndYearReview6']) ? trim($_POST['EndYearReview6']) : '';

$Kategory1 = isset($_POST['Kategory1']) ? trim($_POST['Kategory1']) : '';
$Weightb1 = isset($_POST['Weightb1']) ? trim($_POST['Weightb1']) : '';
$MidYearReview_b1 = isset($_POST['MidYearReview_b1']) ? trim($_POST['MidYearReview_b1']) : '';
$EndYearReview_b1 = isset($_POST['EndYearReview_b1']) ? trim($_POST['EndYearReview_b1']) : '';

$Kategory2 = isset($_POST['Kategory2']) ? trim($_POST['Kategory2']) : '';
$Weightb2 = isset($_POST['Weightb2']) ? trim($_POST['Weightb2']) : '';
$MidYearReview_b2 = isset($_POST['MidYearReview_b2']) ? trim($_POST['MidYearReview_b2']) : '';
$EndYearReview_b2 = isset($_POST['EndYearReview_b2']) ? trim($_POST['EndYearReview_b2']) : '';


$Kategory3 = isset($_POST['Kategory3']) ? trim($_POST['Kategory3']) : '';
$Weightb3 = isset($_POST['Weightb3']) ? trim($_POST['Weightb3']) : '';
$MidYearReview_b3 = isset($_POST['MidYearReview_b3']) ? trim($_POST['MidYearReview_b3']) : '';
$EndYearReview_b3 = isset($_POST['EndYearReview_b3']) ? trim($_POST['EndYearReview_b3']) : '';


$Kategory4 = isset($_POST['Kategory4']) ? trim($_POST['Kategory4']) : '';
$Weightb4 = isset($_POST['Weightb4']) ? trim($_POST['Weightb4']) : '';
$MidYearReview_b4 = isset($_POST['MidYearReview_b4']) ? trim($_POST['MidYearReview_b4']) : '';
$EndYearReview_b4 = isset($_POST['EndYearReview_b4']) ? trim($_POST['EndYearReview_b4']) : '';

$Kategory5 = isset($_POST['Kategory5']) ? trim($_POST['Kategory5']) : '';
$Weightb5 = isset($_POST['Weightb5']) ? trim($_POST['Weightb5']) : '';
$MidYearReview_b5 = isset($_POST['MidYearReview_b5']) ? trim($_POST['MidYearReview_b5']) : '';
$EndYearReview_b5 = isset($_POST['EndYearReview_b5']) ? trim($_POST['EndYearReview_b5']) : '';



    // Sanitize and validate
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Invalid email format: [$email]";
        exit;
    }

    // ✅ Generate the URL with prefilled data
    $queryParams = http_build_query([
        'name' => $name,
        'email' => $email,
        'manager'=> $manager,
        'revI'=> $revI,
        'jobtitle'=> $jobtitle,
        'department'=> $department,
        'pac'=> $pac,
        'revII'=> $revII,
        'Category1'=> $Category1,
        'Objective1'=> $Objective1,
        'SuccessMeasure1'=> $SuccessMeasure1,
        'Weight1'=> $Weight1,
        'MidYearReview1'=> $MidYearReview1,
        'EndYearReview1'=> $EndYearReview1,
        'Category2'=> $Category2,
'Objective2'=> $Objective2,
'SuccessMeasure2'=> $SuccessMeasure2,
'Weight2'=> $Weight2,
'MidYearReview2'=> $MidYearReview2,
'EndYearReview2'=> $EndYearReview2,

'Category3'=> $Category3,
'Objective3'=> $Objective3,
'SuccessMeasure3'=> $SuccessMeasure3,
'Weight3'=> $Weight3,
'MidYearReview3'=> $MidYearReview3,
'EndYearReview3'=> $EndYearReview3,

'Category4'=> $Category4,
'Objective4'=> $Objective4,
'SuccessMeasure4'=> $SuccessMeasure4,
'Weight4'=> $Weight4,
'MidYearReview4'=> $MidYearReview4,
'EndYearReview4'=> $EndYearReview4,

'Category5'=> $Category5,
'Objective5'=> $Objective5,
'SuccessMeasure5'=> $SuccessMeasure5,
'Weight5'=> $Weight5,
'MidYearReview5'=> $MidYearReview5,
'EndYearReview5'=> $EndYearReview5,

'Category6'=> $Category6,
'Objective6'=> $Objective6,
'SuccessMeasure6'=> $SuccessMeasure6,
'Weight6'=> $Weight6,
'MidYearReview6'=> $MidYearReview6,
'EndYearReview6'=> $EndYearReview6,
 
'Kategory1'=> $Kategory1,
'Kategory2'=> $Kategory2,
'Kategory3'=> $Kategory3,
'Kategory4'=> $Kategory4,
'Kategory5'=> $Kategory5,

'Weightb1'=> $Weightb1,
'Weightb2'=> $Weightb2,
'Weightb3'=> $Weightb3,
'Weightb4'=> $Weightb4,

'MidYearReview_b1'=> $MidYearReview_b1,
'MidYearReview_b2'=> $MidYearReview_b2,
'MidYearReview_b3'=> $MidYearReview_b3,
'MidYearReview_b4'=> $MidYearReview_b4,
'MidYearReview_b5'=> $MidYearReview_b5,

'EndYearReview_b1'=> $EndYearReview_b1,
'EndYearReview_b2'=> $EndYearReview_b2,
'EndYearReview_b3'=> $EndYearReview_b3,
'EndYearReview_b4'=> $EndYearReview_b4,
'EndYearReview_b5'=> $EndYearReview_b5,

    ]);
    $url = "localhost/web/display.php?" . $queryParams;

    // 📬 Set up PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->isHTML(true);
        $mail->SMTPDebug = 0; // Change to 2 if debugging
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'crystalized0anne@gmail.com';
        $mail->Password = 'rqnq khls fdiz uvwk'; // App password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('crystalized0anne@gmail.com', 'Anne');
        $mail->addAddress($email);
        $mail->addAddress('anne.mal3b@gmail.com');

        // 📎 Email content
        $mail->Subject = 'Your Form Submission Link';
        $mail->Body = "
            <html>
            <head><title>Your Form Submission</title></head>
            <body>
                <p>Hello <strong>" . htmlspecialchars($name) . "</strong>,</p>
                <p>Your form was submitted successfully.</p>
                <p><a href='" . $url . "'>Click here to view your filled-out form</a></p>
            </body>
            </html>
        ";

        $mail->send();
        echo "✅ Message has been sent successfully!";
    } catch (Exception $e) {
        echo "❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "⚠️ Please submit the form first.";
}
