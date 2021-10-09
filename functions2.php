<?php

echo '<link href="style2.css" rel="stylesheet"/>';

$specifications = array(
    array('Встроенная память', array('128Gb', '256Gb', '512Gb')),
    array('Цвет', array('Blue', 'White', 'Pink', 'Red', 'Midnight'))
);

$products = array(
    array("1.png", "Apple iPhone 13 512 (Starlight)", "39 999"),
    array("1.png", "Apple iPhone 13 256 (Starlight)", "32 999"),
    array("1.png", "Apple iPhone 13 128 (Starlight)", "28 299"),
    array("2.png", "Apple iPhone 13 512 (Product Red)", "39 999"),
    array("2.png", "Apple iPhone 13 256 (Product Red)", "32 999"),
    array("2.png", "Apple iPhone 13 128 (Product Red)", "28 299")
);

echo '<div class="container">';
    echo '<div class="container_1">';
        foreach ($specifications as $specification){
            echo '<div class="container_1_1">';
            echo '<p class="specification_head">' . $specification[0] . '</p>';
            foreach ($specification[1] as $value){
                echo '<p class="value_specification">' . $value . '</p>';
            }
            echo '</div>';
        }
    echo '</div>';
    echo '<div class="container_2">';
        foreach ($products as $product) {
            echo '<div class="container_2_1">';
                echo '<div class="container_2_1_1">';
                    echo '<p class="product_head">' . $product[1] . '</p>';
                    echo '<p class="product_price">' . $product[2] . '</p>';
                    echo '<button class="product_bottom">Предзаказ</button>';
                echo '</div>';
            echo '<image src="image\\products\\' . $product[0] . '" width="200" height="300">';
            echo '</div>';
        }
    echo '</div>';
echo '</div>';