<?php
//Родительский класс Parent
class ShopProduct
{
    public $title = 'Стандартный товар';
    public $authorNameFirst = 'Имя автора';
    public $authorNameLast = 'Фамилия автора';
    public $price = 0;

    function __construct($title, $nameFirst, $nameLast, $price)
    {
        $this->title = $title;
        $this->authorNameFirst = $nameFirst;
        $this->authorNameLast = $nameLast;
        $this->price = $price;
    }

    public function getAuthor()
    {
        return $this->authorNameFirst . ' ' . $this->authorNameLast;
    }
    public function getSummaryLine(){
        $base =  '"' . $this->title . '". Автор: ';
        $base .= $this->authorNameFirst . ' ';
        $base .= $this->authorNameLast;
        $base .= '. Цена: ' . $this->price . ' рублей. ';
        return $base;
    }
}

//Класс который показывает значения из класса ShopProduct
class ShopProductWriter
{
    private $products = [];
    //К аргументу функции пишется 'уточнение', что здесь может использоваться
    //только объект типа ShopProduct
    //Добавляем в массив все объекты ShopProduct
    public function addProduct(ShopProduct $shopProduct){
        $this->products[] = $shopProduct;
    }

    public function write(){
        $str = '';
        foreach ($this->products as $product) {
            $str = $product->title;
            $str .= ' ' . $product->getAuthor();

        }
        print $str;
    }
}

//Дочерний класс ShopProduct для дисков
class ShopCD extends ShopProduct
{
    public $playLength;
    public function __construct($title, $nameFirst, $nameLast, $price, $length)
    {
        parent::__construct($title, $nameFirst, $nameLast, $price);
        $this->playLength = $length;
    }
    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= 'Продолжительность звучания: ' . $this->playLength . 'минут.';
        return $base;

    }
}

//Дочерний класс ShopProduct для книг
class ShopBooks extends ShopProduct
{
    public $page;

    public function __construct($title, $nameFirst, $nameLast, $price, $page)
    {
        parent::__construct($title, $nameFirst, $nameLast, $price);
        $this->page = $page;
    }
    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= 'Количество страниц: ' . $this->page;
        return $base;
    }
}

































