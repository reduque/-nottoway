<?php
@session_start();
if(empty($_SESSION['token'])) {
    $token = md5(uniqid(rand(), TRUE));
    $_SESSION['token'] = $token;
}else{
    $token = $_SESSION['token'];
}

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nottoway Commons</title>
    <meta name="viewport" content="width=640">
    <meta name="description" content="Nottoway Commons">
    <meta name="author" content="Cacao Digital">

    <link href="css/main.css?v?<?php echo rand(); ?>" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto:300,400,700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="cuerpo">
    <header>
      <a href="" data-ira='.cuerpo' class="logo"></a>
      <nav>
        <div class="menumovil"></div>
        <ul>
          <li><a href="" data-ira='.s2'>Overview</a></li>
          <li><a href="" data-ira='.s4'>Hotels</a></li>
          <li><a href="" data-ira='.s6'>Residences</a></li>
          <li><a href="" data-ira='.s8'>The Commons</a></li>
          <li><a href="" data-ira='.s10'>Business</a></li>
          <li><a href="" data-ira='footer'>Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <div class="fondonegro"></div>

    
    <section class="s1">
      <div>
        <h2>Something truly new is<br>coming to Nottoway!</h2>
      </div>
    </section>

    <section class="s2 parallax">
      <div>
        <img src="img/logo_slogan.svg" alt="Nottoway Commons">
        <p>Strategically located outside Fort Pickett, 45 minutes away from Richmond, Virginia and 3 hours from Washington D.C., Nottoway Commons has been carefully planned to serve the diverse needs of trainees, instructors and private contractors who train and work at the Foreign Affairs Security Training Center (FASTC) in Nottoway County year-round.</p>
        <p>Our installations and facilities also serve the needs of other important communities at Fort Pickett, such as the State Police, VCU, Nottoway County, the Town of Nottoway and visitors who want to be part of this new opportunity.</p>
      </div>
    </section>

    <img src="img/s3.jpg">

    <section class="s4 s_bloques">
        <div class="bloques">
            <div class="bs4_1">
                <h2>A PLACE TO<br>REST AFTER A<br>LONG DAY’S<br>WORK</h2>
                <h3>Nottoway Commons Hotels</h3>
                <p>Our hotels will pamper our guests. Here they may enjoy our gym, lounge and social areas; a perfect place to relax and recharge after a demanding day of work.</p>
                <p>These hotels also cater to the Nottoway County community offering conference rooms and venue halls to service corporate and social events.</p>
            </div>
        </div>
        <div class="bloques">
            <img src="img/s4_1.jpg" ><img src="img/s4_2.jpg">
        </div>
    </section>

    <section class="s5 parallax">
        <div>
            <h2>At Nottoway Commons<br>there is no need to commute<br>or travel distances to enjoy and rest<br>in a quality atmosphere,<br>all in one place.</h2>
        </div>
    </section>


    <section class="s6 s_bloques">
        <div class="bloques">
            <div class="bs6_1">
                <h2>HOME AWAY<br>FROM HOME</h2>
                <h3>Nottoway Commons<br>Residences</h3>
                <p>We have designed contemporary multi-family apartment buildings for short and long term stays. Inspired to meet the needs of FASTC instructors, private contractors, and their families, as well as the surrounding communities. Our apartments make it a home away from home.</p>
                <p>Our walk-up residential buildings provide spacious, comfortable 1 and 2 bedroom apartments, both furnished or unfurnished. </p>
                <p>Nottoway Commons is just minutes from FASTC facilities and steps away from our Commons.</p>
                <h4>TWO BEDROOM (800 SF)</h4>
                <img src="img/s6_m1.svg" alt="TWO BEDROOM (800 SF)" class="m1">
                <h4>ONE BEDROOM (580 SF)</h4>
                <img src="img/s6_m2.svg" alt="ONE BEDROOM (580 SF)" class="m2">
            </div>
        </div>
        <div class="bloques">
            <img src="img/s6_1.jpg" class="noenmobile"><img src="img/s6_2.jpg"><img src="img/s6_3.jpg">
        </div>
    </section>

    <img src="img/s7.jpg">

    <section class="s8 s_bloques">
        <div class="bloques">
            <div class="bs8_1">
                <h2>LET’S MEET AT THE COMMON, A PLACE TO SHOP & ENJOY</h2>
                <h3>The Commons</h3>
                <p>Nottoway Commons is a great space of convergence for shopping, dining and enjoyment, harboring a variety of options in one common place. Our Commons stand in a contemporary, open atmosphere where buildings blend naturally into the landscape.</p>
                <p>We offer an array of options for families and business travelers that complement what Blackstone has to offer today.  </p>
                <p>It is a common point of encounter where they will enjoy the comforts and pleasures of various great eats. From tasty fast food options or sit-down dining, bars, coffee shops, retail shops and much more, all in one beautiful setting and close to the town center.</p>
                <p class="conlinea">Over 88,000 SQ FT<br>Shops, Restaurants & more</p>
            </div>
        </div>
        <div class="bloques">
            <img src="img/s8_1.jpg"><img src="img/s8_2.jpg">
        </div>
    </section>

    <img src="img/s9.jpg" class="noenmobile">

    <section class="s10 s_bloques">
        <div class="bloques">
            <div class="bs10_1">
                <h2>A COMMON PLACE FOR BUSINESS</h2>
                <p>Nottoway Commons will bring over 509,590 sq. ft. of phased business opportunities. </p>
                <p>This complex will offer unique opportunities to develop businesses that cater to the growing demands of the FASTC community, as well as those of Blackstone, Virginia, Nottoway County, and neighboring communities.</p>
                <h3>Nottoway Commons will thrive with key partners in:</h3>
                <ul>
                    <li>
                        <b>Hospitality services:</b> 402 hotel keys/213,000 + sq. ft. will serve hotel guests and visitors.
                    </li>
                    <li>
                        <b>Commercial:</b> Over 57,000 sq. ft. will cater to restaurants, fast food franchises and dining brands.
                    </li>
                    <li>
                        <b>Retail:</b> Over 30,000 sq. ft. of available space.
                    </li>
                    <li>
                        <b>Office:</b> Over 49,000 sq. ft. offering office space for business needs.
                    </li>
                    <li>
                        <b>Maintenance and Storage:</b> Over 24,000 sq. ft. developed for maintenance providers and storage spaces.
                    </li>
                </ul>
                <h4>Contact us for more information. </h4>
            </div>
        </div>
        <div class="bloques">
            <img src="img/s10_1.jpg"><img src="img/s10_2.jpg">
        </div>
    </section>

    <footer>
        <h2>Contact us today</h2>
        <form action="?" onsubmit="return valida(this)">
            <div class="f1">
                <div class="formulario">
                    <input type="hidden" name="token" value="<?php echo $token; ?>">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="phone" placeholder="Phone number">
                    <textarea name="comment" placeholder="Comment" required></textarea>
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.0570091545997!2d-66.84728178555177!3d10.496172267174977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a59ad9499f86b%3A0x472cdddf0c613d80!2sTequilibrio!5e0!3m2!1ses-419!2sve!4v1565393542188!5m2!1ses-419!2sve" width="100%" height="283" frameborder="0" style="border:0" allowfullscreen></iframe>    
                </div>
                <button class="boton">SEND MESSAGE</button>
            </div>
        </form>

        <img src="img/logo_slogan.svg" alt="Nottoway Commons" class="i_f">
        <div class="dir">Toll Free 1.800.809.6882 | info@nottowaycommons.com | Nottoway Commons, LLC | A Planned Community Development</div>
    </footer>

  </div>
  <div class="loading">
      <img src="img/logo.svg">
  </div>


