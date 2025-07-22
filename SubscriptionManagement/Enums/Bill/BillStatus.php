<?php
namespace Enums\Bill;

enum BillStatus: string {
    case Paid = "paid";
    case Pending = "pending";
    case Overdue = "overdue";
}