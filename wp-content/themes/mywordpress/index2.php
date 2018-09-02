<?php get_header();?>
<?php 
if(have_posts()):
	while(have_posts():the_post();)?>
	<h3><?php the_title();?></h3>
	<p><?php the_content();?></p>
<?php endwhile;
endif;
?>
<div class="banner">
	<img alt="Brand" class="image" src="images/truck2.jpg">
</div>
<div class="warning">
	<div class="container padding">
		<div class="row">
			<div class="col-lg-2 col-sm-2">
				<img class="img-responsive triangle" src="images/blue.jpg">
			</div>
			<div class="col-lg-8 col-sm-8">
				<h2 class="center">FRAKT AV CONTAINERE</h2>
				<h3 class="centerbottom">Farlig gods merking av intermodale containere</h3>
			</div>
			<div class="collg-2 col-sm-2">
				<img class="img-responsive triangle" src="images/red.jpg">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-sm-6">
			<div class="para-right">
			<div class="para">
			<h3 class="greentext">Vacuro-Genialt enkelt!!!</h3>
			<p>Med Vacuro's patenterte holdere for faresedler gar merking av containere med farlig gods lekende lett<br>
			Limfrie faresedler settes inn og tas ut av holderne i en handvending
			<h4>Systemet gir derfor transportorer</h4>
			<ul>
                        <li>Tidsbesparelse</li>
                              <li>Kostnadsbesparelse</li>
                              <li>Sikrere merking</li>
                              <li>Miljøgevinst</li> 
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-sm-6">
              	<div class="para">
              		<h3 class="greentext">Hvorfor Vacuro?</h3>
              		<p><span class="shorttext">Vacuro</span>er satt sammen av to ord fra latin</p>
              		<p><span class="shorttext">Vacu</span>,som betyr:<strong>"vaere tom"</strong>"vaere leding" "vaere apen" Vacu beskriver selve merkeholderen-merkeholderne har ledig plass for a sette inn faresedler</p>
              		<p><span class="shorttext">Curo</span>, som betyr: <strong>“gli lett”</strong>, “ta seg av”, “sørge for å finne”. Curo beskriver funksjonen til merkeholderen – merkeholderne sørger for at faresedler glir svært enkelt inn og ut av holderen.</p>
              	</div>
              </div>
          </div>
          <hr>
      </div>
  </div>
  <?php getfooter();?>

