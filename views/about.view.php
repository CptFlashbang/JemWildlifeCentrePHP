<?php
require('partials/head.php');
require('partials/header.php');

require('partials/blocks.php');
?>
<main>
    <section class="border-b-2 border-black">
        <div class="grid grid-cols-5 grid-rows-6">
            <h1 class="col-start-2 col-end-3 row-start-1 row-end-2 mt-32">We are the Jem wildlife centre</h1>
            <p class="col-start-2 col-end-3 row-start-2 row-end-3">Nestled near Penkridge in Staffordshire, Jem Wildlife Centre is a refuge for British wildlife in need. Dedicated to the rescue and care of sick, injured, and orphaned animals, our mission is woven into every pawprint and feathered wing.</p>
            <p class="col-start-2 col-end-3 row-start-3 row-end-4 my-auto">From the resilient European Hedgehogs to the graceful strides of Red Foxes, each resident embodies the spirit of our commitment. Inhabitants like Roe Deer, alongside the harmonious presence of Common Toads, and the majestic grace of Red Deer, find solace within our sanctuary.</p>
            <p class="col-start-2 col-end-3 row-start-4 row-end-5 my-auto">Our haven extends to the skies, where the majestic presence of Barn Owls and the melodious songs of Skylarks echo our dedication. Join us in safeguarding the wonders of the wild. Jem Wildlife Centre: A refuge for compassion, conservation, and the love of nature.</p>        
            <p class="col-start-4 col-end-5 row-start-4 row-end-5 my-auto">SEE MORE BUTTON</p>
            <div class="flex flex-row mt-20 mb-32 col-start-2 col-end-5 row-start-5 row-end-6 mx-auto">
                <p class="mx-12">IMAGE 1</p>
                <p class="mx-12">IMAGE 2</p>
                <p class="mx-12">IMAGE 3</p>
            </div>
        </div>
        <div class="mx-auto max-w-5xl py-6 px-8 grid grid-cols-2 grid-rows-4">
            <h2 class="col-start-1 col-end-3 row-start-1 row-end-2">Our core values:</h2>
            <div class="col-start-1 col-end-2 row-start-2 row-end-3  mx-auto max-w-5xl py-6 px-8 ">
                <?php
                $headerLevel = 3; 
                $headerContent = "Compassion";
                $contents = [
                    "We are driven by a deep empathy for every living being, fostering compassion in our actions and decisions.",
                ];
                block_header_and_content_vertical($headerLevel, $headerContent, $contents);
                ?>
            </div>
            <div class="col-start-2 col-end-3 row-start-2 row-end-3 mx-auto max-w-5xl py-6 px-8">
                <?php
                $headerLevel = 3; 
                $headerContent = "Dedication to Rehabilitation";
                $contents = [
                    "We are committed to the rehabilitation and well-being of sick, injured, and orphaned wildlife, striving to give each animal a chance for a healthy and fulfilling life.",
                ];
                block_header_and_content_vertical($headerLevel, $headerContent, $contents);
                ?>
            </div>
            <div class="col-start-1 col-end-2 row-start-3 row-end-4 mx-auto max-w-5xl py-6 px-8">
                <?php
                $headerLevel = 3; 
                $headerContent = "Respect for Nature";
                $contents = [
                    "We recognize and honor the intrinsic value of every creature and the natural world, promoting respect for biodiversity and ecosystems.",
                ];
                block_header_and_content_vertical($headerLevel, $headerContent, $contents);
                ?>
            </div>
            <div class="col-start-2 col-end-3 row-start-3 row-end-4 mx-auto max-w-5xl py-6 px-8">
                <?php
                $headerLevel = 3; 
                $headerContent = "Wildlife in the community";
                $contents = [
                    "We actively engage with our local community, building partnerships and collaborations that promote a shared commitment to wildlife conservation.",
                ];
                block_header_and_content_vertical($headerLevel, $headerContent, $contents);
                ?>
            </div>
        </div>
    </section>    
    <section>
        <div>
            <div>
                <p>“Partnering with the Jem Wildlife Centre has been an absolute delight, and we eagerly anticipate engaging their expertise in our shared commitment to wildlife conservation.”</p>
                <p>IMAGE</p>
                <p>John Smith</p>            
                <p>WWF</p>
            </div>        
            <div>
                <p>“Partnering with the Jem Wildlife Centre has been an absolute delight, and we eagerly anticipate engaging their expertise in our shared commitment to wildlife conservation.”</p>
                <p>IMAGE</p>
                <p>John Smith</p>            
                <p>WWF</p>
            </div>
        </div>
        <div>
            <div>
                <p>A range of habitats</p>
                <p>Immerse yourself in the world of our incredible creatures with our unique viewing areas! Explore captivating viewpoints in our gardens, woodlands, and wetlands, allowing you to get up close to the wonders of nature. </p>
                <p>Whether it's the tranquillity of ponds, or the diverse habitats of farmlands and meadows, our viewing areas offer an intimate connection with the beauty of wildlife.</p>
            </div>
            <div>
                <p>Sustainable approach</p>
                <p>From energy-efficient facilities to waste reduction initiatives, our commitment to sustainability extends to habitat preservation and wildlife conservation.</p>
                <p>We strive to be a beacon of responsible environmental stewardship, fostering a future where both the wildlife under our care and the ecosystems they inhabit flourish in a balanced and sustainable harmony.</p>
            </div>
            <div>
                <p>Community engagement</p>
                <p>Community engagement is not just a philosophy; it's a shared commitment to fostering meaningful connections between our sanctuary and the local community. </p>
                <p>One impactful initiative involves collaborating with community members to address food waste. Through partnerships with local businesses and individuals, we intercept excess produce that might otherwise go to waste and redirect it to nourish the animals under our care.</p>
            </div>
        </div>
    </section>
</main>
<?php
require('partials/banner.php');
require('partials/footer.php');
?>
