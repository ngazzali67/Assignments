<?php
class Product
{
    private int $id;
    private string $name;
    private float $price;

    // Constructor method
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to get formatted price
    public function getFormattedPrice()
    {
        return number_format($this->price, 2);
    }

    // Method to show product details
    public function showDetails()
    {
        echo "ID: " . $this->id;
        echo '<br>';
        echo "Name: " . $this->name;
        echo '<br>';
        echo "Price: $" . $this->getFormattedPrice();
    }

    // Getter for ID property
    public function getId()
    {
        return $this->id;
    }

    // Getter for Name property
    public function getName()
    {
        return $this->name;
    }

    // Getter for Price
    public function getPrice()
    {
        return $this->price;
    }
}

$product = new Product(1, "T-shirt", 19.99);
$product->showDetails() . '<br>';
