<div class="container mx-auto p-8">
  <div>
    <?php Msg::info() ?>
  </div>

  <h1 class="text-3xl dark:text-white font-bold">
    <?= (isset($_SESSION['login']) ? 'Welcome ' . $_SESSION['login'] : 'Dashboard') ?>
  </h1>

  <div class="max-w-md">
    <a href="<?= BASE_URL ?>profile" class="hover:underline">All user</a>
  </div>

  <?php if (isset($_SESSION['login'])) : ?>
    <a href="<?= BASE_URL ?>profile/logout" class="inline-block mt-4 dark:hover:bg-[#181818] px-4 py-2 text-sm dark:text-gray-300 bg-[#202020]" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
  <?php else : ?>
    <a href="<?= BASE_URL ?>login" class="inline-block mt-4 dark:hover:bg-[#181818] px-4 py-2 text-sm dark:text-gray-300 bg-[#202020]" role="menuitem" tabindex="-1" id="user-menu-item-2">Login</a>
    <a href="<?= BASE_URL ?>register" class="inline-block mt-4 dark:hover:bg-[#181818] px-4 py-2 text-sm dark:text-gray-300 bg-[#202020]" role="menuitem" tabindex="-1" id="user-menu-item-2">Register</a>
  <?php endif; ?>
</div>