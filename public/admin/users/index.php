
    <?php
    session_start();
    //include required files
    require '../../../private/initialize.php';
    //important variables
    $title = "User Requests";
    $is_access=true;
//     including header from public/includes/admin directory
    include PUBLIC_PATH.'/includes/admin/admin_header.php';
    ?>

<!--    starting content of page-->
    <!-- Page content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>

                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Bootstrap 4 CDN and Starter Template</td>
                            <td>Cristina</td>
                            <td>2.846</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Bootstrap Grid 4 Tutorial and Examples</td>
                            <td>Cristina</td>
                            <td>3.417</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Bootstrap Flexbox Tutorial and Examples</td>
                            <td>Cristina</td>
                            <td>1.234</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!--    including footer from public/includes/admin directory-->
    <?php include PUBLIC_PATH.'/includes/admin/admin_footer.php'; ?>