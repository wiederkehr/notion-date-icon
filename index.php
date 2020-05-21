<?php
header("Content-type: image/svg+xml");
?>
<svg xmlns="http://www.w3.org/2000/svg" 
  aria-label="Calendar" 
  role="img" 
  width="48px" 
  height="48px" 
  viewBox="0 0 48 48"
  >  
  <g 
    stroke="none" 
    stroke-width="1" 
    fill="none" 
    stroke-linecap="round" 
    stroke-linejoin="round"
  >
    <rect 
      stroke="#AAA" 
      stroke-width="6" 
      x="3" 
      y="3" 
      width="42" 
      height="42" 
      rx="4"
    >
    </rect>
  </g>
  <text
    fill="#999"
    font-family="Menlo, Courier, monospace"
    font-weight="bold"
    font-size="24px"
    x="50%" 
    y="53%" 
    alignment-baseline="middle"
    text-anchor="middle"
  >
    <?php 
    date_default_timezone_set('America/New_York');
    $period = htmlspecialchars($_GET["period"]);
    $value = "?";
    switch ($period) {
      case 'day':
        $value = date("d");
        break;
      case 'week':
        $value = date("W");
        break;
      case 'month':
        $value = date("m");
        break;
      case 'quarter':
        $value = "Q" . ceil(date("n") / 3);
        break;
      case 'year':
        $value = date("y");
        break;
      default:
        $value = date("d");
        break;
    }
    echo $value
  ?>
  </text>
</svg>

