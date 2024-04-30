

<?php
echo '<footer class="border-t border-black py-10">';
echo '<div class="flex flex-col justify-center items-center gap-2">';
    echo '<img src="./assets/images/logo.png" alt="" class="w-[100px] rounded-full">';
    echo '<p class="font-semibold text-2xl">w3schools-hindi</p>';
echo '</div>';
echo '<div class="grid grid-cols-6 gap-4 py-4 px-10">';
    echo '<div>';
        echo '<!-- tutorials -->';
        echo '<h1 class="font-semibold text-2xl">Tutorials</h1>';
        echo '<ul class="flex flex-col gap-2 py-2">';
            echo '<li>HTML</li>';
            echo '<li>CSS</li>';
            echo '<li>JS</li>';
            echo '<li>Java</li>';
        echo '</ul>';
    echo '</div>';
    echo '<div> ';
        echo '<h1 class="font-semibold text-2xl">Contact</h1>';
        echo '<ul class="flex flex-col gap-2 py-2">';
            echo '<li>Instagram</li>';
            echo '<li>Facebook</li>';
        echo '</ul>';
    echo '</div>';
echo '</div>';
echo '</footer>';

?>