<?php
require('partials/head.php');
require('partials/header.php');
?>
<main class="flex-grow">
    <div class="mx-auto max-w-5xl py-6 px-8">
        <p>Hello. Welcome to the events page.</p>
    </div>
    <section class="border-b-2 border-black bg-white mx-auto flex justify-center">
    <div class="mx-auto max-w-7xl py-6 px-8">
    <p class="mb-4">Please enter part of the title, description, or event type of the event you are looking for</p>
    <form method="get">
        <label for="txtSearch" class="block text-sm font-medium leading-6 text-gray-900">Search Term</label>
        <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="search" id="search" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
                <button type="submit" class="btn">Search</button>
            </div>
        </div>
    </form>
    <p class="mt-4 mb-2"><?= $records ?></p>
    <ul>
        <?php
        foreach ($events as $event) {
            $output = "<li>" . "<a href='/JemWildlifeCentrePHP/event?id=" . $event['Event_ID_PK'] . "&return=" . $return . "' class='text-blue-500 hover:underline'>" . $event['Event_Title'] . "</a> " . $event['Event_Description'] . "</li>";
            echo $output;
        } ?>
    </ul>
</div>

    </section>
    <?php    
    require('partials/banner.php');
    ?>
</main>
<?php
require('partials/footer.php');
?>
