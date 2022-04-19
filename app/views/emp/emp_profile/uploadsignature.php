<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . 'views/emp/includes/head.php'); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR . 'views/emp/includes/topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once('sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray">
                        <a href="<?=site_url('Employee/');?>"> <i class=" fa fa-icon fa-arrow-left"></i></a>
                    User  <small>Signature</small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                   <!-- COL 12 -->
                   <div class="col-md-12 float-sm-start">
                        <div class="row">       
                            <div class="col-lg-12 col-xlg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            
                                            <div class="col-md-4 mb-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <center class="m-t-30">
                                                            <img src="<?= BASE_URL . 'signatures/' . $data['e_sign'] ;?>" class="img-fluid" alt="" srcset="" class="img-circle" >
                                                            <h4>Signature</h4>
                                                        </center>
                                                    </div>
                                                </div>                                                    
                                            </div>

                                            <div class="col-md-8">
                                            <form action="<?=site_url('Employee/view_upload_signature');?>" method="post" enctype="multipart/form-data">
                                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                                                <div class="image-upload-wrap">
                                                    <input class="file-upload-input" type='file' name="fileToUploadSign" onchange="readURL(this);" accept="image/*" />
                                                    <div class="drag-text">
                                                    <h3>Drag and drop a file or select add Image</h3>
                                                    </div>
                                                </div>
                                                <div class="file-upload-content">
                                                    <img class="file-upload-image" src="#" alt="your image" />
                                                    <div class="image-title-wrap">
                                                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 float-right">
                                                    <input type="submit" name="submit" value="Upload" class="btn btn-success">

                                                </div>
                                            </form>

                                            </div>
                                            
                                           
                                                


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End container-fluid -->
                    </div>
                        <!-- END COL 12 -->
                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once(APP_DIR . 'views/emp/includes/footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->
    <?php require_once(APP_DIR . 'views/emp/includes/footer.php'); ?>
    

    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<style>
        body {
            font-family: sans-serif;
            background-color: #eeeeee;
            }

            .file-upload {
            background-color: #ffffff;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            }

            .file-upload-btn {
            width: 100%;
            margin: 0;
            color: #fff;
            background: #1FB264;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #15824B;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
            }

            .file-upload-btn:hover {
            background: #1AA059;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
            }

            .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
            }

            .file-upload-content {
            display: none;
            text-align: center;
            }

            .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
            }

            .image-upload-wrap {
            margin-top: 20px;
            border: 4px dashed #1FB264;
            position: relative;
            }

            .image-dropping,
            .image-upload-wrap:hover {
            background-color: #1FB264;
            border: 4px dashed #ffffff;
            }

            .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
            }

            .drag-text {
            text-align: center;
            }

            .drag-text h3 {
            font-weight: 100;
            text-transform: uppercase;
            color: #15824B;
            padding: 60px 0;
            }

            .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
            }

            .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
            }

            .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
            }

            .remove-image:active {
            border: 0;
            transition: all .2s ease;
            }
    </style>
    <script>
        function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
            $('.image-upload-wrap').hide();

            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();

            $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
        }

        function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>
