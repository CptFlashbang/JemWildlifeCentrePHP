<?php
require('partials/head.php');
require('partials/header.php');
require('partials/blocks.php');
?>
<main>
    <section class="h-96 flex border-b-2 border-black">
        <div class="flex flex-col items-center border-black border-2 mx-auto my-auto">
            <p class= "pb-8">Welcome, to the</p>
            <h1 class= "pb-8">Jem Wildlife Centre</h1>
            <p>Nurturing nature, one rescue at a time</p>
            <div class="flex flex-row pt-16">
                <p>enquiries@JemWildlifeCentre.org </p>
                <p class="px-4">(+44) 07443412378 </p>
                <div class="flex flex-row">
                    <p>See our work</p>
                    <p>(Down arrow)</p>
                </div>
            </div>
        </div>
    </section>
    <section class="h-48 flex border-b-2 border-black">
        <div class="flex flex-col items-center border-black border-2 mx-auto my-auto">
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
    <section class= "justify-center items-center border-b-2 border-black">
        <div class="mx-auto max-w-screen-sm flex flex-col items-center mt-20 mb-20 border-2 border-black">
            <h1>Our work</h1>
            <p class="text-center">Our mission is to help sick, injured and orphaned wildlife, either by rehabilitating and returning them back into the wild, or by providing a life-long home to those who would not survive in the wild.</p>
        </div>
        <p>IMAGE</p>
        <div class="w-3/5 mx-auto max-w-screen-sm flex flex-col items-center mt-40 mb-16 border-2 border-black">
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
    <section class="border-b-2 border-black grid grid-cols-5 grid-rows-4">
        <h1 class="col-start-2 col-end-3 row-start-1 row-end-2 mt-32">Our residents</h1>
        <p class="col-start-2 col-end-3 row-start-2 row-end-3">Meet a few of our incredible residents! On our homepage, you'll catch a glimpse of three remarkable animals, each with its own unique story and charm. These featured creatures represent just a fraction of the diverse wildlife thriving at Jem Wildlife Centre. Curious to discover more? Click the link to explore our full roster of fascinating animals, each contributing to the rich tapestry of life we cherish and protect in our sanctuary.</p>
        <p class="col-start-4 col-end-5 row-start-2 row-end-3 my-auto">SEE MORE BUTTON</p>
        <div class="flex flex-row mt-20 mb-32 col-start-2 col-end-5 row-start-3 row-end-4 mx-auto">
            <p class="mx-12">IMAGE 1</p>
            <p class="mx-12">IMAGE 2</p>
            <p class="mx-12">IMAGE 3</p>
        </div>
    </section>
    <section class="border-b-2 border-black grid grid-cols-5 grid-rows-5">
        <h1 class="col-start-2 col-end-3 row-start-1 row-end-2 mt-32">Events</h1>
        <p class="col-start-2 col-end-3 row-start-2 row-end-3">Explore the excitement awaiting you at Jem Wildlife Centre! Right on our homepage, we spotlight three upcoming events designed to cater to diverse interests and age groups. Whether it's an exclusive gathering for adults, a fun-filled experience for families, or an engaging adventure tailored for children, our events promise something special for everyone. </p>
        <p class="col-start-2 col-end-3 row-start-3 row-end-4">Intrigued? Dive into the details and mark your calendar for a memorable experience. Click the link below to discover the full spectrum of events we have in store, each crafted with a touch of wonder and a commitment to wildlife education and enjoyment.</p>
        <p class="col-start-4 col-end-5 row-start-3 row-end-4 my-auto">SEE MORE BUTTON</p>
        <div class="flex flex-row mt-20 mb-32 col-start-2 col-end-5 row-start-4 row-end-5 mx-auto">
            <p class="mx-12">IMAGE 1</p>
            <p class="mx-12">IMAGE 2</p>
            <p class="mx-12">IMAGE 3</p>
        </div>
    </section>
</main>
<?php
require('partials/banner.php');
require('partials/footer.php');
?>
