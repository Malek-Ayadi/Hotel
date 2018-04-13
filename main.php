<?php
include("verificationAuthentification.php");
include("choixNavigation.php");
?>
<body>
  <style src="vendor/bootstrap/css/bootstrap.min.css"></style>
  <style>
.container1 {
  position: relative;
  width: 200px;
  height:200px;
}

.image1 {
  display: block;
  width: 100%;
  height: auto;
}

.overlay1 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container1:hover .overlay1 {
  opacity: 1;
}

.text1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>

<table class="table table-bordered" style="margin-bottom: 38px;">
 
  <tbody>
    <tr>
      
      
      <td >
        <div class="container1" >
    <img src="face.jpeg" alt="face" class="image1">
    <div class="overlay1">
    <div class="text1">Skander Meziane</div>
   </div>
  </div>
  </td>







      <td>
        <div class="container1" >
  <img src="face.jpeg" alt="face" class="image1">
  <div class="overlay1">
    <div class="text1">khlil turki</div>
  </div>
 
</div>
</td>
      <td ><div class="container1" >
  <img src="face.jpeg" alt="face" class="image1">
  <div class="overlay1">
    <div class="text1">khlil turki</div>
  </div>
 
</div>
</td>
    </tr>
    <tr>
      
      <td><div class="container1" >
  <img src="face.jpeg" alt="face" class="image1">
  <div class="overlay1">
    <div class="text1">khlil turki</div>
  </div>
 
</div></td>
      <td><div class="container1" >
  <img src="face.jpeg" alt="face" class="image1">
  <div class="overlay1">
    <div class="text1">khlil turki</div>
  </div>
 
</div></td>
      <td><div class="container1" >
  <img src="face.jpeg" alt="face" class="image1">
  <div class="overlay1">
    <div class="text1">khlil turki</div>
  </div>
 
</div></td>
    </tr>
    
  </tbody>
</table>












<?php include("piedpage.php"); ?>
</body>