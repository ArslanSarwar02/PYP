<?php
session_start();
include '../../private/initialize.php';
    $is_access=true;
    if(!isset($_SESSION ['is_login'])){
        header('Location:../');
        exit();
    }
    if($_SESSION['username']){
        $title = $_SESSION ['username'] . "\'s profile";
    }
else{
    $title = "profile";
}
?>


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo node_path('/jquery/dist/jquery.slim.min.js');?>"></script>
    <script src="<?php echo url_for('js/bootstrap.js');?>"></script>
    <script src="<?php echo url_for('js/bootstrap.min.js');?>"></script>
    <script src="<?php echo url_for('js/admin_js.js');?>"></script>

    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="<?php echo url_for('css/bootstrap.css');?>"/>
    <script src="<?php echo node_path('/font-awesome/css/font-awesome.css');?>"></script>
    <link rel="stylesheet" href="<?php echo url_for('css/style.css');?>" />
    <link rel="stylesheet" href="<?php echo url_for('css/profile.css');?>" />
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<?php include_once '../includes/header.php'; ?>
<?php include_once '../includes/header.php'; ?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?php echo $_SESSION['username'];?></span>
                <span class="text-black-50"><?php echo $_SESSION['email'];?></span>
                <span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="enter phone number" value="">
                    </div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label>
                        <input type="text" class="form-control" placeholder="enter address line 1" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Address Line 2</label>
                        <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12"><label class="labels">Postcode</label>
                        <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12"><label class="labels">State</label>
                        <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12"><label class="labels">Area</label>
                        <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12"><label class="labels">Email ID</label>
                        <input type="text" class="form-control" placeholder="enter email id" value="">
                    </div>
                    <div class="col-md-12"><label class="labels">Education</label>
                        <input type="text" class="form-control" placeholder="education" value="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">
                            Country
                        </label>
                        <input type="text" class="form-control" placeholder="country" value="">
                    </div>
                    <div class="col-md-6"><label class="labels">
                            State/Region welcome to pakistan
                        </label>
                        <input type="text" class="form-control" value="" placeholder="state"
                        ></div>

                </div>
                <div class="mt-5 text-center"><button class=" btn-custom-bg btn-outline-success" type="button">Save Profile</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label>
                    <input type="text" class="form-control" placeholder="experience" value=""></div>
                <br>
                <div class="col-md-12"><label class="labels">Additional Details</label>
                    <input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
