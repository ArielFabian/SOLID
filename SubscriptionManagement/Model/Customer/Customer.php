<?php
namespace Model\Customer;

use Model\Customer\CustomerType;

abstract class Customer
{
    private ?int $id = null;
    private string $fullName = "";
    private string $email = "";
    private string $country = "";
    private ?CustomerType $customerType = null;

    public function __construct(
        ?int $id = null, 
        string $fullName, 
        string $email, 
        string $country, 
        CustomerType $customerType
    )
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->country = $country;
        $this->customerType = $customerType;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCustomerType(): CustomerType
    {
        return $this->customerType;
    }
}