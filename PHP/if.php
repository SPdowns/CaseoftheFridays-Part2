<?php
  $a = 1;
  $b = 2;
  $c = 3;

  if($a > $b) {
    echo "$a is less than $b";
  } else {
    echo "$a is not less than $b";
  }

  ?>

<!-- Alternate Syntax -->

  <?php
      $a = 1;
      $b = 2;
      $c = 3;

      if($a>$b) :
        echo "Alternate Syntax $a is more than $b";
      else:
        echo "Hey, It's the 90's";
      endif;
  ?>

this

<?php if ( $home_page ) : ?>
  
  <header>
      <h1>Welcome Back Home Page</h1>
  </header>
  
  <?php endif; ?>
