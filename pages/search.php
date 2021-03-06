<?php include 'header.php'?>

<section class="py-5 bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card ">
                    <div class="card-header bg-success text-white font-weight-bolder text-center">
                        All User Info
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" name="search"/>
                                <div class="input-group-append">
                                    <button type="submit" name="search_btn" class="btn btn-outline-success">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student) { ?>
                            <tr class="">
                                <td><?php echo $student['name'] ?></td>
                                <td><?php echo $student['mobile'] ?></td>
                                <td><?php echo $student['email'] ?></td>
                                <td><?php echo $student['address'] ?></td>
                            </tr>
                            </tbody>
                            <?php } ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'?>
