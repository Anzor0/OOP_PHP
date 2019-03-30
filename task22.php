<?php
/**
1.Сделайте класс Product (продукт), в котором будут следующие свойства: name (название продукта), price (цена).
2.Создайте объект класса Product, запишите его в переменную $product1.
3. Присвойте значение переменной $product1 в переменную $product2. Проверьте то, что обе переменные ссылаются на один и тот же объект.*
 */

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$product1 = new Product('Ivan', 1000);
$product2 = $product1;
echo $product1->name.'<br>';
echo $product2->name;

