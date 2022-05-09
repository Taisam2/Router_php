<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <nav>
        <ul>
            <li><a href="/about.php">About Us</a></li>
            <li><a href="/contact.php">Contact</a></li>
        </ul>
    </nav>
    <h1>Task for the day</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>     
            
            <li>
                <?php if ($task->completed) : ?>
                    <strong><?= $task->description; ?></strong>

                <?php else: ?>
                    <?= $task->description ?>
                <?php endif; ?>
            </li>
            
        <?php endforeach; ?>

    </ul>
</body>
</html>