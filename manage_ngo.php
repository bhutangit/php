<?php include_once 'admin_header.php'; ?>

<div class="container">
    <h2 class="text-center">Manage NGO</h2>
    <?php 
        if(isset($_POST) && isset($_POST['sub'])){
            $name = $_POST['name'];
            $city = $_POST['city'];
            $phone = $_POST['phone'];
            $desc = $_POST['desc'];
            include_once "config.php";
            $q = "insert into ngo(name,city,phone,`description`) values('$name','$city','$phone','$desc')";
            $res = mysqli_query($conn,$q);
            if($res>0)
                echo '<p class="alert alert-success">NGO Added</p>';
        }
    ?>  
    <div class="container-fluid mt-3">
        <div class="row">
        <div class="col-md-5">
                <h2 class="text-center">Add NGO</h2>                
               
                <form method="post" enctype="multipart/form-data">
                    <table class="table table-bordered ">
                        <tr>
                            <td class='lead'>Name</td>
                            <td>
                                <input type="text" name="name" id="" required='required' class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td class='lead'>City</td>
                            <td>
                                <input type="text" name="city" id="" required='required' class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td class='lead'>Phone</td>
                            <td>
                                <input type="text" name="phone" id="" required='required' class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td class='lead'>Desc</td>
                            <td>
                                <input type="text" name="desc" id="" required='required' class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="sub" value="Save NGO" class="btn btn-danger">
                            </td>
                        </tr>
                    </table>   
                </form>    

                 
            </div>
            <div class="col-md-7">
                    
                    <table class="table table-bordered ">
                    <thead class="table-warning">
                    <tr>
                        <th>#</th>
                        <th>NGO Name</th>
                        <th>NGO City</th>
                        <th>NGO Contact</th>
                        <th>NGO Desc</th>
                    </tr>                
                    </thead>
                    <?php
                    $count = 1;
                    include_once 'config.php';
                    $q = 'SELECT * FROM `ngo`';
                    $res = mysqli_query($conn, $q);
                    while ($data = mysqli_fetch_array($res)) { ?>
                        <tr>
                        <td><?php echo $count ;$count++; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['city']; ?></td>
                        <td><?php echo $data['phone']; ?></td>
                        <td><?php echo $data['description']; ?></td>
                        
                    </tr>
                    <?php }
                    ?>
                    </table>
                    </div>
            </div>
           
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
