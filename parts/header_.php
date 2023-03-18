<?php
echo '
<nav class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color:#3b5d50;">
  <a class="navbar-brand ml-3 logo" href="#">Lucky Electric</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link  navcontents" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navcontents" href="products.php">Products</a>
      </li>
      
      <!-- 
        <li class="nav-item">
          <a class="nav-link navcontents" href="#"> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link navcontents" href="#">Services</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link navcontents dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Our servises</a>
            <a class="dropdown-item" href="#">About us</a>
            <a class="dropdown-item" href="#">Contact us</a>
            
          </div>
          
        </li> 
        <li class="nav-item">
         <a class="nav-link navcontents" href="#"> Login</a>
       </li>
       <li><a class="nav-link navcontents" href="#"><img src="images/user.svg"></a></li>
						<li><a class="nav-link navcontents" href="cart.html"><img src="images/cart.svg"></a></li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0 ">
      <input class="form-control mr-sm-2 navform ml-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-warning mr-2" type="submit">Search</button>
    </form>
    <!-- <button type="button" class="btn btn-outline-warning"></button> -->
  </div>
</nav>


';
