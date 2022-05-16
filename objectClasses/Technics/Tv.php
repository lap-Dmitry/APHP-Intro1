<?php
declare(strict_types=1);

namespace Technics;

class Tv
{
    public string $name;
    public string $brand;
    public string $display;
    public string $diagonal;
    public string $guarantee;
    public string $price;

    public function __construct(string $name, string $brand, string $display, string $diagonal, string $guarantee, string $price)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->display = $display;
        $this->diagonal = $diagonal;
        $this->guarantee = $guarantee;
        $this->price = $price;
    }

    public function infoObject(): string {
        return (
            "<traits>
             <tr>
             <td>$this->name</td>
             <td>$this->brand</td>
             <td>$this->display</td>
             <td>$this->diagonal</td>
             <td>$this->guarantee</td>
             <td>$this->price</td>
             </tr>
             </traits>"
        );
    }

    public function changeDiagonal(string $newDiagonal): string
    {
        return $this->diagonal = $newDiagonal;
    }
}