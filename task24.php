<?php
/**
1. Сделайте класс Product (товар), в котором будут приватные свойства name (название товара), price (цена за штуку) и quantity. Пусть все эти свойства будут доступны только для чтения.
2. Добавьте в класс Product метод getCost, который будет находить полную стоимость продукта (сумма умножить на количество).
3. Сделайте класс Cart (корзина). Данный класс будет хранить список продуктов (объектов класса Product) в виде массива. Пусть продукты хранятся в свойстве products.
4. Реализуйте в классе Cart метод add для добавления продуктов.
5. Реализуйте в классе Cart метод remove для удаления продуктов. Метод должен принимать параметром название удаляемого продукта.
6. Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов.
7. Реализуйте в классе Cart метод getTotalQuantity, который будет находить суммарное количество продуктов (то есть сумму свойств quantity всех продуктов).
8. Реализуйте в классе Cart метод getAvgPrice, который будет находить среднюю стоимость продуктов (суммарная стоимость делить на количество всех продуктов).
 *
 */

class Product
{
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName($name)
    {
        $this->name = $name;
    }
    public function getPrice($price)
    {
        $this->price = $price;
    }
    public function getQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getCost()
    {
        return $this->price * $this->quantity;
    }
}
class Cart
{
    private $products = [];
    public function add($product)
    {
        $this->products[] = $product;
    }

    public function remove($product)
    {
        $key = 0;
        foreach ($this->products as $keyElem => $elem) {
            if ($elem->name == $product) {
                $key = $keyElem;
                array_splice($this->products, $key, 1);
            }
        }
    }
    public function getProducts()
    {
        return $this->products;
    }
    public function getTotalCost()
    {
        $sum = 0;
        foreach ($this->products as $keyElem => $elem) {
            $sum += $elem->price * $elem->quantity;
        }
        return $sum;
    }
    public function getTotalQuantity()
    {
        $count = 0;
        foreach ($this->products as $keyElem => $elem) {
            $count += $elem->quantity;
        }
        return $count;
    }
    public function getAvgPrice()
    {
        return $this->getTotalCost()/$this->getTotalQuantity();
    }
}

$cart1 = new Cart();
$cart1->add(new Product('cucumber', 10,1));
$cart1->add(new Product('tomato', 5,3));
$cart1->add(new Product('potato', 3,5));
echo 'TotalCost = '.$cart1->getTotalCost().'<br>';
echo 'Quantity = '.$cart1->getTotalQuantity().'<br>';
echo 'AvgPrice = '.round($cart1->getAvgPrice(),2).'<br>';
//$cart1->remove('cucumber');
//$cart1->getProducts();
//var_dump($cart1->getProducts());

foreach ($cart1->getProducts() as $keyElem => $elem) {
   echo $elem->name.' - '.$elem->price.' - '.$elem->quantity.'<br>';


}
