<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X=UA-Compatible" content="IE-edge">
    <meta name="viewport" content="widh=device-widht, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
<table border="1" ce11padding="10" c11spasing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if ($i % 2 == 1) : ?>
            <tr class="warna-baris">
            <?php else : ?>
            <tr>
            <?php endif; ?>
            <?php for ($j = 1; $j <= 5; $j++); ?>
            <td><?= "$i,$j"; ?></td>
        <?php endfor; ?>
            </tr>
    </table>
</body>
</html>
        