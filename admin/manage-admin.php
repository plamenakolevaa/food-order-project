<?php include('partials/menu.php') ?>

        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br />
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br /><br />

            <table class = "tbl-full">
             <tr>
                    <th>Number</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>        
            </tr>
                <?php
                //query to get all admin 
                $sql = "SELECT * FROM tbl_admin";
                $res = mysqli_query($conn , $sql);

                //query is executed or not 
                if($res == true){
                    $count = mysqli_num_rows($res);
                    $sn = 1;
                    if($count >0){
                        // we have data in database
                        while($rows=mysqli_fetch_assoc($res)){
                            $id=$rows['id'];
                            $full_name=$rows['full_name'];
                            $username=$rows['username'];

                            //display values in table 

                            ?>
                         <tr>
                            <td><?php echo $sn++; ?>.</td>
                            <td><?php echo $full_name; ?></td><br />
                            <td><?php echo $username; ?></td>
                            <td>
                                <a href="#" class="btn-secondary">Update Admin</a>
                                <a href="#" class="btn-danger">Delete Admin</a><br /><br />
                            </td>
                        </tr>
                            <?php 

                        }

                    }else 
                    {

                    }
                }
                
                ?>

            </table>
            </div>
        </div>
        <?php include('partials/footer.php'); ?>
</html>