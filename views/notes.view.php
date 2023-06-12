<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>
    
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?= 'User ID: ' . $notes[0]['userid'] . ' has created these notes'; ?>
        <?php foreach ($notes as $note) : ?>            
            <li>
                <a href="/note?id=<?=$note['id']?>" class="text-blue-500 hover:underline">
                    <?php echo $note['body']; ?>
                </a>
            </li>
        <?php endforeach; ?>
      </div>
    </main>


<?php require('partials/footer.php'); ?>