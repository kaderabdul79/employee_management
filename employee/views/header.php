<div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Employee Management</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <form class="form-inline my-2 my-lg-0">
                    <input class=" mr-sm-22" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <li><?php echo "Hello"." ".$_SESSION['username']; ?>
                        <button type="button" class="btn btn-warning"><a class="" href="logout.php">Logout</a></button>
                    </li>
                    </ul>
                </div>
                </nav>
        </div>  
    </div>  
</div>    