<?php
/* Template Name: Contact */

get_header();

?>
<section class="gmap mb-5">
  <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30305.719946879162!2d-70.64103373791436!3d19.453501255175382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDI3JzEzLjAiTiA3MMKwMzcnMjMuNCJX!5e0!3m2!1sen!2sdo!4v1454011852776" width="100%" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="contact-info">
          <h2>Contactos</h2>
          <ul class="text-left">
            <li>
              <i class="fas fa-phone"></i>
              <p>(809) 736-9042</p>
              <p>(809) 736-2722</p>
              <p>(809) 736–2664</p>
            </li>
            <li>
              <i class="fas fa-at"></i>
              <p><strong>Informaciones</strong> <a href="mailto:info@paneldom.com">info@paneldom.com</a></p>
              <p><strong>Recursos Humanos</strong> <a href="mailto:rrhh@paneldom.com">rrhh@paneldom.com</a></p>
              <p><strong>Ventas</strong> <a href="mailto:ventas@paneldom.com">ventas@paneldom.com</a></p>
            </li>
            <li>
              <i class="fas fa-clock"></i>
              <p><strong>Lunes a Viernes </strong>8:00 am 12:00pm | 1:00 - 6:00 pm</p>
              <p><strong>S&aacute;bados </strong>8:00 am - 12.00 pm</p>
              <p><strong>Domingos </strong>cerrado</p>
            </li>
          </ul>

          <div class="social-icons mt-5">
            <a href="https://www.facebook.com/paneldomrd" target="_blank"><i class="fab fa-facebook-f"></i></a>
			      <a href="https://twitter.com/paneldomrd" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/paneldom/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]') ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer() ?>
