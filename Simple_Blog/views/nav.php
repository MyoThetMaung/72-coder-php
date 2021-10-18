  <!-- Nav Bar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">NAVBAR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link active text-white" aria-current="page" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Politic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white">War</a>    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white">IT</a>       
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown" id="myDD">
                            <?php
                                if(checkSession('username')){
                                    echo getSession('username');
                                }
                            ?>
                        </a>
                        <ul class="dropdown-menu" >
                            <?php
                                if(checkSession('username')){
                                    echo "<li><a class='dropdown-item' href='logout.php'>Logout</a></li>";
                                }else{
                                    echo "
                                    <li><a class='dropdown-item' href='register.php'>Register</a></li>
                                    <li><a class='dropdown-item' href='login.php'> Login</a></li>";
                                }
                            ?>
                                
                                              
                        </ul>
                    </li>
                </ul>
        </div>
    </nav>


