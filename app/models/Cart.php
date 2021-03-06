<?php
namespace CodeCommerce\Models;


class Cart
{

    private $items;

    public function __construct()
    {
        $this->items = [];
    }


    public function add($id, $name, $price, $image)
    {
        $this->items += [
            $id => [
                'qtd' => isset($this->items[$id]['qtd']) ? $this->items[$id]['qtd']++ : 1,
                'price' => $price,
                'name' => $name,
                'image' => $image
            ]
        ];
        return $this->items;
    }

    public function update($id, $name, $price, $image, $qtd)
    {
        $item = [
        'qtd' => (int) $qtd,
        'price' => $price,
        'name' => $name,
        'image' => $image
        ];

        $this->items[$id] = $item;
    }

    public function remove($id)
    {
        unset($this->items[$id]);
    }


    public function all()
    {
        return $this->items;
    }


    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $items) {
            $total += $items['qtd'] * $items['price'];
        }
        return $total;
    }

    public function clear()
    {
        $this->items = [];
    }

}