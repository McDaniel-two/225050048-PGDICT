<?php include('widgets/menu.php'); ?>

<!-- main content goes here-->
    <section class="main-content">
        <div class="wrapper manage-admin">

            <h1 class="pagetitle">Add Admin</h1>

            <br/>

            <?php 
                if(isset($_SESSION['add']))
                {
                   echo $_SESSION['add'];
                   unset($_SESSION['add']);
                 }
            ?>
            <br/>


            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Full Name </td>
                        <td>
                            <input type="text" name="full_name">
                        </td>
                    </tr>

                    <tr>
                        <td>Username </td>
                        <td>
                            <input type="text" name="username">
                        </td>
                    </tr>

                    <tr>
                        <td>Password </td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                    </tr>
                    
                </table>
            </form>

        </div>

           

        <div class="clearfix"></div>
    </section>

<?php include('widgets/footer.php'); ?>

<?php 

    //check to see if button is clicked
    if(isset($_POST['submit'])){

        //get data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        //sql query to save data into database
        $sql = "INSERT INTO tbl_admin SET 
            full_name = '$full_name',
            username = '$username',
            password = '$password'
        ";


        //execute query
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if ($res==TRUE) {
            $_SESSION['add'] = "Admin added successfully";
        }
        else {
            $_SESSION['add'] = "Admin not added";
        }

    }

?>

    

