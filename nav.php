<nav class="nav">
            <div class="navigation container">
                <div class="logo">
                    <a href="index.php" class="nav-link">
                        <h1 class="fade-in">ENVY</h1>
                    </a>
                </div>
                <div class="menu">
                    <div class="top-nav">
                        <div class="logo">
                            <h1>ENVY</h1>
                        </div>
                        <div class="close">
                        </div>
                    </div>
                    <ul class="nav-list">
                       
                        <?php

                        if(isset($_SESSION['username']))
                        {
                            echo"<li class='nav-item'><a href='profile.php?id=".$_SESSION['id']."'class='nav-link'>Profile</a>";
                            
                            echo"<li class='nav-item'><a href='logout.php' class='nav-link'>Logout</a>";
                        }else{
                            echo"<li class='nav-item'><a href='login/login.php' class='nav-link'>Login</a></li>";
                            echo"<li class='nav-item'><a href='register/register.php' class='nav-link'>Sign up</a></li>";
                            }
                        ?> 

                        <li class="nav-item">
                            <a href="products.php" class="nav-link">Store</a>
                        </li>
                        <li class="nav-item">
                            <a href="help.php" class="nav-link">Help</a>
                        </li>

                        <?php

                        if(isset($_SESSION['username']))
                        {
                            
                            echo"<li class='nav-item'><a href='cart.php?id=".$_SESSION['id']." 'style='background-color: 2c3e50 ;border-radius: 5px; color:fff;' 'class='nav-link'>CART 🛒</a>";
                            
                        }else{
                            echo"<li class='nav-item'><a href='cart.php' 'style='background-color: 2c3e50 ;border-radius: 5px; color:fff;' class='nav-link'>CART 🛒</a></li>";
                            }
                        ?> 
                        
                
                        
                    
                    </ul>
                </div>
                <a href="cart.html" class="cart-icon">
                    
                </a>
                <div class="hamburger">
                   
                </div>
            </div>
        </nav>