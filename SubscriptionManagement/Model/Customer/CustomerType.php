<?php
namespace Model\Customer;
abstract class CustomerType
{
    private ?int $id = null;
    private string $typeName = "";
    private float $discount = 0.0;

    public function __construct(
        ?int $id,
        string $typeName,
        float $discount
    )
    {
        $this->id = $id;
        $this->typeName = $typeName;
        $this->discount = $discount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTypeName(): string
    {
        return $this->typeName;
    }

    public function getDiscount(): float
    {
        return $this->discount;
    }
}