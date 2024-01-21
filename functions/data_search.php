<?php

while($row=$get->fetch_assoc()){
    $output .='<a href="../single-product.php>id='. $row['id'] .'">
    '. $row['name'] .'
    </a>';
}