<?php
namespace Enums\Service;

enum BillingCycle: string {
    case Monthly = "monthly";
    case Yearly = "yearly";
    case Trial = "trial";
}