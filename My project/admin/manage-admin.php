<?php include('widgets/menu.php'); ?>

<!-- main content goes here-->
    <section class="main-content">
        <div class="wrapper manage-admin">

            <h1 class="pagetitle">Manage Admin</h1>

            <br/><br/>

            <a href="add-admin.php" class="btn-primary">Add Admin</a>

            <br/>
            <br/>
            <br/>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>

                <?php 
                
                $sql = "SELECT * FROM tbl_admin";

                $res = mysqli_query($conn, $sql);

                if ($res==TRUE) {
                    $count = mysqli_num_rows($res);

                    if ($count>0) {
                        
                        while($rows=mysqli_fetch_assoc($res)){
                           $full_name = $rows['full_name']; 
                           $username = $rows['username'];

                        ?>   

                        <tr>
                            <td>1.</td>
                            <td> <?php echo $full_name ?> </td>
                            <td> <?php echo $username ?> </td>
                            <td>*****</td>
                            <td>
                                <a href="#" class="btn-secondary">Update</a>
                                <a href="#" class="btn-danger">Delete</a>
                            </td>
                        </tr>


                        <?php 
                        }
                    }
                    else{

                    }
                }
                ?>

            </table>

        </div>

           

            <div class="clearfix"></div>
        </div>
    </section>

<?php include('widgets/footer.php'); ?>
    

