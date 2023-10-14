<?php

class Invoice
{
    public function __construct(public Customer $customer)
    {
    }
    public function process(float $amount)
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('The amount must be greater than 0.');
        }

        if (empty($this->customer->getBillingInfo())) {
            throw new MissingBillingInfoException('Missing billing information -');
        }
        echo 'Processing $' . $amount . ' invoice - ';
        sleep(1);
        echo 'OK' . PHP_EOL;
    }
}
