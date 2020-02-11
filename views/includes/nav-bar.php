<?php 
  
  // if(!isset($_SESSION)) { 
  //   session_start();
  //   var_dump('DMMMM'); 
  // } else {
  //   var_dump('AAAAAAA');
  //   var_dump(json_encode($_SESSION));
  // }  
?>
<div class="header" style="position: -webkit-sticky; position: sticky; top: 0; z-index: 2;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand m-auto m-lg-unset" href="../home/index">
        <img src="/web-191/public/images/logo.svg" width="50" height="50" alt="">
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
          <form class="form-inline m-lg-auto form-search position-relative" action='../searchpage/index'>
            <input class="form-control mr-sm-2" type="search" name='key' placeholder="Search" aria-label="Search">
            <!-- <div class="autocomplete-list">vv</div> -->
            <button class="btn btn-light" type="submit">Search</button>
          </form>
      </div>
      <div class="signed">
        <div class="btn-group">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="text-transform: lowercase;">
            <?php if (isset($_SESSION["name"])) {echo $_SESSION["name"];}?>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <button id="btn-user" class="dropdown-item" type="button"">
              <?php echo '<a href="../user/profile?idU='. $_SESSION["id"]. '">Trang cá nhân</a>'?>
            </button>
            <!-- <button class="dropdown-item" type="button">Another action</button> -->
            <button id="logout-btn" class="dropdown-item" type="button">
            <?php echo '<a href="../index/index">Đăng Xuất</a>'?>
            </button>
          </div>
        </div>
      </div>
      <div class="notsign">
        <span>
          <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalLoginForm">Login</button>            
        </span>
        <span>
          <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalSignUpForm">Sign up</button>       
        </span>
      </div>
      
    </div>
  </nav>
    
  <div class="container menu-bar">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="../home/index">Home Page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../album/index">Album</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../chart/index">Chart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../singers/index">Singer</a>
      </li>
    </ul>
  </div>
  
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--modal sign up-->
<div class="modal fade" id="modalSignUpForm" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold" style="font-size: 1.5rem;">Sign Up</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body mx-3">
                  <div class="md-form mb-5">
                      <i class="fas fa-user prefix grey-text"></i>
                      <input type="text"  class="form-control validate orangeForm-name"
                          placeholder="Your name">
                  </div>
                  <div class="md-form mb-5">
                      <i class="fas fa-envelope prefix grey-text"></i>
                      <input type="email" id="orangeForm-email" class="form-control validate"
                          placeholder="Your email">
                  </div>

                  <div class="md-form mb-5">
                      <i class="fas fa-lock prefix grey-text"></i>
                      <input type="password" id="orangeForm-cur-pass" class="form-control validate"
                          placeholder="Password">
                  </div>
                  <div class="md-form mb-5">
                      <i class="fas fa-lock prefix grey-text"></i>
                      <input type="password"  class="form-control validate orangeForm-new-pass"
                          placeholder="Retype password">
                  </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                  <button class="btn" data-dismiss="modal">Sign up</button>
              </div>
          </div>
      </div>
  </div>
  <!--modal sign up-->
  <!--modal login-->
  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-hidden="true"  style="border-radius: 10%;">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="card">
                <h5 class="card-header white-text text-center py-4" style="background-color: rgb(101, 80, 158);">
                  <strong>LOG IN</strong>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </h5>
                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">
                  <!-- Form -->
                  <form class="text-center" style="color: #757575;">
                    <!-- Email -->
                    <div class="md-form">
                      <i class="fas fa-user prefix grey-text" style="left: -2px; top: 14px;"></i>
                      <input type="email" name="materialLoginFormEmail" id="materialLoginFormEmail" class="form-control" placeholder="E-mail">
                      <div id="wrong-info"></div>
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                      <i class="fas fa-lock prefix grey-text"  style="left: -2px; top: 14px;"></i>
                      <input type="password" name="materialLoginFormPassword" id="materialLoginFormPassword" class="form-control" placeholder="Password">
                    </div>

                    <div class="d-flex justify-content-around">
                      <div>
                        <!-- Remember me -->
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                          <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                        </div>
                      </div>
                      <div>
                        <!-- Forgot password -->
                        <a  href="">Forgot password?</a>
                      </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                    <!-- Register -->
                    <p>Not a member?
                      <a  data-toggle="modal" data-target="#modalSignUpForm" data-dismiss="modal">Register</a>
                    </p>
                  </form>
                  <!-- Form -->
                </div>
              </div>
          </div>
      </div>
  </div>

  <!--modal login-->

<script src='/web-191/public/js/serch-autocomple.js'></script>

<script>
  $( document ).ready(function(){
    <?php if(isset($_SESSION["username"]) ){ ?>
      $('.signed').show();
      $('.notsign').hide();
    <?php } else{ ?>
      $('.notsign').show();
      $('.signed').hide();
    <?php } ?>

    $('#logout-btn').click(function(){
      <?php session_destroy(); ?>
      $('.notsign').show();
      $('.signed').hide();
    })

    $("#btn-user").click(function(){
      
      $('.notsign').show();
      $('.signed').hide();
    })

    $('#modalLoginForm form').submit(function(event){
      event.preventDefault();
      console.log($('#modalLoginForm form').serialize())
      $.ajax({
        url: "/web-191/controllers/LoginController.php",//../index/login
        type: "POST",
        dataType:"text",
        data: {
          username: $('#modalLoginForm form #materialLoginFormEmail').val(),
          password: $('#modalLoginForm form #materialLoginFormPassword').val()
        },
        success: function(msg) {
          if(msg == '0'){
            $('#wrong-info').text('wrong input');
          } else{
            // window.location.href = '../index/index';
            // $('.signed').show();
            // $('.notsign').hide();
            // $('#modalLoginForm').modal('toggle');
            console.log('dddd ' + msg);
            var data = <?php echo json_encode($_SESSION);?>;
            console.log(data);
            location.replace('http://localhost/web-191/index/index');
          }
        }
      });
    });
  });
  
</script>
