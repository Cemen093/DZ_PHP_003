<?php

echo '<link href="style.css" rel="stylesheet"/>';

$card = array(
    array('1.png','Детский мир'), array('2.png','Недвижимость'), array('3.png','Авто'),
    array('4.png','Запчасти для транспорта'), array('5.png','Работа'), array('6.png','Животное'),
    array('7.png','Дом и сад'), array('8.png','Электроника'), array('9.png','Бизнес и услуги'),
    array('10.png','Мода и стиль'), array('11.png','Хобби, отдых и спорт'), array('12.png','Отдам даром'),
    array('13.png','Обмен'), array('14.png','Бизнес на OLX'), array('15.png','Онлайн безопасность'),
    array('16.png','OLX Доставка'), array('17.png','Новостройки')
);
$count_arr = count($card);

echo '<h1>Главные рубрики</h1>';
echo '<div class="container">';
for ($i = 0; $i < $count_arr; $i++){
    echo '<div class="card">' . '<image src="image\\rubrics\\' . $card[$i][0] . '" width="70" height="70" alt="картинки нет">
    <p>' . $card[$i][1] . '</p></div>';
}
echo '</div>';
