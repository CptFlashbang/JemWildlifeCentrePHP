        <footer class= "flex flex-row">
            <div class="w-1/3">                
                &copy; <?=date("Y")?> Callum Yates
            </div>
            <div class="w-1/3">
                <ul class="flex flex-row"> 
                    <li>
                        <p>Privacy Policy</p>
                    </li>
                    <li>
                        <p>Terms and Conditions</p>
                    </li>
                </ul>
            </div>
            <div class="w-1/3">
                <?php
                require('socials.php');
                ?>
            </div>
        </footer>
    </body>
</html>
