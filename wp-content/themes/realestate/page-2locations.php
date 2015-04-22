<?php
	get_header();
?>
<?php
$i = 0;
$args = array(
    'post_type' 	 => 'locations',
    'posts_per_page' => 20,
    'order'			 => 'asc'
);
$queryRows = get_posts($args);
?>

  <div id="content" class="locationPage bgGray">
    <div class="container pad40">
        <div class="content_page content_detail_new">
            <h2><span>Display Centre Locations</span></h2><br>
            <div class="row">
                <div class="span4">
                    <ul class="list-location">
                        <?php
                        $i = 0;
                        $location_first = array();
                        foreach ($queryRows as $row) {
                            $i++;
                            $location = get_field('google_position',$row->ID);//$location['lat'].$location['lng']

                            if($i==1)
                                $location_first = $location;

                            ?>
                            <li class="location<?php echo $i;?>" lat="<?php echo $location['lat'];?>" lng="<?php echo $location['lng'];?>"><?php echo $row->post_title;?></li>
                        <?php }?>

                    </ul>
                </div>
                <div class="span8">
                    <div id="map-canvas"></div>

                </div>
            </div>
        </div>




  </div>
  <!-- #content-->
    <script>
        $(window).load(function(){
            initializeGoogle( $('.location1') );

            $('.list-location li').click(function(){
                initializeGoogle($(this));
            });
        });

        function initializeGoogle($this) {
            $('.list-location li').removeClass('active');
            $this.addClass('active');
            $lat = parseFloat( $this.attr('lat') );
            $lng = parseFloat( $this.attr('lng') );
            $title = $this.html();

            var mapOptions = {
                zoom: 17,
                center: {lat: $lat, lng: $lng}
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

            var infowindow = new google.maps.InfoWindow();

            var marker = new google.maps.Marker({
                map: map,
                // Define the place with a location, and a query string.
                place: {
                    location: {lat: $lat, lng: $lng},
                    query: $title

                }
            });
        }



    </script>
  </div>
<!-- #wrapper -->
<?php get_footer(); ?>