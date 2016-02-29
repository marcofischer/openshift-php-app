<?php

echo "<h1>Environment</h1>";
echo '<ul>';

foreach ($_SERVER as $k => $v)
{
  echo '<li><b>' . $k . ':</b> ' . $v . '</li>';
}

echo '</ul>';