<?php include('widgets/menu.php'); ?>

<!-- main content goes here-->
    <section class="main-content">
        <div class="wrapper">
            <h1>Projects</h1>

            <br/>
            <br/>

            <a href="#" class="btn-primary">Add Project</a>

            <br/>
            <br/>
            <br/>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Project Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>

                 <tr>
                    <td>1.</td>
                    <td>E-commerce Platform</td>
                    <td>A full-stack e-commerce solution with React frontend and Node.js backend.</td>
                    <td>Image</td>
                    <td>
                        <a href="#" class="btn-secondary">Update</a>
                        <a href="#" class="btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                   <td>Task Management App</td>
                    <td>A productivity app built with Vue.js and Firebase realtime database.</td>
                    <td>Image</td>
                    <td>
                        <a href="#" class="btn-secondary">Update</a>
                        <a href="#" class="btn-danger">Delete</a>
                    </td>
                </tr>
              
            </table>

            <div class="clearfix"></div>
        </div>
    </section>

<?php include('widgets/footer.php'); ?>
    

