<!doctype html>
<html lang="en">

<head><?php include "views/includes/include_head.php" ?></head>

<body>
  <?php include "views/includes/nav-bar.php" ?>
  <div class="body-content container">
    <div class="background-singer">
      <img src="" class="background-img-singer" alt="singer-wrapper"/>
      <div class="wrapper-singer-img">
        <img src="" class="singer-img" alt="singer-img" />
      </div>
    </div>
    <div class="abtract-singer">
      <h2>Abtract</h2>
      <div class="content-abtract-singer">
      </div>
    </div>

  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script>
    var data = {
      id: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
      , name: ['One Derection', 'Adele', 'Brithney Speare', 'Charlie Puth', 'Ed Sharan', 'Justin Bieber', 'Justin Timberlake', 'Selena Gomez', 'Taylor Swift', 'bigbang', 'Black pink', 'Davichi', 'Psy', 'Red velvet', 'T-ara', 'Teayon', 'Ha` Anh tuan', 'Issac', 'Kelvin Khanh', 'Noo Phuoc Thinh', 'Quang Vinh', 'Tien Tien', 'toc Tien', 'Vu duy Khanh']
      , content: [
        'One Direction được quan niệm là nhóm nhạc mới nổi tỏa sáng trong các nhóm nhạc nam, và là gương mặt tiêu biểu trong "Làn sóng Anh Quốc" tại Mỹ. Nhóm đã tiêu thụ được 8 triệu bản album và 14 triệu bản đĩa đơn trên toàn thế giới theo công ty quản lý của nhóm, Modest! Management.[1] Những thành tích mà One Direction đạt được gồm hai giải BRIT và ba giải Video âm nhạc của MTV. Theo Nick Gatfield, chủ tịch và giám đốc điều hành của Sony Music Entertainment, nhóm đã thu về 50 triệu đô la Mỹ vào tháng 6 năm 2012. One Direction là "Nghệ sĩ mới xuất sắc nhất 2012" của tạp chí Billboard[2] và báo The Huffington Post gọi 2012 là "Năm của One Direction',
        'Adele phát hành album thứ hai của cô - 21 vào đầu năm 2011.[9][10] Album nhận được nhiều nhận xét tích cực từ giới phê bình và thành công hơn về mặt thương mại so với album đầu tay, đem lại cho cô nhiều giải thưởng trong năm 2012 trong đó có việc cân bằng kỉ lục giành 6 giải Grammy trong một đêm của Beyoncé.[11][12][13] 21 đã được chứng nhận đĩa bạch kim 16 lần tại Anh,[4] còn tại Mỹ album giữ vị trí dẫn đầu trên bảng xếp hạng lâu hơn bất kỳ album nào kể từ năm 1985.[14][15] Album đến nay đã bán ra trên 30 triệu bản trên toàn cầu.[16][17] Ước tính Adele đã bán ra 40 triệu album và 50 triệu đĩa đơn trên toàn thế giới',
        'Britney Jean Spears là một ca sĩ, vũ công và diễn viên người Mỹ. Sinh ra tại McComb, Mississippi và lớn lên tại Kentwood, Louisiana, Britney bắt đầu tham gia nhiều chương trình truyền hình như Star Search và The Mickey Mouse Club khi còn nhỏ trước khi ký kết hợp đồng thu âm với hãng đĩa Jive năm 1997',
        'Charles Otto "Charlie" Puth Jr. là ca sĩ, nhạc sĩ, nhà sản xuất thu âm người Mỹ. Anh nổi tiếng một cách nhanh chóng từ những video phát hành trên trang mạng YouTube. Anh đã ra mắt hai đĩa EP, The Otto Tunes và Ego, trên danh nghĩa một nghệ sĩ độc lập',
        'Edward Christopher "Ed" Sheeran hay còn được biết đến với nghệ danh Ed Sheeran là một nam ca sĩ-nhạc sĩ người Anh. Ed được sinh ra tại Hebden Bridge, Yorkshire và lớn lên tại Framlingham, Suffolk. Đầu năm 2011, anh độc lập cho ra mắt EP thứ tám, No. 5 Collaborations Project.',
        'Justin Drew Bieber là một ca sĩ kiêm sáng tác nhạc nhạc Pop và R&B người Canada. Năm 13 tuổi, anh gặp Scooter Braun sau khi những clip của anh được Braun xem trên YouTube. Braun và Bieber đã đến Atlanta, Georgia để thảo luận với Usher và nhanh chóng ký hợp đồng với hãng Raymond Braun Media Group, sau đó là L.A.',
        'Justin Randall Timberlake (sinh ngày 31 tháng 1 năm 1981) là ca sĩ kiêm nhạc sĩ nhạc pop/R&B và diễn viên người Mỹ. Justin xuất hiện lần đầu với vai trò một thí sinh trong cuộc thi tìm kiếm tài năng "Star Search", và đã trở thành diễn viên chính trong series phim truyền hình của kênh Disney Channel là The New Mickey Mouse Club, cùng với các ngôi sao nổi tiếng sau này như Britney Spears, Christina Aguilera, Ryan Gosling và người bạn cùng nhóm nhạc trong tương lai là JC Chasez. Justin Timberlake đã trở nên nổi tiếng vào cuối những năm 1990 khi là ca sĩ chính của nhóm nhạc N Sync',
        'Selena Marie Gomez là một nữ ca sĩ, nhạc sĩ, diễn viên và nhà sản xuất người Mỹ. Cô bắt đầu sự nghiệp của mình từ chương trình Barney & Friends. Selena được biết đến với vai diễn Alex Russo trong phim truyền hình dài tập Wizards of Waverly Place trên kênh Disney Channel.',
        'Taylor Alison Swift là nữ ca sĩ kiêm sáng tác nhạc người Mỹ. Sinh ra và lớn lên tại Wyomissing, Pennsylvania, cô dời đến Nashville năm 14 tuổi để theo đuổi sự nghiệp âm nhạc đồng quê',
        'Big Bang, thường được viết là BIGBANG, là một nhóm nhạc nam Hàn Quốc với 4 thành viên G-Dragon, T.O.P, Taeyang, Daesung thuộc YG Entertainment. Seungri tuyên bố rút lui khỏi ngành giải trí vào ngày 11 tháng 3 năm 2019',
        'BLACK PINK là một nhóm nhạc nữ Hàn Quốc được thành lập và quản lý bởi công ty YG Entertainment. Nhóm gồm 4 thành viên: Jisoo, Jennie, Rosé và Lisa. Nhóm chính thức ra mắt với hai đĩa đơn "Boombayah" và "Whistle", nằm trong album đĩa đơn đầu tay mang tên Square One.',
        'Davichi. Từ "Davichi" có ý nghĩa là ánh sáng tỏa sáng trên thế giới. Ra mắt năm 2008, nhóm đã giành được nhiều giải thưởng ở hạng mục Nhóm nhạc nữ mới xuất sắc nhất. Mini-album phát hành năm 2009 với bài hát "8282" nhanh chóng dẫn đầu nhiều bảng xếp hạng.',
        'Park Jae-Sang, thường được biết đến với nghệ danh Psy, tên cách điệu PSY, là một ca sĩ, rapper, người viết ca khúc và nhà sản xuất thu âm người Hàn Quốc. Psy được biết đến trong nước với những video và màn trình diễn hài hước trên sân khấu, và được biết đến ở phạm vi quốc tế với đĩa đơn tạo hit "Gangnam Style"',
        'Red Velvet là một nhóm nhạc nữ Hàn Quốc được thành lập và quản lý bởi công ty SM Entertainment. Nhóm chính thức ra mắt vào ngày 1 tháng 8 năm 2014 với đội hình 4 thành viên gồm: Irene, Seulgi, Wendy, Joy và được bổ sung thành viên thứ 5 Yeri vào ngày 10 tháng 3 năm 2015',
        'T-ara hay Tiara là một nhóm nhạc nữ thần tượng Hàn Quốc ra mắt vào ngày 29 tháng 7 năm 2009 bởi Core Contents Media với 6 thành viên chính thức gồm: Boram, Qri, Soyeon, Eunjung, Hyomin và Jiyeon. Trước khi đứng trên sân khấu, nhóm đã được đào tạo chuyên nghiệp trong vòng ba năm',
        'Kim Tae-yeon, là một nữ ca sĩ người Hàn Quốc và cũng là giọng ca chính, trưởng nhóm của nhóm nhạc nữ quốc dân Girls Generation. Kim Tae-yeon còn là thành viên nhóm nhỏ Girls Generation-TTS, cũng như nhóm nhạc đặc biệt SM the Ballad của S.M. Entertainment. Cô được đánh giá là một trong những giọng ca hay nhất Kpop',
        'Hà Anh Tuấn là một nam ca sĩ nhạc R&B người Việt Nam, từng giành được 13 đề cử và đoạt giải 2 lần cho giải Cống hiến. Anh bắt đầu nổi tiếng từ khi lọt vào top 3 cuộc thi Sao Mai điểm hẹn năm 2006',
        'Phạm Lưu Tuấn Tài được biết với nghệ danh Isaac là một ca sĩ và diễn viên người Việt Nam. Anh thành danh trong sự nghiệp ca hát với tư cách trưởng nhóm nhóm nhạc 365 từ năm 2010 đến năm 2016. Sau đó, Isaac chính thức solo riêng',
        'Ca sĩ Kelvin Khánh sinh năm 1994, là một hot boy, ca sĩ, diễn viên Việt Nam đang được nhiều khán giả yêu mến, từng là thành viên của nhóm nhạc nam nổi tiếng La Thăng.',
        'Noo Phước Thịnh là một ca sĩ nhạc trẻ của Việt Nam. Anh đã giành được 3 đề cử và 1 giải Cống hiến. Anh là quán quân của The Remix mùa thứ 2 và là huấn luyện viên của chương trình Giọng hát Việt nhí mùa 4, Giọng hát Việt mùa 4 và Giọng Hát Việt mùa 5',
        'Quang Vinh là một nam ca sĩ trẻ người Việt. Anh được biết đến nhiều nhất với màn ra mắt trên sóng VTV3 với music video "Tình yêu tìm thấy" và album thứ 5 Miền cát trắng) Hiện tại Quang Vinh đã và đang tiếp tục hoạt động ca hát',
        'Tiên Tiên tên thật là Huỳnh Nữ Thủy Tiên, là nhạc sĩ, ca sĩ, nhà sản xuất âm nhạc người Việt Nam. Tiên Tiên cũng là nghệ sĩ đã giành được 5 đề cử và chiến thắng ở 1 hạng mục của giải Cống hiến.',
        'Tóc Tiên là một nữ ca sĩ người Việt Nam. Tiên đã vinh dự giành giải Cống hiến 2019 ở hạng mục "Bài hát của năm" cho "Có ai thương em như anh". Cô từng là ca sĩ của Trung tâm Thúy Nga và thường xuyên biểu diễn trong các chương trình Paris By Night của trung tâm.',
        'Vũ Duy Khánh trước đây đã từng là thành viên của nhóm nhạc Thiên Hà Xanh, anh đã đi hát từ năm 2005 và chỉ thực sự nổi lên vào năm 2008 với ca khúc Buồn tiếp bước thành công của mình, anh đã cho ra đời những sáng tác của mình với bản Hit là Khóc, I love you, Buồn 2…'
      ]
  
      , img: ['/web-191/assets/images/singers/aumi/1D.jpg', '/web-191/assets/images/singers/aumi/adele.jpg', '/web-191/assets/images/singers/aumi/britneyspear.jpg', '/web-191/assets/images/singers/aumi/charlieputh.jpg', '/web-191/assets/images/singers/aumi/edsharan.png', '/web-191/assets/images/singers/aumi/justinbieber.jpg', '/web-191/assets/images/singers/aumi/justintimberlake.jpg', '/web-191/assets/images/singers/aumi/selena-gomez.jpg', '/web-191/assets/images/singers/aumi/taylorswift.jpg',
        '/web-191/assets/images/singers/hanquoc/bb.png', '/web-191/assets/images/singers/hanquoc/blackpink.jpeg', '/web-191/assets/images/singers/hanquoc/davichi.jpg', '/web-191/assets/images/singers/hanquoc/psy.jpg', '/web-191/assets/images/singers/hanquoc/redvelvet.webp', '/web-191/assets/images/singers/hanquoc/t-ara.jpg', '/web-191/assets/images/singers/hanquoc/teayong.jpeg',
        '/web-191/assets/images/singers/vietnam/haanhtuan.jpg', '/web-191/assets/images/singers/vietnam/issac.jpg', '/web-191/assets/images/singers/vietnam/kelvinkhanh.jpeg', '/web-191/assets/images/singers/vietnam/noo.jpg', '/web-191/assets/images/singers/vietnam/quangvinh.jpg', '/web-191/assets/images/singers/vietnam/tientien.jpeg', '/web-191/assets/images/singers/vietnam/toctien.jpeg', '/web-191/assets/images/singers/vietnam/vuduykhanh.jpeg']
      , bgimg: ['/web-191/assets/images/singers/background-singer/aumi/bg-1D.jpeg', '/web-191/assets/images/singers/background-singer/aumi/bg-adele.jpeg', '/web-191/assets/images/singers/background-singer/aumi/bg-britney.jpg', '/web-191/assets/images/singers/background-singer/aumi/bg-charlieputh.jpeg', '/web-191/assets/images/singers/background-singer/aumi/bg-edsheran.jpg', '/web-191/assets/images/singers/background-singer/aumi/bg-justinbieber.jpg', '/web-191/assets/images/singers/background-singer/aumi/bg-justintimberlake.jpg', '/web-191/assets/images/singers/background-singer/aumi/bg-selena-gomez.jpg', '/web-191/assets/images/singers/background-singer/aumi/bg-taylorswift.jpg',
        '/web-191/assets/images/singers/background-singer/hanquoc/bg-bb.jpg', '/web-191/assets/images/singers/background-singer/hanquoc/bg-blackpink.jpg', '/web-191/assets/images/singers/background-singer/hanquoc/bg-davichi.jpeg', '/web-191/assets/images/singers/background-singer/hanquoc/bg-psy.jpeg', '/web-191/assets/images/singers/background-singer/hanquoc/bg-redvelvet.jpg', '/web-191/assets/images/singers/background-singer/hanquoc/bg-tara.jpg', '/web-191/assets/images/singers/background-singer/hanquoc/bg-teayong.jpg',
        '/web-191/assets/images/singers/background-singer/vietnam/bg-haanhtuan.jpg', '/web-191/assets/images/singers/background-singer/vietnam/bg-issac.jpg', '/web-191/assets/images/singers/background-singer/vietnam/bg-kelvinkhanh.jpg', '/web-191/assets/images/singers/background-singer/vietnam/bg-noo.jpg', '/web-191/assets/images/singers/background-singer/vietnam/bg-quangvinh.jpg', '/web-191/assets/images/singers/background-singer/vietnam/bg-tientien.jpg', '/web-191/assets/images/singers/background-singer/vietnam/bg-toctien.jpg', '/web-191/assets/images/singers/background-singer/vietnam/bg-vuduykhanh.jpg']
  
    }
    function getParams(url) {
      var regex = /[?&]([^=#]+)=([^&#]*)/g,
        params = {},
        match;
      while (match = regex.exec(url)) {
        params[match[1]] = match[2];
      }
      return params
  
    }
    $(document).ready(function () {
      var obj = JSON.parse('<?php echo $data['json_str'] ?>')[0]
      console.log(obj)
      // params = getParams(window.location.href)
      // idx = data.id.indexOf(Number(params.id))
      // console.log(idx)
      $('.background-img-singer').attr('src', obj.background_img)
      console.log(obj.urlimg)
      $('.singer-img').attr('src', obj.urlimg)
  
      $('.content-abtract-singer').html(obj.description)
      $('.singer-img').css('height', $('.singer-img').css('width'))
  
    });
  
  </script>
    
</body>

</html>