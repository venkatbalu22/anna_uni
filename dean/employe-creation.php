<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Oct 2023 08:24:34 GMT -->

<head>
  <!-- --------------------------------------------------- -->
  <!-- Title -->
  <!-- --------------------------------------------------- -->
  <title> Dean | Employe Creation</title>

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
        <!--  Form Basic Start -->
        <!-- --------------------------------------------------- -->
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Employee Creation</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                        href="index-2.html">Dashboard</a></li> -->
                    <!-- <li class="breadcrumb-item" aria-current="page">Empolyee Creation</li> -->
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
                  <!-- <h5 class="mb-3">Employe Creation</h5> -->

                  <div class="row">

                    <div class="col-md-7">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Enter Name here" />
                        <label for="tb-fname">Employee Name</label>

                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-floating mb-3">

                        <select class="form-select col-4" id="role">
                          <option value="">Select the option</option>
                          <option value="">Admin</option>
                          <option value="">Staff</option>
                          <option value="">Dean</option>
                        </select>
                      <label for="tb-role">Role</label>

                      </div>
                    </div>
                    
                  </div>

                  <div class="row">

                  <div class="col-md-4">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Mnumber" oninput="allowOnlyNumbers(this)"
                          placeholder="Empolye Mobile Number" />
                          <label for="tb-num"> Mobile Number </label>

                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-floating">
                        <input type="password" class="form-control" id="pwd" placeholder="Password" />
                        <label for="tb-pwd">Password</label>

                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-floating">
                        <input type="password" class="form-control" id="cpwd" placeholder="Password" />
                        <label for="tb-cpwd">Confirm Password</label>

                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-md-flex align-items-center mt-3">
                      <!-- <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                          <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                          </label>
                        </div> -->
                      <div class="ms-auto mt-3 mt-md-0">
                        <button id="create" class="btn btn-info font-medium rounded-pill px-4">Create Employee
                      </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
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
    function allowOnlyNumbers(input) {
      input.value = input.value.replace(/[^0-9]/g, '');
    }
    
    function password() {
      var pass = document.getElementById('pwd').value;
      var cpass = document.getElementById('cpwd').value;
      var note = document.getElementById('note');
      var cbtn = document.getElementById('create');

      if(pass == '' || cpass == '') {
        note.innerHTML = 'Enter Password';
        cbtn.disabled = true;
      } else if (pass == cpass) {
        note.style.color = 'green';
        note.innerHTML = '**Password  matched**';
        cbtn.disabled = false;
      } else {
        note.style.color = 'red';
        note.innerHTML = '**Password  mis-matched**';
        cbtn.disabled = true;
      }
    }

    $(document).ready(function () {
      $('#create').click(function () {
        var name = $('#name').val();
        var role = $('#roll').val();
        var number = $('#Mnumber').val();
        var password = $('#pwd').val();
        var conPwd = $('#cpwd').val();


        if (name == '') {
          toastr.error('Enter Name');
        } else if (number == '') {
          toastr.error('Enter Empolye Mobile Number ');
        } else if (password == '') {
          toastr.error('Enter Password');
        } else if (conPwd == '') {
          toastr.error('Enter Confirm Password');
        } else {
          var fd = new FormData();

          fd.append('name', name);
          fd.append('number', number);
          fd.append('password', password);
          fd.append('conPwd', conPwd);
          $.ajax({
            url: '',
            method: 'post',
            contentType: false,
            processData: false,
            data: fd,

            success: function (response) {
              var result = JSON.parse(response);
              if (result.status == 'Success') {
                toastr.success('Logged in successfully');
                setTimeout(() => {
                  window.location.href = '';
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