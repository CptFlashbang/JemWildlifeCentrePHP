<?php
require('partials/head.php');
require('partials/header.php');
require('partials/blocks.php');
?>
<main class="flex-grow">
    <?php    
    require('partials/banner.php');
    ?>
    <section class=" flex-grow mx-auto py-6 px-8 border-b-2 border-black">
        <h3>Before sending us a message, here are some things you should know:</h3>      
    <?php        
    foreach ($questions as $key => $question) {
        echo '<div class="question">' . $question . '</div>';
        

        $answer = $answers[$key]['text'];
        $status = $answers[$key]['status'];
        
        if ($status === 'Visible') {
            echo '<p>' . $answer . '</p>';
        }
    }
    ?>
    </section>  
    <section class="mx-auto max-w-7xl py-6 px-8">
         <h2 class="font-bold mb-4">Got a project in mind? Use the form to give us as much detail as possible and we’ll get back to you as soon as we can.</h2>    
        <form action="contact.php" method="post" class="mt-4">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-900">Name:</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-indigo-600 focus:ring-0" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-900">Email:</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-indigo-600 focus:ring-0" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-900">Message:</label>
                <textarea id="message" name="message" rows="4" class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-indigo-600 focus:ring-0" required></textarea>
            </div>
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:border-indigo-300">Submit</button>
        </form>
    </section>
</main>
<?php
require('partials/footer.php');
?>
