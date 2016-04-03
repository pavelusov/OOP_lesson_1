<?php
echo date('r');
echo '<br>';
//подключаем класс
require __DIR__ . '/classes/ShopProduct.php';
//создаем новые объекты типа ShopProduct
$product1 = new ShopProduct('PHP для начинающих', 'Павел', 'Усов', 200);

print '<br>';
$product2 = new ShopProduct('MySQL для начинающих', 'Данил', 'Усов', 190);
$show = new ShopProductWriter();
$show->addProduct($product1);
//$show->addProduct($product2);

//Создали скидку в 40 рублей!
$product1->setDiscount(40);
echo '<br>';
$show->write();

echo '<br>';
echo '******************************************';
echo '<br>';
//создаем объект типа ShopCD
$cd1 = new ShopCD('Звезда по имени Солнце', 'Виктор', 'Цой', 300, 10);
print $cd1->getSummaryLine();

print '<br>';
//создаем объект типа ShopBooks
$books1 = new ShopBooks('MySQL для начинающих', 'Бретт', 'Маклафлин', 100, 457);
print $books1->getSummaryLine();

