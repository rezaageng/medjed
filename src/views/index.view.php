<?php
$title = 'Home / ';

require './views/partials/header.php';
require './views/partials/navbar.php';

?>


<main class="max-w-7xl m-auto p-4">
  <div class="group relative aspect-[3/4] rounded-3xl overflow-clip sm:aspect-video">
    <a href="./content.php?id=<?= $news[0]['id'] ?>">
      <img src="./images/<?= $news[0]['image'] ?>" alt="banner" class="h-full w-full
        object-cover group-hover:scale-110 transition duration-200">
      <div class="absolute z-10 bottom-0 left-0 bg-gradient-to-t from-gray-800 w-full h-full"></div>
      <div class="absolute z-10 bottom-0 left-0 p-4 sm:p-8 max-w-4xl">
        <h1 class="text-2xl font-bold line-clamp-1 sm:text-4xl"><?= $news[0]['title'] ?></h1>
        <div class="line-clamp-2 sm:text-lg"><?= $news[0]['content'] ?></div>
      </div>
    </a>
  </div>

  <div class="mt-8 flex flex-col mb-1 gap-4">
    <div class="flex item-center justify-between">
      <h2 class="font-bold text-xl">Latest News</h2>
      <form action="" method="post">
        <input class="bg-gray-800 border rounded-lg border-gray-500 px-2 py-1" type="text" name="keyword" autocomplete="off" placeholder="Search.." id="keyword" onchange="search('news')">
      </form>
    </div>
    <div id="news" class="grid w-full grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-3 md:gap-3 lg:grid-cols-4">
      <?php foreach (array_slice($news, 1) as $item) : ?>
        <div class="group">
          <a class="flex flex-col gap-2" href="./content.php?id=<?= $item['id'] ?>">
            <div class="rounded-xl overflow-clip aspect-video object-cover">
              <img class="group-hover:scale-110 transition duration-200 w-full h-full object-cover" src="./images/<?= $item['image'] ?>" alt="banner">
            </div>
            <div class="text-sm">
              <span><?= $item['category'] ?></span>
              <span class="text-white/50"><?= $item['created_at'] ?></span>
            </div>
            <h1 class="line-clamp-2"><?= $item['title'] ?></h1>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
</main>

<?php
require './views/partials/footer.php';
