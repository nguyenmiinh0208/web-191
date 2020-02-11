<!doctype html>
<html lang="en">
  <head><?php include "views/includes/include_head.php" ?></head>
  <body>
    <?php include "views/includes/nav-bar.php" ?>
    <div class="body-content container">
      <ul class="nav nav-tabs justify-content-center" id="navtab-singer-type" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="all-singers-tab" data-toggle="tab" href="#all-singers" role="tab" aria-controls="all-singers" aria-selected="true">All-singers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="vietnam-singers-tab" data-toggle="tab" href="#vietnam-singers" role="tab" aria-controls="vietnam-singers" aria-selected="false">Vietnam Singer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="kpop-singers-tab" data-toggle="tab" href="#kpop-singers" role="tab" aria-controls="kpop-singers" aria-selected="false">K-pop Singer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="usuk-singers-tab" data-toggle="tab" href="#usuk-singers" role="tab" aria-controls="usuk-singers" aria-selected="false">US-UK Singer</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="all-singers" role="tabpanel" aria-labelledby="all-singers-tab">
          <div class="header-singers">
            <span class="title">VietNam Singers</span>
            <span class="link-all"><a href="#" id="see-all-vietnam">See all</a></span>
          </div>
          <div class="wrapper-singers row container" id="sub-tab-vn">
            
          </div>
          <div class="header-singers">
            <span class="title">K-pop Singer</span>
            <span class="link-all"><a href="#" id="see-all-kpop">See all</a></span>
          </div>
          <div class="wrapper-singers row container" id="sub-tab-kr">
           
          </div>
          <div class="header-singers">
            <span class="title">US-UK Singer</span>
            <span class="link-all"><a href="#" id="see-all-usuk">See all</a></span>
          </div>
          <div class="wrapper-singers row container" id="sub-tab-usuk">
            
          </div>
        </div>

        <div class="tab-pane fade" id="vietnam-singers" role="tabpanel" aria-labelledby="vietnam-singers-tab">
          <h2 class="title">Viet Nam Singers</h2>
          <div class="wrapper-singers row container" id="tab-vn">
            
          </div>
          
        </div>
        <div class="tab-pane fade" id="kpop-singers" role="tabpanel" aria-labelledby="kpop-singers-tab">
          <h2 class="title">Kpop Singers</h2>
          <div class="wrapper-singers row container" id="tab-kr">
          </div>
        </div>
        <div class="tab-pane fade" id="usuk-singers" role="tabpanel" aria-labelledby="usuk-singers-tab">
          <h2 class="title">US-UK Singers</h2>
          <div class="wrapper-singers row container" id="tab-usuk">
            
          </div>
        </div>
      </div>
      
    </div>

    <!--modal sign up-->
    <div class="modal fade" id="modalSignUpForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="font-size: 1.5rem;">Setting</h4>
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
                            placeholder="password">
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" class="form-control validate orangeForm-new-pass"
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
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="font-size: 1.5rem;">Setting</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text"  class="form-control validate orangeForm-name" placeholder="Your name">
                    </div>
                  
                    <div class="md-form mb-5">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password"  class="form-control validate orangeForm-new-pass" placeholder="Password">
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn" data-dismiss="modal">Sign in</button>
                </div>
            </div>
        </div>
    </div>
    <!--modal login-->

    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      $(document).ready(function() {
        var obj = JSON.parse('<?php echo $data['json_str'] ?>');
        obj.vn_artists.forEach(function (item, index) {
          if(index <=7 ){
            $('#sub-tab-vn').append('<div class="col-12 col-md-4 col-lg-3"><div class="card-singer" id="'+item.id+'"><img class="img-singer" src="' + item.urlimg +'"/><div class="singer-name">'+ item.artist_name + '</div></div>')
          }
          $('#tab-vn').append('<div class="col-12 col-md-4 col-lg-3"><div class="card-singer" id="'+item.id+'"><img class="img-singer" src="' + item.urlimg +'"/><div class="singer-name">'+ item.artist_name + '</div></div>')

        })
        obj.kr_artists.forEach(function (item, index) {
          if(index <=7 ){
            $('#sub-tab-kr').append('<div class="col-12 col-md-4 col-lg-3"><div class="card-singer" id="'+item.id+'"><img class="img-singer" src="' + item.urlimg +'"/><div class="singer-name">'+ item.artist_name + '</div></div>')
          }
          $('#tab-kr').append('<div class="col-12 col-md-4 col-lg-3"><div class="card-singer" id="'+item.id+'"><img class="img-singer" src="' + item.urlimg +'"/><div class="singer-name">'+ item.artist_name + '</div></div>')

        })
        obj.usuk_artists.forEach(function (item, index) {
          if(index <=7 ){
            $('#sub-tab-usuk').append('<div class="col-12 col-md-4 col-lg-3"><div class="card-singer" id="'+item.id+'"><img class="img-singer" src="' + item.urlimg +'"/><div class="singer-name">'+ item.artist_name + '</div></div>')
          }
          $('#tab-usuk').append('<div class="col-12 col-md-4 col-lg-3"><div class="card-singer" id="'+item.id+'"><img class="img-singer" src="' + item.urlimg +'"/><div class="singer-name">'+ item.artist_name + '</div></div>')

        })
        $('.img-singer').click(function(){
          location.href = './show?id=' + $(this).parent().attr('id')
        })
        $('#see-all-vietnam').click(function(){
          $('#navtab-singer-type #vietnam-singers-tab').tab('show')
        })
    
        $('#see-all-kpop').click(function(){
          $('#navtab-singer-type #kpop-singers-tab').tab('show')
        })
    
        $('#see-all-usuk').click(function(){
          $('#navtab-singer-type #usuk-singers-tab').tab('show')
        })
        $('.card-singer img').css('height',$('.card-singer img').css('width'))
      });
       
        
    </script>
  </body>
  
</html>