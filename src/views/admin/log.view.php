<?php
require '../views/partials/admin/header.php';
require '../views/partials/admin/navbar.php';
?>

<main class="max-w-7xl m-auto p-4">
  <div class="flex gap-4 flex-col">
    <?php foreach ($log as $item) : ?>
      <div class="flex flex-col w-full bg-gray-800 rounded-xl overflow-clip p-4">
        <h1 class="text-xl line-clamp-1"><?= $item['activity'] ?></h1>
        <div class="line-clamp-2 rte-content"><?= $item['timestamp'] ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php require '../views/partials/admin/footer.php' ?>