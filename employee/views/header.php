<style>
    .x {
        background-color:#343a40;
    }
    .navbar-brand{
        margin-left: 70px;
        margin-right: 400px;
    }
    form{
        margin-right: 50px;
    }
    nav,li,a{
        color: #fff;
    }
</style>
<div class="row">
            <div class="col-md-12 x">
                <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="homepage.php">Employee Management</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <form class="form-inline my-2 my-lg-0">
                    <input class=" mr-sm-22" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <li>
                        <?php echo "Hello"." ".$_COOKIE['username']; ?>
                        <!-- <?php echo "Hello"." ".$_SESSION['username']; ?> -->
                        <button type="button" class="btn btn-warning"><a class="" href="logout.php">Logout</a></button>
                    </li>
                    </ul>
                </div>
                </nav>
        </div>  
    </div> 