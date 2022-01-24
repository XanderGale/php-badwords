<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>

    <?php 

        $paragraph = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero maxime quae unde. Dignissimos consequuntur nulla animi voluptas accusantium deserunt numquam, voluptatem nostrum quo adipisci, optio facilis ipsum quam quas! Tenetur!';
        $censoredWord = $_GET['censoredWord'];

        $censoredParagraph = str_replace($censoredWord, '***', $paragraph);

    ?>
    
    <h2>Paragrafo:</h2>

    <p>
        <?php
            echo $censoredParagraph;
        ?>
    </p>

</body>
</html>