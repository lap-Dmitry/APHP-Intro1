<?php
declare(strict_types=1);

namespace Transport;

class Car
{
    public string $brand;
    public string $series;
    public string $color;
    public string $engine;
    public string $price;

    public function __construct(string $brand, string $series, string $color, string $engine, string $price)
    {
        $this->brand = $brand;
        $this->series = $series;
        $this->color = $color;
        $this->engine = $engine;
        $this->price = $price;
    }

    public function infoObject(): string {
        return (
            "<traits>
             <tr>
             <td>$this->brand</td>
             <td>$this->series</td>
             <td>$this->color</td>
             <td>$this->engine</td>
             <td>$this->price</td>
             </tr>
             </traits>"
        );
    }

    public function changePrice(string $newPrice): string
    {
        return $this->price = $newPrice;
    }
}
