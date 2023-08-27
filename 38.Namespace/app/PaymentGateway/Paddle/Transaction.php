<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{
    private string $status;
    public static int $count = 0;

    public function __construct(
        public float $amout = 0,
        public string $description = '',
    ) {
        $this->setStatus(Status::PAID);
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }
    public function process()
    {
        echo 'Processing paddle transaction...';
    }

    public function setStatus(string $status): self
    {
        if (!isset(Status::ALL_STATUS[$status])) {
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;

        return $this;
    }
}
