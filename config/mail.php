<?php

return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "d20dca9e71a6f5",
  "password" => "dd368501a04c88",
  "sendmail" => "/usr/sbin/sendmail -bs"
];
