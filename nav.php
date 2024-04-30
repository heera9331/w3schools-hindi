
<?php
echo '<header class="flex justify-between flex-col">';
echo '<div class="flex justify-between px-4 items-center">';
    echo '<img src="./assets/images/logo.png" alt="w3schools-hindi" class="rounded-full p-2 w-[120px]">';
    echo '<button class="rounded-sm bg-gray-800 px-4 font-semibold py-2 h-fit text-white">Login</button>';
echo '</div>';
echo '<nav class="overflow-hidden">';
    echo '<ul class="overflow-x-auto overflow-y-hidden flex gap-2 justify-center h-[30px] bg-orange-700 text-white font-semibold items-center py-4 font-semibold"';
        echo 'style="height: calc(100% + 17px); margin-right: -17px; ">';
        echo '<li class="border-r-2 px-2"> <a href="index.php">HOME</a></li>';
        echo '<li class="border-r-2 px-2"> <a href="#">HTML</a></li>';
        echo '<li class="border-r-2 px-2"> <a href="#">CSS</a></li>';
        echo '<li class="border-r-2 px-2"> <a href="#">JAVASCRIPT</a></li>';
        echo '<li class="border-r-2 px-2"> <a href="./blog.php">BLOG</a></li>';
        echo '<li class="px-2"> <a href="#">JAVA</a></li>';
    echo '</ul>';
echo '</nav>';
echo '</header>';

?>