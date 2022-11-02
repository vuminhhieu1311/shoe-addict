<?php

namespace App\Enums;

final class OrderStatus
{
    public const PENDING = 'pending';
    public const CONFIRMED = 'confirmed';
    public const DELIVERED = 'delivered';
    public const DELIVERING = 'delivering';
    public const PAID = 'paid';
    public const CANCELED = 'canceled';
}
