<?php


if (isset($_POST['submit'])) {
    $sentence = isset($_POST['sentence']) ? $_POST['sentence'] : '';

    if ($sentence === "") {
        $errors[] = 'Please don\'t leave the field blank';
    }

    if (isset($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:#ff0000'>$error</p>";
        }
    }

    if (!isset($errors)) {
        echo changeCharacters($sentence);
    }

}


function changeCharacters($sentence){

    $pattern = "/[^a-zA-Z]/";

    $unwanted_array = array('Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
        'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
        'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
        'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', 'ü' => 'u', 'ű' => 'u', "ő" => "o", "Ő" => "O", "Ű" => "U",
    );

    $withoutAccents = strtr($sentence, $unwanted_array);
    return preg_replace($pattern, '-', $withoutAccents);
}

?>

<form action="" method="post">
    <label for="sentence">Type your sentence here:</label>
    <input type="text" name="sentence" value="">
    <button type="submit" name="submit">Translate</button>
</form>

<a href="../index.php">Go back</a>