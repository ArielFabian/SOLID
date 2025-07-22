<?php
namespace Enums\Service;

enum ServiceStatus: string {
    case Active = "active";
    case Cancelled = "canceled";
    case Overdue = "overdue";
}