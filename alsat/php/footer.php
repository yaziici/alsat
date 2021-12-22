<div class="footer1 navbar navbar-static-bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2 footer-line">
        <h5>Hizmetlerimiz</h5>
        <ul>
          <li><a href="#"><i class="fa fa-chevron-right"></i> Mağaza</a></li>
          <li><a href="#"><i class="fa fa-chevron-right"></i> Mağaza A&ccedil;ın</a></li>
          <li><a href="#"><i class="fa fa-chevron-right"></i> Reklam</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 footer-line">
        <h5>Gizlilik Ve Kullanım</h5>
        <ul>
          <li><a href="#"><i class="fa fa-chevron-right"></i> Kullanım Koşulları</a></li>
          <li><a href="#"><i class="fa fa-chevron-right"></i> Gizlilik Politikası</a></li>
          <li><a href="#"><i class="fa fa-chevron-right"></i> &Uuml;yelik S&ouml;zleşmesi</a></li>
          <li><a href="#"><i class="fa fa-chevron-right"></i> Yardım</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 footer-line">
        <h5>Kurumsal</h5>
        <ul>
          <li><a href="#"><i class="fa fa-chevron-right"></i> Hakkımızda</a></li>
          <li><a href="#"><i class="fa fa-chevron-right"></i> İnsan Kaynakları</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 footer-line">
        <h5>Bizi Takip Edin</h5>
        <ul>
          <li><a href="#" target="_blank"><i class="fa fa-facebook-official"></i> Facebook</a></li>
          <li><a href="#" target="_blank"><i class="fa fa-twitter-square"></i> Twitter</a></li>
          <li><a href="#" target="_blank"><i class="fa fa-google-plus-square"></i> Google+</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2">
        <h5>&nbsp;</h5>
      </div>
    </div>
  </div>
</div>
<div class="footer2"> <?php echo  $ayarcek['ayar_footer']; ?> </div>
<a href="#" class="scrollToTop"></a> 
<script>
$(document).ready(function(){
		$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});

	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
});

</script> 
<script>

  window.fbAsyncInit = function() {

    FB.init({

      appId      : '',

      xfbml      : true,

      version    : 'v2.5'

    });

  };
  (function(d, s, id){

     var js, fjs = d.getElementsByTagName(s)[0];

     if (d.getElementById(id)) {return;}

     js = d.createElement(s); js.id = id;

     js.src = "../connect.facebook.net/tr_TR/sdk.js";

     fjs.parentNode.insertBefore(js, fjs);

   }(document, 'script', 'facebook-jssdk'));

</script>
 </body>

<!-- Mirrored from v2.ilanscripti.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 00:32:52 GMT -->
</html>