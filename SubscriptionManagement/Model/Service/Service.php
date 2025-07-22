<?php
namespace Model\Service;

// Dependencies
use DateTime;
use Model\Service\AddOn;
//Enums
use Enums\Service\ServiceStatus;
use Enums\Service\BillingCycle;

abstract class Service
{
    private ?int $id = null;
    private int $customerId = 0;
    private ?ServiceStatus $status = null;
    private ?DateTime $startDate = null;
    private ?DateTime $endDate = null;
    private ?BillingCycle $billingCycle = null;
    private bool $autoRenew = false;
    private float $basePrice = 0.0;
    /** @var AddOn[]|null */
    private ?array $addOns = null;
    private int $freeTrialDays = 0;

    public function __construct(
        ?int $id = null, 
        int $customerId, 
        ServiceStatus $status, 
        DateTime $startDate, 
        DateTime $endDate, 
        BillingCycle $billingCycle, 
        bool $autoRenew, 
        float $basePrice, 
        ?array $addOns = null, 
        int $freeTrialDays
    )
    {
        $this->id = $id;
        $this->customerId = $customerId;
        $this->status = $status;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->billingCycle = $billingCycle;
        $this->autoRenew = $autoRenew;
        $this->basePrice = $basePrice;
        $this->addOns = $addOns;
        $this->freeTrialDays = $freeTrialDays;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    public function getStatus(): ServiceStatus
    {
        return $this->status;
    }

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }
    
    public function getBillingCycle(): BillingCycle
    {
        return $this->billingCycle;
    }

    public function hasAutoRenew(): bool
    {
        return $this->autoRenew;
    }

    public function getBasePrice(): float
    {
        return $this->basePrice;
    }

    public function getAddOns(): array
    {
        return $this->addOns;
    }

    public function getFreeTrialDays(): int
    {
        return $this->freeTrialDays;
    }

    abstract protected function isActive();
    abstract protected function enableAutoRenew();
    abstract protected function disableAutoRenew();
    abstract protected function calculateAddOnsTotal();
    abstract protected function calculateServiceTotal();
    abstract protected function freeTrialDaysLeft();
}

