# Random Date Generator

This class generates random date from a range of dates. You can set any format for date output.

## How to use?
```php
<?php

$randDate = new RandomDate('2016-01-01', '2016-06-01'); // Output e.g. 2016-04-04 21:36:29
$randDate->setFormat('r'); 
echo $randDate->getValue() . "<br/>"; // Output - Fri, 04 Mar 2016 21:36:29 +0200
echo $randDate->nextPeriod("+1 month, +1 day, + 2 hours, +35 minutes") . "<br/>"; // Output - Wed, 06 Apr 2016 00:11:29 +0300
echo $randDate->nextPeriod("+1 day"); // Output - Thu, 07 Apr 2016 00:11:29 +0300
```