<?php
 $variables = [
      'secret' => '6LfBjM0UAAAAAK_lpmj8gIJwBlleEaZD357BMYXm',
  ];

  foreach ($variables as $key => $value) {
    putenv("$key=$value");
}

if(!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key);
        if ($value === false) {
            return $default;
        }
        return $value;
    }
}