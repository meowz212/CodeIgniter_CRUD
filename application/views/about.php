<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
<style>
body {
    font-family: 'Sansita Swashed', 'PT Sans', sans-serif;
			font-size: 10pt;
}
</style>
<link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet">
</head>
<body>

  <div class="header">
    <h1>My Profile</h1>
    <p>Short introduction and brief plans while studying in ITS</p>
  </div>

<div id="navbar">
  <a class="active" href="..">Home</a>
  <a href="../profile/">Profile</a>
  <a href="../hometown/">Hometown</a>
  <a href="../food/">Food</a>
  <a href="../tourist/">Tourism</a>
</div>

<div class="row">
    <div class="side">
    <img src="<?php echo base_url('css/images/Me.JPG') ?>" alt="My Photo" style="width: 200px;height:200px;">
      <p><b>Kinasihurrabb Moralluhung</b></p>
        <p>Malang, Jawa Timur, Indonesia</p>
        <p>Sepuluh Nopember Institute of Technology</p>
      <h3>About Me</h3>
      <p>I'm trying to be the best by doing a lot of different things, while also searching for my true passion
          on different programming tasks.
      </p>
    </div>
    <div class="main">
      <h2>Things I am trying to achieve while studying in ITS:</h2>
      <ul>
        <li>Reach GPA 3.50 at my graduation</li>
        <li>Won any programming competition</li>
        <li>Contribute to my local society using programming-based skills</li>
      </ul>
      <br>
      <h2>Things I have achieved while studying in ITS</h2>
      <ul>
        <li>Become the member of HMTC ITS (Students Association Organization)</li>
        <li>Become the staff of National Logic Competition, contributing in making questions for contestants</li>
        <li>Did some document-translation projects while doing my studies in ITS (Indonesian - English Translations)</li>
      </ul>
    </div>
  </div>
  
<div class="footer">
  <h2>Copyright © 2020 - Kinas.</h2>
</div>

</body>
</html>

<script>
  window.onscroll = function() {myFunction()};
  
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
  </script>
