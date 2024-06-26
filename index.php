<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Морський Бій</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div id="gameArea">
    <div class="footer htmlpreview-fallback">
        <button class="btn" onclick="runGame(true)">Почати Гру</button>
    </div>
</div>

<script src="js/index.js?<?php echo time(); ?>"></script>
<script>
    function runGame(startImmediatly) {
        var game = new SeeBattle('gameArea');
        game.run();

        if (startImmediatly) {
            game.startNewGame();
        }
    }
</script>

</body>
</html>