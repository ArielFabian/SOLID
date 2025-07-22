<?php
namespace Model\Service;

abstract class AddOn
{
    private ?int $id = null;
    private string $name = "";
    private float $basePrice = 0.0;

    public function __construct(
        ?int $id,
        string $name,
        float $basePrice
    )
    {   
        $this->id = $id;
        $this->name = $name;
        $this->basePrice = $basePrice;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getBasePrice()
    {
        return $this->basePrice;
    }
}