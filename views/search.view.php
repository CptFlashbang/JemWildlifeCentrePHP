<?php
require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<main>
    <div class="mx-auto max-w-7xl py-6 px-8">
        <p class="mb-4">Please enter part of the title of the book you are looking for</p>
        <form method="get">
            <label for="txtSearch" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required value="<?= isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>">
                    <button type="submit" class="btn">Search</button>
                </div>
            </div>
        </form>
        <p class="mt-4 mb-2"><?= $records ?></p>
        <ul>
            <?php
            foreach ($books as $book) {
                $output = "<li>" . "<a href='/phpapp/book?id=" . $book['ID'] . "&return=" . $return . "' class='text-blue-500 hover:underline'>" . $book['title'] . "</a> by " . $book['author'] . "</li>";
                echo $output;
            } ?>
        </ul>
    </div>
</main>

<?php
require('partials/footer.php');
?>
