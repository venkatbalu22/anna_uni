<?php
  require_once '../ajax/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- --------------------------------------------------- -->
  <!-- Title -->
  <!-- --------------------------------------------------- -->
  <title>Upload File</title>

  <!-- --------------------------------------------------- -->
  <!-- Required Meta Tag -->
  <!-- --------------------------------------------------- -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="Mordenize" />
  <meta name="author" content="" />
  <meta name="keywords" content="Mordenize" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- --------------------------------------------------- -->
  <!-- Favicon -->
  <!-- --------------------------------------------------- -->
  <link rel="shortcut icon" type="image/png"
    href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
  <link rel="stylesheet" href="dist/libs/prismjs/themes/prism-okaidia.min.css">
  <link id="themeColors" rel="stylesheet" href="dist/css/style.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
      alt="loader" class="lds-ripple img-fluid" />
  </div>
  <!-- --------------------------------------------------- -->
  <!-- Body Wrapper -->
  <!-- --------------------------------------------------- -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- --------------------------------------------------- -->
    <!-- Sidebar -->
    <?php include 'sidebar.php';?>
    <!-- Sidebar -->

    <!-- --------------------------------------------------- -->
    <!-- Main Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="body-wrapper">
      <!-- --------------------------------------------------- -->
      <!-- Header Start -->
      <!-- --------------------------------------------------- -->
      <?php include 'header.php';?>
      <!-- --------------------------------------------------- -->
      <!-- Header End -->
      <!-- --------------------------------------------------- -->
      <div class="container-fluid">
        <!-- --------------------------------------------------- -->
        <!-- --------------------------------------------------- -->
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Upload File</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                        href="./index.html">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">Upload File</li>
                  </ol>
                </nav>
              </div>
              <div class="col-3">
                <div class="text-center mb-n5">
                  <img src="dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                </div>
              </div>
            </div>
          </div>
        </div>
        <section>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="mb-3">Upload File</h5>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="fname" placeholder="Enter Name here" />
                        <label for="tb-fname">File Name</label>

                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="form-floating mb-3">
                        <textarea class="form-control" rows="5" spellcheck="false" id="msg"></textarea>
                        <label>Description</label>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="uploadFile" placeholder="Enter Name here" />
                        <label for="tb-fname">Upload File</label>

                      </div>
                    </div>

                    <!-- <div class="col-lg-6">
                      <div class="card-header">
                        <h5 class="card-title text-center">PDF Preview</h5>
                      </div>

                      <div class="card-body" id="previewArea">
                        PDF Preview will be displayed here 
                      </div>
                    </div>--->
                  </div> 

                  <div class="col-12">
                    <div class="d-md-flex align-items-center mt-3">
                      <div class="ms-auto mt-3 mt-md-0">
                        <button class="btn btn-primary" id="send">
                          <div class="d-flex align-items-center">
                            <!-- <i class="ti ti-send me-2 fs-4"></i> -->
                            Send
                          </div>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <script src="dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.js"></script>
    <script src="dist/libs/prismjs/prism.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
      integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      // $("#uploadFile").on("change", function () {
      //   var file = this.files[0];
      //   if (file && file.type === "application/pdf") {
      //     uploadedFile = file;
      //     var pdfPreview =
      //       `<iframe class="pdf-preview" src="${URL.createObjectURL(file)}" width="100%" height="600"></iframe>`;
      //     $("#previewArea").html(pdfPreview);
      //   } else {
      //     toastr.error("Please select a valid PDF file.");
      //   }
      // });
      $(document).ready(function () {
        $('#send').click(function () {
          var fileName = $('#fname').val();
          var message = $('#msg').val();
          var uploadFile = $('#uploadFile')[0].files[0];
          // var role = <?php echo $_SESSION['role'] ?>;
          // var staff_id = <?php echo $_SESSION['id'] ?>;

          // console.log(role);
          // console.log(staff_id);

          console.log(fileName);

          if (fileName == " ") {
            toastr.warning('Enter File name');
          } else if (message == " ") {
            toastr.warning('Enter message');
          } else if (uploadFile == null) {
            toastr.warning('Enter uploadFile');
          } else {
            var fd = new FormData();
            fd.append('filename', fileName);
            fd.append('message', message);
            fd.append('uploadfile', uploadFile);
            // fd.append('role', role);
            // fd.append('staff_id', staff_id);

            $.ajax({
              url: '',
              method: 'post',
              contentType: false,
              processData: false,
              data: fd,

              success: function (response) {
                var result = JSON.parse(response);

                if (result.status == 'Success') {
                  toastr.success('Email sent', 'Success');
                } else {
                  toastr.error('Error sending mail', 'Error');
                }
              }
            })
          }
        });
      });
    </script>
</body>

</html>