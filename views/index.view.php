<?php
require('partials/head.php');
require('partials/header.php');
require('partials/blocks.php');
?>
<main class="flex-grow">
    <section class="h-96 flex border-b-2 border-black mx-auto">
        <div class="flex flex-col items-center mx-auto my-auto">
            <p class= "pb-8 text-3xl">Welcome, to the</p>
            <h1 class= "pb-8">Jem Wildlife Centre</h1>
            <p class="text-xl">Nurturing nature, one rescue at a time</p>
            <div class="flex flex-row pt-16">
                <p class="text-sm">enquiries@JemWildlifeCentre.org </p>
                <p class="text-sm px-4">(+44) 07443412378 </p>
                <div class="flex flex-row">
                    <p class="text-sm">See our work</p>
                    <p>(Down arrow)</p>
                </div>
            </div>
        </div>
    </section>
    <section class="h-48 flex border-b-2 border-black bg-white mx-auto">
        <div class="flex flex-col items-center mx-auto my-auto">
            <p>We have had the privilege of collaborating with these incredible conservation partners. </p>
            <div class="flex flex-row">
                <p class="px-4">PARTNER 1</p>
                <p class="px-4">PARTNER 2</p>
                <p class="px-4">PARTNER 3</p>
                <p class="px-4">PARTNER 4</p>
                <p class="px-4">PARTNER 5</p>
            </div>            
        </div>
    </section>
    <section class= "justify-center items-center border-b-2 border-black bg-white mx-auto">
        <div class="mx-auto max-w-screen-sm flex flex-col items-center mt-20 mb-20">
            <h1>Our work</h1>
            <p class="text-center py-8">Our mission is to help sick, injured and orphaned wildlife, either by rehabilitating and returning them back into the wild, or by providing a life-long home to those who would not survive in the wild.</p>
        </div>
        <img src="Images\Seal.jpg" class="mx-auto">
        <div class="w-3/5 mx-auto max-w-screen-sm flex flex-col items-center mt-40 mb-16">
            <?php
            $quote = "Partnering with the Jem Wildlife Centre has been an absolute delight, and we eagerly anticipate engaging their expertise in our shared commitment to wildlife conservation.";
            $author= "John Smith";
            $organisation= "WWF";
            $image1 = "";
            $image2 = "";
            generateBlockTestimonial($quote, $author, $organisation)
            ?>
        </div>
    </section>
    <section class="border-b-2 border-black bg-white mx-auto flex justify-center">
        <div class="grid auto-cols-max auto-rows-max">
            <div class="col-start-1 col-end-2 row-start-1 row-end-3 mt-32">
                <?php
                $headerLevel = 1; 
                $headerContent = "Our residents";
                $contents = [
                    "Meet a few of our incredible residents! On our homepage, you'll catch a glimpse of three remarkable animals, each with its own unique story and charm. These featured creatures represent just a fraction of the diverse wildlife thriving at Jem Wildlife Centre. Curious to discover more? Click the link to explore our full roster of fascinating animals, each contributing to the rich tapestry of life we cherish and protect in our sanctuary."
                ];
                generateBlockHeaderAndContentVertical($headerLevel, $headerContent, $contents);
                ?>
            </div>
            <button class="col-start-2 col-end-3 row-start-2 row-end-3 my-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="button">See more</button>

            <div class="flex flex-row mt-20 mb-32 col-start-1 col-end-3 row-start-3 row-end-4 mx-auto">
                <img class="mx-3" src="Images\Seal.jpg">
                <img class="mx-3" src="Images\Seal.jpg">
                <img class="mx-3" src="Images\Seal.jpg">
            </div>
        </div>
    </section>
    <section class="border-b-2 border-black bg-white mx-auto flex justify-center">
        <div class="grid auto-cols-max auto-rows-max">
            <div class="col-start-1 col-end-2 row-start-1 row-end-3 mt-32">
                <?php
                $headerLevel = 1; 
                $headerContent = "Events";
                $contents = [
                    "Explore the excitement awaiting you at Jem Wildlife Centre! Right on our homepage, we spotlight three upcoming events designed to cater to diverse interests and age groups. Whether it's an exclusive gathering for adults, a fun-filled experience for families, or an engaging adventure tailored for children, our events promise something special for everyone.",
                    "Intrigued? Dive into the details and mark your calendar for a memorable experience. Click the link below to discover the full spectrum of events we have in store, each crafted with a touch of wonder and a commitment to wildlife education and enjoyment."
                ];
                generateBlockHeaderAndContentVertical($headerLevel, $headerContent, $contents);
                ?>
            </div>
            <button class="col-start-2 col-end-3 row-start-2 row-end-3 my-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="button">See more</button>
            <div class="flex flex-row mt-20 mb-32 col-start-1 col-end-3 row-start-4 row-end-5 mx-auto">
                <img class="mx-3" src="Images\Seal.jpg">
                <img class="mx-3" src="Images\Seal.jpg">
                <img class="mx-3" src="Images\Seal.jpg">
            </div>
        </div>
    </section>
</main>
<?php
require('partials/banner.php');
require('partials/footer.php');
?>
