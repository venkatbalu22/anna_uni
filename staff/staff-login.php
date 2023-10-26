<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 06:50:57 GMT -->

<head>
  <!--  Title -->
  <title>Staff || Login</title>
  <!--  Required Meta Tag -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="Mordenize" />
  <meta name="author" content="" />
  <meta name="keywords" content="Mordenize" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--  Favicon -->
  <link rel="shortcut icon" type="image/png"
    href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
  <!-- Core Css -->
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
  <!-- Preloader -->
  <div class="preloader">
    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
      alt="loader" class="lds-ripple img-fluid" />
  </div>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100">
      <div class="position-relative z-index-5">
        <div class="row">
          <div class="col-xl-5 col-xxl-4 mx-auto">
            <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
              <div class="col-sm-8 col-md-6 col-xl-9">
                <h2 class="mb-3 fs-7 fw-bolder text-center">Welcome to Modernize</h2>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                  <input type="text" class="form-control" id="email" aria-describedby="emailHelp" oninput="allowOnlyNumbers(this)">
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password">
                </div>
                <button class="btn btn-primary w-100 py-8 mb-4 rounded-2" id="submit">Submit</button>
                <div class="d-flex align-items-center justify-content-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!--  Import Js Files -->
  <script src="dist/libs/jquery/dist/jquery.min.js"></script>
  <script src="dist/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--  core files -->
  <script src="dist/js/app.min.js"></script>
  <script src="dist/js/app.init.js"></script>
  <script src="dist/js/app-style-switcher.js"></script>
  <script src="dist/js/sidebarmenu.js"></script>
  <script src="dist/js/custom.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
     function allowOnlyNumbers(input) {
      input.value = input.value.replace(/[^0-9]/g, '');
    }

    $(document).ready(function () {
      $('#submit').click(function () {
        var email = $('#email').val();
        var password = $('#password').val();
        console.log(email);
        console.log(password);

        if (email == '') {
          toastr.error('Enter Email');
        } else if (password == '') {
          toastr.error('Enter Password');
        } else {
          var fd = new FormData();

          fd.append('phone', email);
          fd.append('password', password);

          $.ajax({
            url: '../ajax/staff/login_staff.php',
            method: 'post',
            contentType: false,
            processData: false,
            data: fd,

            success: function (response) {
              var result = JSON.parse(response);
              if (result.status == 'Success') {
                toastr.success('Logged in successfully');
                setTimeout(() => {
                  window.location.href = 'uploaded-file.php';
                }, 1000);
              } else {
                toastr.error('Invalid Credentials');
              }
            }
          })
        }
      })
    })
  </script>
</body>

</html>