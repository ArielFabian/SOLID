<?php
namespace Model\Payment;

abstract class PaymentMethod
{
    private ?int $id = null;
    private string $name = "";
    private ?array $availableRegions = null;
    private float $discount = 0.0;

    public function __construct(
        ?int $id,
        string $name,
        ?array $availableRegions = null,
        float $discount
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->availableRegions = $availableRegions;
        $this->discount = $discount;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAvailableRegions(): array
    {
        return $this->availableRegions;
    }

    public function getDiscount(): float
    {
        return $this->discount;
    }
}