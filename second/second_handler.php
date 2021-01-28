<?php

    if (isset($_POST['submit'])) {
        // Collect the form data.
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        // Validate the phone number.
        $pattern = '/^[+][36]{1,2}[ ][(][1-9]{1,2}[0-9][)][ ][1-9]{3}[-][1-9]{3,4}$/';
        if (!preg_match($pattern, $phone)) {
            $errors[] = 'Please enter a valid phone number';
        }

        // Check if first name is set.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please enter a valid email';
        }
        if (!isset($errors)) {
            // The header row of the CSV.
            $header = "Phone,Email\n";

            // The data of the CSV.
            $data = "$phone,$email\n";

            // The name of the CSV.
            $fileName = "user_data.csv";

            /*
             * Create the CSV file.
             * If file exists, append the data to it. Otherwise create the file.
             */
            if (file_exists($fileName)) {
                // Add only data. The header is already added in the existing file.
                file_put_contents($fileName, $data, FILE_APPEND);
            }
            else {
                // Add CSV header and data.
                file_put_contents($fileName, $header . $data);
            }
        }
    }





