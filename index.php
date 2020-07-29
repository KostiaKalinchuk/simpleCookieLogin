<html>
<head>
    <title>Фотоальбом</title>
</head>
<body>
<?php
$files = scandir(__DIR__ . '/uploads');
$links = [];
foreach ($files as $fileName) {
    if ($fileName === '.' || $fileName === '..') {
        continue;
    }
    $links[] = 'http://simplecookielogin/uploads/' . $fileName;
}

foreach ($links as $link):?>
    <a href="<?php echo $link ?>"><img src="<?php echo $link ?>" height="80px"></a>
<?php endforeach; ?>
</body>
</html>