<?php
function aws_card($title, $title_classes = "", $card_classes = "", $card_controls = true, $children = ""): void
{

  echo '<div className="h-[400px] w-[400px] m-3 bg-white-100 shadow-sm shadow-gray-600 overflow-x-auto">';
  // if ($title) {
    echo '<div className="bg-white-200 border-b p-3 flex justify-between items-center">';
     echo '<h2 className="text-2xl font-semibold">'.$title.'</h2>';
    echo '</div>';
  // }


  if ($children) {
    echo '<div className="p-3">' . $children . '</div>';
  }
  echo '</div>';

}