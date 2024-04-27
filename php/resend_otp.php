<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../library/php_mailer/vendor/autoload.php'; // Path to autoload.php from PHPMailer

// Establish database connection
include '../config/config.php';
// Function to generate a random 4-digit OTP
function generateOTP() {
    return sprintf('%04d', mt_rand(0, 9999)); // Generates a 4-digit random number with leading zeros if necessary
}

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate and retrieve email from POST data
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    // Check if email is not empty
    if (!empty($email)) {
        // Generate a 4-digit OTP
        $otp = generateOTP();

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'divinememorialgarden9@gmail.com'; // Your Gmail address
            $mail->Password = 'nftferwazbaxifme'; // Your Gmail password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption
            $mail->Port = 587; // TCP port to connect to

            // Sender and recipient settings
            $mail->setFrom('divinememorialgarden9@gmail.com', 'DMG'); // Sender's email address and name
            $mail->addAddress($email); // Recipient's email address

            // Email content (with OTP)
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'OTP for Account Verification';

            // Styling for OTP layout
            $mail->Body = '
                <html>
                <head>
                    <style>
                        .otp-container {
                            border: 2px solid #ccc;
                            padding: 20px;
                            font-size: 18px;
                            font-weight: bold;
                            text-align: center;
                            background-color: #f9f9f9;
                        }
                    </style>
                </head>
                <body>
                    <div class="otp-container">
                        <p>Your OTP for account verification:</p>
                        <p style="font-size: 24px; color: #007bff;">' . $otp . '</p>
                    </div>
                </body>
                </html>
            ';

            // Send the email
            $mail->send();
            echo 'Email has been sent successfully';

            // Update user OTP in database
            $stmt = $conn->prepare("UPDATE users SET user_otp = ? WHERE user_email = ?");
            $stmt->bind_param("is", $otp, $email);
            $stmt->execute();
            $stmt->close();
        } catch (Exception $e) {
            echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    } else {
        echo 'Invalid email.';
    }
} else {
    echo 'Invalid request method.';
}

// Close database connection
$conn->close();
?>
