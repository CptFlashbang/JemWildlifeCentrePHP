<?php
require('partials/head.php');
require('partials/header.php');
require('partials/blocks.php');
?>
<main class="flex-grow"> 
    <section class="border-b-2 border-black mx-auto flex justify-center">
        <div class="grid auto-cols-max auto-rows-max">
            <div class="col-start-1 col-end-3 row-start-1 row-end-2 mt-32">
                <h1>We are the Jem wildlife centre</h1>
                <p class="py-4 max-w-prose">Nestled near Penkridge in Staffordshire, Jem Wildlife Centre is a refuge for British wildlife in need. Dedicated to the rescue and care of sick, injured, and orphaned animals, our mission is woven into every pawprint and feathered wing.</p>
                <p class="py-4 max-w-prose">From the resilient European Hedgehogs to the graceful strides of Red Foxes, each resident embodies the spirit of our commitment. Inhabitants like Roe Deer, alongside the harmonious presence of Common Toads, and the majestic grace of Red Deer, find solace within our sanctuary.</p>
                <p class="py-4 max-w-prose">Our haven extends to the skies, where the majestic presence of Barn Owls and the melodious songs of Skylarks echo our dedication. Join us in safeguarding the wonders of the wild. Jem Wildlife Centre: A refuge for compassion, conservation, and the love of nature.</p>
            </div>
            <div class="flex flex-row mt-20 mb-32 col-start-1 col-end-3 row-start-2 row-end-3 mx-auto">
                <img class="mx-3" src="Images\Seal.jpg">
                <img class="mx-3" src="Images\Seal.jpg">
                <img class="mx-3" src="Images\Seal.jpg">
            </div>
            <div class="col-start-1 col-end-3 row-start-3 row-end-4 mx-auto max-w-fit py-6 px-8 grid auto-cols-max auto-rows-max">
                <h2 class="col-start-1 col-end-3 row-start-1 row-end-2 my-auto pb-16">Our core values:</h2>
                <div class="col-start-1 col-end-2 row-start-2 row-end-3 mx-auto py-6 px-8 ">
                    <h3>Compassion</h3>
                    <p class="py-4 max-w-prose">We are driven by a deep empathy for every living being, fostering compassion in our actions and decisions.</p>
                </div>
                <div class="col-start-2 col-end-3 row-start-2 row-end-3 mx-auto py-6 px-8">
                    <h3>Dedication to Rehabilitation</h3>
                    <p class="py-4 max-w-prose">We are committed to the rehabilitation and well-being of sick, injured, and orphaned wildlife, striving to give each animal a chance for a healthy and fulfilling life.</p>
                </div>
                <div class="col-start-1 col-end-2 row-start-3 row-end-4 mmx-auto py-6 px-8">
                    <h3>Respect for Nature</h3>
                    <p class="py-4 max-w-prose">We recognize and honor the intrinsic value of every creature and the natural world, promoting respect for biodiversity and ecosystems.</p>
                </div>
                <div class="col-start-2 col-end-3 row-start-3 row-end-4 mx-auto py-6 px-8">
                    <h3>Wildlife in the community</h3>
                    <p class="py-4 max-w-prose">We actively engage with our local community, building partnerships and collaborations that promote a shared commitment to wildlife conservation.</p>
                </div>
            </div>
        </div>
    </section>    
    <section class="border-b-2 border-black">
        <div class="flex flex-row">
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
        </div>
        <div class="flex flex-row">
            <div class="mx-auto max-w-5xl py-6 px-8">
                <h2>A range of habitats</h2>
                <p class="py-4 max-w-prose">Immerse yourself in the world of our incredible creatures with our unique viewing areas! Explore captivating viewpoints in our gardens, woodlands, and wetlands, allowing you to get up close to the wonders of nature.</p>
                <p class="py-4 max-w-prose">Whether it's the tranquillity of ponds, or the diverse habitats of farmlands and meadows, our viewing areas offer an intimate connection with the beauty of wildlife.</p>
            </div>
            <div class="mx-auto max-w-5xl py-6 px-8">
                <h2>Sustainable approach</h2>
                <p class="py-4 max-w-prose">From energy-efficient facilities to waste reduction initiatives, our commitment to sustainability extends to habitat preservation and wildlife conservation.</p>
                <p class="py-4 max-w-prose">We strive to be a beacon of responsible environmental stewardship, fostering a future where both the wildlife under our care and the ecosystems they inhabit flourish in a balanced and sustainable harmony.</p>
            </div>            
            <div class="mx-auto max-w-5xl py-6 px-8">
                <h2>Community engagement</h2>
                <p class="py-4 max-w-prose">Community engagement is not just a philosophy; it's a shared commitment to fostering meaningful connections between our sanctuary and the local community.</p>
                <p class="py-4 max-w-prose">One impactful initiative involves collaborating with community members to address food waste. Through partnerships with local businesses and individuals, we intercept excess produce that might otherwise go to waste and redirect it to nourish the animals under our care.</p>
            </div>
        </div>
    </section>
    <?php    
    require('partials/banner.php');
    ?>
</main>
<?php
require('partials/footer.php');
?>
