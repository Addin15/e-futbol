@extends('layouts.nav')
<head>
      <meta charset="utf-8">
      <link href="css/style.css" rel="stylesheet" >
      <link href="css/paymentstyle.css" rel="stylesheet" >
   </head>
@section('content')
<body>
    <div class="container">
          <ul class="progressbar">
          <li >Booking details</li>
            <li >Payment</li>
            <li >Done</li>
          </ul>

      <div class="form-outer">

          <label for="date">Select date</label>
          <p></p>
          <input type="date" id="date" name="date">

          <p></p>
          <label for="time">Select a time</label>
          <p></p>
          <input type="time" id="time" name="time">

          <p></p>
          <label for="quantity">Select a time</label>
          <p></p>
          <input type="number" id="quantity" name="quantity" min="1" max="10">           
    </div>

    <div class="container_field">
            <p>My cart</p>

            <img src="/images/image1.png"  title="Stadium Bukit Jelutong" alt="Stadium Jelutong" />
            <?php $image_url='https://www.google.com/intl/en_com/images/srpr/logo3w.png';
            ?>
            <img src="<?php echo $image_url;?>">

            <button class="Proceed payment">Proceed Payment</button>
                  </div>
            
    </div>
</body>