<?php
echo '
<nav class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color:#3b5d50;">
  <a class="navbar-brand ml-3 logo" href="index.php">Lucky Electric <span class="dot"> . </span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link  navcontents" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navcontents" href="products.php">Products</a>
      </li>
      
     
      <li class="nav-item dropdown ">
          <a class="nav-link navcontents dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="services.php">Our services</a>
            <a class="dropdown-item" href="about.php">About us</a>
            <a class="dropdown-item" href="contact.php">Contact us</a>
            
          </div>
          
      </li> 
      

      <li class="nav-item dropdown">
        <a class="nav-link navcontents"> 
          <img class="" src="images/user.svg">
         </a>  
         <div class="dropdown-content">
           <a  href="" ><img src="images/newcustmer.svg" alt="">&nbsp; New Customer?   Singup   </a>
           <button type="button" class="btn btn-warning btn-inf  me-2 px-4 d-inline"data-bs-toggle="modal"
           data-bs-target="#signupmodal">signup</button> 
           <hr>
           <a href="#"><img src="images/login.svg" alt=""> &nbsp;&nbsp;Existing User Login</a>
           <button type="button"class="btn btn-warning btn-inf me-2 px-4 py-1 d-inline"data-bs-toggle="modal" data-bs-target="#loginmodal">login</button>
           <hr>
           <a href="profile.php"> <img class="" src="images/profile.svg"> Profile</a>
           <hr>
           <a href="order.php"> <img class="" src="images/order.svg"> Order</a>
           <hr>
      </li>
      
      
      <li><a class="nav-link navcontents" href="cart.php"><img src="images/cart.svg"></a></li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0 " action="products.php">
      <input class="form-control mr-sm-2 navform  mx-2 my-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-warning mr-2" type="submit">Search</button>
    </form>
    <!-- <button type="button" class="btn btn-outline-warning"></button> -->
  </div>
</div>
</nav>


';
include "singup.php";
include "login.php";