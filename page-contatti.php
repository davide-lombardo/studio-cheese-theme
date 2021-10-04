<?php get_header(); ?>

<?php 
    /*
        Template name: Contact page 
    */
?>

  <div class="row text-muted mt-5">
    <div class="col-xs-12 col-md-8 mt-3">
      <div id="mapid"></div>
    </div>
    <div class="col-xs-12 col-md-4 mt-3">
      <section>
        <h6 class="text-uppercase text-start fw-bold">Contatti</h6>
        <p><i class="fas fa-home me-3"></i> Siderno RC, Via Caldara 25</p>
        <p><i class="fas fa-phone me-3"></i>+39 327 946 6434</p>
      </section>

      <section class="col-lg-9 col-md-6 d-flex justify-content-center justify-content-lg-between p-4">
        <div class="me-5 d-none d-lg-block">
          <h6 class="text-uppercase text-start fw-bold">Social</h6>
        </div>
        <div class="">
          <a href="https://www.facebook.com/studiofotocheese" class="me-4 text-reset" target='_blank'>
            <i class="fab fa-facebook-f fa-2x"></i>
          </a>
          <a href="https://www.instagram.com/studiocheese/" class="me-4 text-reset" target='_blank'>
            <i class="fab fa-instagram fa-2x"></i>
          </a>
      </div>
    </section>
    </div>    
  </div>

  <div class="row my-5 mx-5 bg-white p-5">
    <div class="col-12">
      <div class="row">
        <div class="col-12">
          <?php echo do_shortcode('[wpforms id="197"]');?>
        </div>
      </div>
    </div>
  </div>


<script>

    const mymap = L.map('mapid').setView([38.28159470636916, 16.298990691157346], 15);
    const marker = L.marker([38.28159470636916, 16.298990691157346]).addTo(mymap);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1IjoiZmFiaTBwaSIsImEiOiJja24wMWdmczUwODR3Mm9scnN6YzNvZ3R4In0.qnNRbgYMZfBTecqYIYchRQ'
    }).addTo(mymap)

    marker.bindPopup("<b>Studio Cheese!</b><br>Venite a trovarci.").openPopup();

</script>

