<?php
namespace Model\Bill;

//Dependencies
use DateTime;

//Enums
use Enums\Bill\BillStatus;

abstract class Bill
{
    private ?int $id;
    private int $subscriptionId = 0;
    private float $amountDue = 0.0;
    private ?DateTime $dueDate = null;
    private ?DateTime $paidAt = null;
    private ?BillStatus $status = null;

    public function __construct(
        ?int $id = null,
        int $subscriptionId,
        float $amountDue,
        DateTime $dueDate,
        DateTime $paidAt,
        BillStatus $status,
    )
    {
        $this->id = $id;
        $this->subscriptionId = $subscriptionId;
        $this->amountDue = $amountDue;
        $this->dueDate = $dueDate;
        $this->paidAt = $paidAt;
        $this->status = $status;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubscriptionId(): int
    {
        return $this->subscriptionId;
    }

    public function getAmountDue(): float
    {
        return $this->amountDue;
    }

    public function getDueDate(): DateTime
    {
        return $this->dueDate;
    }

    public function getPaidAt(): DateTime
    {
        return $this->paidAt;
    }

    public function getStatus(): BillStatus
    {
        return $this->status;
    }
}