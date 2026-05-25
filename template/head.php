<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? ' - Wallacea' ?></title>

    <base href="/website/">

    <?php if (isset($css)): ?>
        <link rel="stylesheet" href="<?= $css ?>">
    <?php endif; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&family=Poppins:wght@400;500;600;700&family=Roboto:wght@100..900&display=swap"
        rel="stylesheet">
</head>
