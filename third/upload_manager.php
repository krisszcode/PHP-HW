<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $allowed = array("jpeg" => "image/jpeg", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed))
            echo "Error: Please select a valid file format.";
            die("<a href=\"third.php\">Go back</a>");

        // Verify MIME type of the file
        if (in_array($filetype, $allowed)) {
            // Check whether file exists before uploading it
            if (file_exists("upload/" . $filename)) {
                echo $filename . " is already exists.";
            }
            else {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
            }
        }
        else {
            echo "Error: There was a problem uploading your file. Please try again.";
        }
    }
    else {
        echo "Error: Please select a file to upload";
    }

}

?>

<a href="third.php">Go back</a>
