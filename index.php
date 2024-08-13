<!DOCTYPE html>
<html>
    <body>
        <?php
        // Proveri da li je e-mail prosleđen kao GET parametar
        if (isset($_GET['email'])) {
            $email = $_GET['email'];
        } else {
            $email = "Nepoznat";
        }

        // Pripremi log liniju
        $log = "Email: $email, Vreme: " . date('Y-m-d H:i:s') . "\n";

        // Zapiši log u datoteku (ili u bazu podataka)
        file_put_contents('logs.txt', $log, FILE_APPEND);

        // Preusmeri korisnika na željenu stranicu
        header("Location: https://www.example.com/thank-you");
        exit();
        ?>
    </body>
</html>
