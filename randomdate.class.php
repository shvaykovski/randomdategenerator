<?php

class RandomDate
{
    private $random = 0;
    private $format = 'Y-m-d H:i:s';

    public function __construct($startDate, $endDate)
    {
        if (!date_default_timezone_get()) {
            date_default_timezone_set("UTC");
        }

        $startDateUnixTime = strtotime($startDate);
        $endDateUnixTime = strtotime($endDate);

        if ($startDateUnixTime > $endDateUnixTime) {
            throw new \Exception("Start date could'n be more than end date.");
        }

        $this->random = rand($startDateUnixTime, $endDateUnixTime);
    }

    public function setFormat($format)
    {
        $this->format = $format ?: 'Y-m-d H:i:s';
    }

    public function getValue()
    {
        return date($this->format, $this->random);
    }

    public function nextPeriod($period = "+ 1 month")
    {
        $this->random = strtotime($period, $this->random);
        return date($this->format, $this->random);
    }
}
