<?php

if (isset($_POST['content'])) {
    $content = $_POST['content'];
    file_put_contents('DataBase/savedfile.txt', $content);


    $message = 'Content saved successfully!';
} else {
    $message = '';
    $content = file_exists('DataBase/savedfile.txt') ? file_get_contents('DataBase/savedfile.txt') : '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Basic Text Editor</title>
    <style>
        * {
            text-align: center;
        }

        body {
            background: linear-gradient(45deg, #a92a34, #c03bff);
            min-height: 100vh;
        }

        textarea {
            text-align: left;
            padding: 1rem;
            border:none;
            border-radius: 10px;
            width: 78vw;
            height: 65vh;
            backdrop-filter: blur(3px);
            outline: none;
            background: rgba(20, 20, 20, .2);
            box-shadow: inset 1px 1px 10px rgba(0, 0, 0, .4);
            resize: none;
        }
        input:hover,input:focus,input:active, textarea:hover,textarea:focus,textarea:active{
            scale: 1.01;
            outline: none;
            box-shadow: 1px 1px 10px rgba(250, 250, 250, .4);

        }
    </style>
</head>

<body>
    <h1>Simple Text Editor</h1>
    <?php if (isset($message)) : ?>
        <p style="color:green;"><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="" method="post" style="width: 100%; display:flex; align-items:center; justify-content:center; flex-direction: column; ">
        <textarea spellcheck="false" name="content" rows="10" cols="50"><?php echo htmlspecialchars($content); ?></textarea><br>
        <input type="submit" value="Save" style='padding:.5rem .9rem; border:none; background: #000; color:white; border-radius:5px; '>
    </form>
</body>

</html>