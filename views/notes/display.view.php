<?php require basePath('views/partials/header.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class='mb-6'>
            <?= htmlspecialchars($note['body']); ?>
        </p>

        <form method="POST" class="inline-block">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="bg-red-500 hover:bg-red-500 text-white font-bold py-1 px-3 rounded">Delete</button>
        </form>

        <footer class="mt-6 inline-block ml-4">
            <a href="/note/edit?id=<?= $note['id'] ?>"
                class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Edit</a>
        </footer>

        <p class="mt-6">
            <a href="/notes" class='text-blue-500 underline'>Back</a>
        </p>


    </div>
</main>


<?php require basePath('views/partials/footer.php') ?>