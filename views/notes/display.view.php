<?php require basePath('views/partials/header.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class='mb-6'>
            <?= htmlspecialchars($note['body']); ?>
        </p>

        <p>
            <a href="/notes" class='text-blue-500 underline'>Back</a>
        </p>
    </div>
</main>


<?php require basePath('views/partials/footer.php') ?>