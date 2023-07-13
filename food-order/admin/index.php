
<?php include("partials/menu.php");?>
        <!-- Main Content Section Start-->
        <div class="Main-Content"> 
        <div class="wrapper">
        <h1>DASHBOARD</h1>
        <br><br>
        <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>
            <br><br>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br/>
                Categoies
            </div>
            <div class="col-4 text-center">
                <h1>5</h1>
                <br/>
                Categoies
            </div>
            <div class="col-4 text-center">
                <h1>5</h1>
                <br/>
                Categoies
            </div>
            <div class="col-4 text-center">
                <h1>5</h1>
                <br/>
                Categoies
            </div>

            <div class="clearfix"></div>
            
       </div>
       </div>
       <!-- Main Content Section End-->

      <?php include("partials/footer.php");?>