<?php
namespace Model\Payment;
//Dependencies
use DateTime;
use Model\Payment\PaymentMethod;

abstract class Payment
{
    private ?int $id = null;
    private int $billingId = 0;
    private ?PaymentMethod $paymentMethod = null;
    private float $amount = 0.0;
    private ?DateTime $paidAt = null;
    private string $currency = "";

    public function __construct(
        ?int $id = null,
        int $billingId,
        PaymentMethod $paymentMethod,
        float $amount, 
        DateTime $paidAt,
        string $currency
    )
    {
        $this->id = $id;
        $this->billingId = $billingId;
        $this->paymentMethod = $paymentMethod;
        $this->amount = $amount;
        $this->paidAt = $paidAt;
        $this->currency = $currency;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBillingId(): int
    {
        return $this->billingId;
    }

    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getPaidAt(): DateTime
    {
        return $this->paidAt;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    abstract protected function calculatePaymentAmount();
    abstract protected function calculateDiscount();
}