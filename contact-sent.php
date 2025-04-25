<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $feed = htmlspecialchars(trim($_POST['feed']));

    echo "
        <h2>Iesūtītā informācija</h2>
        <ul>
            <li><strong>Vārds:</strong> " . $name . "</li>
            <li><strong>E-pasts:</strong> " . $email . "</li>
            <li><strong>Atsauce:</strong> " . $feed . "</li>
        ";
}
?>