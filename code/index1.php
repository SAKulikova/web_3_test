<!-- ====== Задание 2.а ====== -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab3.#2a</title>
</head>
<body>
<div id="text_analys">
    <?php
    $countWord = "0";
    $countSymbols = "0";
    $text = "";

    if (isset($_POST['count_button']) && isset($_POST['text']))
    {
        $text = $_POST['text'];
        $matches = array();

        $regexp = '/\S+/ui';
        $countWord = (string)preg_match_all($regexp, $text, $matches);

        $regexp = '/./ui';
        $countSymbols = (string)preg_match_all($regexp, $text, $matches);
    }
    ?>

    <form method="post">
        <textarea name="text" rows="5"></textarea>
        <input type="submit" name="count_button" value="Click">
        <p><?=$countWord?> слов и <?=$countSymbols?> символов найдено</p>
    </form>

</div>
</body>
</html>