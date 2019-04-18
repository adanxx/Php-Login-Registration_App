<?php
 
  require 'includes/init.php';

  Mail::send('Dave', 'test@mail.com', 'testing', 'Hi There');