<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/modernizr-3.5.0.min.js"></script>


<script>
var ancho=$('.banner_home2').width();
var b_act=0;

$( document ).ready( function () {
    $( window ).scroll( function () {
        var scrollTop = $( window ).scrollTop();
        winh = $( window ).height();
        $('.parallax').each(function(){
            obj = $(this);
            mitop = obj.offset().top;
            mialto = obj.height();
            if ( ( winh + scrollTop ) > mitop && ( scrollTop - mialto ) < mitop ) {
                aa = winh + mialto;
                if ( aa == 0 ) aa = 1;
                donde = ( mitop - scrollTop - winh ) * mialto / aa;
                donde= donde * 0.3;
                obj.css( "background-position", "center " + donde + "px" );
            }
        })
    });
    $('header a').click(function(evento){
        evento.preventDefault();
        $('header nav ul').removeClass('activo');
        $('html,body').animate({scrollTop:$($(this).data('ira')).offset().top - 87},1000, "easeOutQuad");
    })
    $('.menumovil').click(function(){
        $('header nav ul').toggleClass('activo');
    })
})

function valida(elFRM){
    $('.loading').addClass('activo');
    $.ajax({
        data: $(elFRM).serialize(),
        type: "POST",
        dataType: "json",
        url: "contacto.php",
        success: function(data){
            if(data.enviado=="si"){
                alert('Thanks for writing, we will be contacting you soon');
                elFRM.reset();
            }else{
                alert('Something went wrong, for security the page will be reloaded');
                location.reload();
            }
            $('.loading').removeClass('activo');
        }
    });
    return false;
}
</script>

    
</body>
</html>