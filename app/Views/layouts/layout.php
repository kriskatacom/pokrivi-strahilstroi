<?php

use App\Core\View;
?>

<!DOCTYPE html>
<html lang="bg" class="scroll-smooth">

<head>
    <?php

    View::loadPartial('partials/head', [
        'title' => $title ?? null,
        'description' => $description ?? null,
        'og_tags' => $og_tags ?? null
    ]); ?>
</head>

<body class="antialiased text-gray-900 bg-gray-50 flex flex-col min-h-screen">

    <?php View::loadPartial('partials/navbar'); ?>

    <main id="main-content" class="flex-grow">
        <?= $content ?>
    </main>

    <?php View::loadPartial('partials/footer'); ?>

</body>

</html>
