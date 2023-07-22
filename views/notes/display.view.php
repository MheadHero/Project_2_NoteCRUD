<?php require basePath('views/partials/header.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class='mb-6'>
            <?= htmlspecialchars($note['body']); ?>
        </p>


        <form method="POST">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="bg-red-500 hover:bg-red-500 text-white font-bold py-1 px-3 rounded">Delete</button>
        </form>

        <p class=mt-6>
            <a href="/notes" class='text-blue-500 underline'>Back</a>
        </p>


    </div>
</main>


<?php require basePath('views/partials/footer.php') ?>