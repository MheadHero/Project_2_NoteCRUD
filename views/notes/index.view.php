<?php require('views/partials/header.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?= 'User ID: ' . $notes[0]['userid'] . ' has created these notes'; ?>
        <ul>
            <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?=$note['id']?>" class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']); ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/note/create" class="text-blue-500 underline">Create New Note</a>
        </p>
    </div>
</main>


<?php require('views/partials/footer.php'); ?>