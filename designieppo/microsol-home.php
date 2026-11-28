<?php
/*
Template Name: microsol-home
Theme URI: 
Description: Index
Version: 1.0
Author: EP
Author URI:
Tags:
*/

if ( ! get_progetti ($progetti, $myquery, $myerror, false, false)) {
   microsol_error ($myerror);
}

# seleziona info generali
get_stime_microsol ($informazioni, $myquery, $myerror);

# seleziona ultimo prestatore
get_last_loaner($lastloaner, $myquery, $myerror);

$ultimoprestitofoto_img = get_template_directory_uri().'/img/foto_anonimo.jpg';
$ultimofinanziatore='da:<br>'.$lastloaner[0]->anomedi;
$afavoredi=$lastloaner[0]->richiedente;
$lastprogetto=$lastloaner[0]->progetto;
$id_lastprogetto=$lastloaner[0]->id_progetto;
$ultimadata_prestito=$lastloaner[0]->data_prestito;
$ultimocommento=$lastloaner[0]->commento;
if ($lastloaner[0]->pubblica && file_exists( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'microsol-uploads' . DIRECTORY_SEPARATOR . 'IMGprofilo_'.$lastloaner[0]->id_portafoglio.'.jpg'  )) {
    $ultimoprestitofoto_img = get_template_directory_uri().'/microsol-uploads/IMGprofilo_'.$lastloaner[0]->id_portafoglio.'.jpg';
}





get_header();
$_SESSION['PRESTA']='SI';
?>



<!-- <body>  -->


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M33CJMQ6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php include "navigation.php"; ?>

<div class="container">
    
    
    <div class="row">
        <div class="col-xs-12   col-sm-4  col-md-3 col-lg-3" >
            
            <div id="masthead" class="site-header" role="banner">
            <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' )                 ); ?>" 
			rel="home">	
            <img src="<?php echo microsol_uploadpath() ?>/2018/05/logo4.jpg" alt="logo">
            <h1 class="site-description"><?php bloginfo( 'description' ); ?></h1>
            </a>
               
                            
            </div> <!-- masthead --> 
            
        </div> 
        
        <div class="col-xs-12   col-sm-8  col-md-6 col-lg-6" >
            
                           
				         
            
        
        <!--     <div id="slider">   
                <?php
            echo do_shortcode("[huge_it_slider id='1']"); ?>

				

	
        </div>  -->



<!--end slider-->	
            
            
              
            
   </div>   
        
 
        <div class="col-xs-12   col-sm-12  col-md-3 col-lg-3" >
            
           
    
  </div>    
    
        </div>
        
        
        <div class="row">
        <div class="col-xs-12   col-sm-4  col-md-3 col-lg-3" >
            
 
			
    
 

  
     <div class="report" >
                
                      modifica sabato 19.58
            <h3>"Per me nascere e crescere in una comunità rurale è stata una benedizione.
<br><br>
			 Ringrazio la Cooperativa perchè sostiene il lavoro nei campi"
			<br></h3>
			
			<br><br>
			<img src ="https://microsol-onlus.org/wp-content/uploads/2025/11/Cergio-1.jpg" width="150" alt="Contadino">
			<br>
			<i>Cergio Moreno Gutierrez</i><br>Nicaragua<br><br>
			<br>

<h4>Partecipare al Microcredito Solidale significa sostenere queste persone.</h4>
<h5>Resistere ai cambiamenti climatici.<br>
<br>Ottenere condizioni dignitose di accesso al mercato.<br>
<br>Promuovere la collaborazione, la solidarietà, la sobrietà.
<br></h5>

				
			
			
			
			<div class="report">
			
			
			
			
				
			
       
			</div>
              
			  
1<b class="glyphicon glyphicon-chevron-right"></b> <h5>Un piccolo imprenditore:</h5> necessita microcredito   <br>
2<b class="glyphicon glyphicon-chevron-right"></b> <h5>Insieme lo finanziamo</h5>     
3<b class="glyphicon glyphicon-chevron-right"></b> <h5>L'attività può realizzarsi </h5> 
4<b class="glyphicon glyphicon-chevron-right"></b> <h5>Il microcredito viene restituito: </h5>decidi se partecipare ad una nuova richiesta <br>
<br> 

<br>


         
          <input type="button" class="btn btn-success" onClick='location.href="https://microsol-onlus.org/microsol-scelta-progetto"' value='Vedi richieste in corso'>
            <br> 
              <br><br>
			  
			    
         
         
         
         
         
<hr>            
            
         <b><?php echo $informazioni[0]->numero_partecipanti ?></b><a href="https://microsol-onlus.org/microsol-partecipanti/"> persone  </a>
		 hanno effettuato 
		 
		  <b><?php echo number_format($informazioni[0]->numero_prestiti_effettuati,0,',','.') ?></b>
            <a class="glyphicon" data-toggle="tooltip" data-placement="top"  title="somma del denaro prestato, restituito e riprestato per un nuovo ciclo" > 
                 microcrediti  per un totale di: </a><b><?php echo number_format($informazioni[0]->importo_totale_prestato,0,',','.') ?></b> &euro; 
                <br>
		 
		 
            
         
         <br>E' stato possibile              
         
          finanziare 
                <b><?php echo number_format($informazioni[0]->numero_progetti_finanziati,0,',','.') ?></b>
         
         richieste di microcredito!
         <br><br>
         
         
         
         
               
         <hr>
        
            
        
              
                <div class="report" >Ultimo microcredito il  <?php echo $ultimadata_prestito ?> 
                da
                    <a href="<?php echo site_url().'/microsol-profilo_partecipante?id_portafoglio='.$lastloaner[0]->id_portafoglio ?>">	
                       
                       <?php echo $ultimofinanziatore ?></a>
                    <br>
                    <img src="<?php echo  $ultimoprestitofoto_img ?>  "   width='90' alt='' >
                    
                    <br>
                    per:
                    <br> <?php echo $afavoredi ?> 
                       
                       
                
                     
                <br> per realizzare: <a href="<?php echo site_url().'/microsol-dettaglio?id_progetto='.$id_lastprogetto ?>"><?php echo $lastprogetto ?></a>
                   <br>
                    
                     
                    <i>"<?php echo $ultimocommento ?>"  </i>
					
					
         <br>
         <hr>
				 
		 
             <br>   
         
                  
                     Il <b>92,4 %</b> dei prestiti forniti ai partner nei vari paesi sono stati restituiti. <br>
					 <br> Abbiamo 79.485 € impiegati attualmente in microcrediti.<br><br>
					 Dati aggiornati il :14 Genn. 2025.
         
                
            <hr>
					
                    
                </div>
            
            
           
        </div><!--end report-->	
          
      
        
      </div><!--end col-->	
      
      
       
      
      
   
  



        
        <div class="col-xs-12   col-sm-8  col-md-6 col-lg-6" >
            
                    

        <!-- Div centrale lista beneficiari -->
        
        
	      
        <?php foreach( $progetti as $myrow ) {	
            $testo='';
            $perc=round($myrow->tot_prestato / $myrow->importo_richiesto, 2)*100;
            $mancante=$myrow->importo_richiesto - $myrow->tot_prestato;
            $url_dona=site_url().'/microsol-prestito?id_progetto='.$myrow->id_progetto;
            $progressclass='progress-bar progress-bar-warning progress-bar-striped';
            $progresstext=$perc.'%';
            if ($mancante < 1) {
                $progressclass='progress-bar progress-bar-success progress-bar-striped';
                $progresstext='Finanziato';
            }
            if (is_user_logged_in()) {
                    $redirect=$url_dona;
            } else {
                    $redirect= './microsol-login?id_progetto='.$myrow->id_progetto;
            }
            
            #recupero profilo ultimo sostenitore
            $myquery = 'SELECT id_portafoglio, nome, cognome,  pubblica FROM micro_portafoglio WHERE id_portafoglio="'.$myrow->lastid_profilo.'"';
            $mypartecipante = $wpdb->get_results($myquery);
            if ($wpdb->last_error) {
                microsol_error ($wpdb->last_error, 'HOME');
            }
            $foto_img = get_template_directory_uri().'/img/foto_anonimo.jpg';
            if ( ($mypartecipante[0]->pubblica) && file_exists( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'microsol-uploads' . DIRECTORY_SEPARATOR . 'IMGprofilo_'.$mypartecipante[0]->id_portafoglio.'.jpg') ) {
                $foto_img = get_template_directory_uri().'/microsol-uploads/IMGprofilo_'.$mypartecipante[0]->id_portafoglio.'.jpg';
            }

            if (! $mypartecipante[0]->pubblica || $mypartecipante[0]->nome === 'Anonimo') {
              //  $mypartecipante[0]->nome='An';
                 //$mypartecipante[0]->cognome='';
             }
             $testo= $mypartecipante[0]->nome; //.' '.$mypartecipante[0]->cognome;
        ?>
            
           
            <a href="<?php echo site_url().'/microsol-dettaglio?id_progetto='.$myrow->id_progetto ; ?>"> <img class='img_beneficiari'
			alt='foto beneficiario' src='<?php echo microsol_uploadpath() ?>/<?php echo $myrow->file_img ?>' ></a>
        <div class='div_beneficiari'>
            <a href="<?php echo site_url().'/microsol-dettaglio?id_progetto='.$myrow->id_progetto ; ?>"> <p class='nome_benef'>
			<?php echo $myrow->nomerichiedente." ".$myrow->cognomerichiedente ?></p></a>
            
             <p class='desc_prog'><strong>Et&agrave; </strong><?php echo ($myrow->eta > 1)?$myrow->eta:'n.d.' ?> </p>

    <p class="desc_prog"> <strong>Attività da realizzare: </strong><?php echo $myrow->progetto ?> </p>	

           
            <p class='desc_prog'><strong>Luogo: </strong><?php echo $myrow->localita ?> </p>
			<br>
       
      
     <img  src='<?php echo microsol_uploadpath() ?>/<?php echo $myrow->nazione ?>' alt='bandiera nazione'>
                  
       
       <br>
    
            
            
            <p class='desc_prog'><strong>Valore richiesto: &#8364;</strong><?php echo number_format($myrow->importo_richiesto,0,',','.') ?></p>
            <p class='desc_prog'><strong>Occorrono ancora: &#8364;</strong><?php echo number_format($mancante,0,',','.') ?></p>
            <br>
            
             
            <div class="progress">
                <div class="<?php echo $progressclass ?>" role="progressbar" aria-valuenow="<?php echo $perc ?>" aria-valuemin="0" aria-valuemax="100"
				style="width:<?php echo $perc ?>%">
                <?php echo $progresstext ?> 
                </div>
            </div>
            
            
              
            <?php if ($mancante > 0 ) { ?>
                    <input type="button" class="btn btn-success" onClick='location.href="<?php echo $redirect ?>"' value="Sostieni  
					<?php echo $myrow->nomerichiedente ?>	
					">
            <?php } else { ?>
                <p><br></p>
            <?php }  ?>
                  
            <br><br>
            <p class='desc_prog'><strong>Restituzione prevista il: </strong> <?php echo $myrow->data_restituzione_prestito ?>
                
                
               </p>
         
                  
            <br>  <br>
              
         
                
                
                
            <p><strong>Finanziato da:</strong>
               
					  
					  
					 <a href="<?php echo site_url().'/microsol-profilo_partecipante?id_portafoglio='.$mypartecipante[0]->id_portafoglio ?>" >
              <?php echo $testo ?> </a>   
				 <img src="<?php echo $foto_img ?>" width="50"  alt='ultimo partecipante'>
				 e altre 
                <a href="<?php echo site_url().'/microsol-dettaglio?id_progetto='.$myrow->id_progetto ?>">
                      <?php echo $myrow->n_prestiti ?> persone </a>
            </p>
            
            <p class='desc_prog'><strong>Partner che gestisce sul posto: </strong><?php echo $myrow->partner ?>
                
                <br> <a href="https://microsol-onlus.org/wp/microsol-partner/">scheda partner </a></p>
                
                
                   <input type="button" class="btn btn-info btn-sm" onClick='location.href="<?php echo site_url().'/microsol-dettaglio?id_progetto='.$myrow->id_progetto ;
				   ?>"' value='altre info'>
                <br>
            <br>
            
            
	</div><!--end img_beneficiari-->		
            
        
          
        <br>
        <?php } ?>	
    			
            
            
        </div><!--end col-->	
        
        <div class="col-xs-12   col-sm-12  col-md-3 col-lg-3 " >

   
            <br>
            <br>
          <style>.pp-VJKG6NKWJJWQ2{text-align:center;border:none;border-radius:0.25rem;min-width:11.625rem;padding:0 2rem;height:2.625rem;font-weight:bold;background-color:
	#FFD140;color:#000000;font-family:"Helvetica Neue",Arial,sans-serif;font-size:1rem;line-height:1.25rem;cursor:pointer;}</style> 
<form action="https://www.paypal.com/ncp/payment/VJKG6NKWJJWQ2" method="post" target="_top" style="display:inline-grid;justify-items:center;align-content:start;gap:0.5rem;">
  <input class="pp-VJKG6NKWJJWQ2" type="submit" value="Partecipa con solo 5 €" >
  
</form>
       <!--     
            
           <div id="slogan">
               
          
<div id="carousel-example-generic" class="carousel slide" data-interval="10000" data-ride="carousel">
-->
  <!-- Indicators -->
    
    <!--
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    
  </ol>  -->

  <!-- Wrapper for slides -->
       
                  
    <!--             
         
          
<br><br><br>
                  
  <div class="carousel-inner" role="listbox">
      
    <div class="item active">
      <img src="https://microsol-onlus.org/wp-content/uploads/2017/10/Tolstoi-LAV.jpg" alt="Tolstoy">
      <div class="carousel-caption">
        <h5><br>Tutti pensano a cambiare il mondo, ma nessuno pensa a cambiare se stesso</h5>
          <p>Lev Tolstoy</p>
      </div>
    </div>   
      
      
      <div class="item">
      <img src=" https://microsol-onlus.org/wp-content/uploads/2017/05/don-Pino-P.jpg" alt="Don Pino Puglisi">
      <div class="carousel-caption">
        <h5>Se ognuno fa qualcosa allora si può fare molto</h5>
          <p>Don Pino Puglisi</p>
      </div>
    </div>                
                  
         
  
    <div class="item ">
      <img src="https://microsol-onlus.org/wp-content/uploads/2012/11/P1000304.jpg" alt="...">
      <div class="carousel-caption">
        <h5>Molta gente piccola in luoghi piccoli, facendo piccole cose, può cambiare il mondo</h5>
          <p>Edoardo Galeano</p>
      </div>
    </div>
    <div class="item">
      <img src="https://microsol-onlus.org/wp-content/uploads/2015/12/camino.jpg" alt="...">
      <div class="carousel-caption">
          <h4>Sii il cambiamento che vuoi vedere nel mondo</h4>
          <p>Ghandi</p> 
          
        
      </div>
    </div>

  </div><!end carousel-->
 
           

               
  <!--    <div class="report">      
  <script>(function(t,e,s,n){var o,a,c;t.SMCX=t.SMCX||[],e.getElementById(n)||(o=e.getElementsByTagName(s),a=o[o.length-1],c=e.createElement(s),c.async=!0,c.id=n,c.src=["https:"===location.protocol?"https://":"http://","widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgdzmfLfqxAD_2ByTRzvsF5WOCrVkjHru23LpZrGfT7MkrcE.js"].join(""),a.parentNode.insertBefore(c,a))})(window,document,"script","smcx-sdk");</script><a style="font: 12px Helvetica, sans-serif; color: #999; text-decoration: none;" href="https://it.surveymonkey.com"> Crea la tua indagine per il feedback degli utenti </a>
    
      </div>  -->

		
	    
           
            
       <div class="report" >
            <p>Nessun socio/a di Micro Sol è retribuito: il 100% di quanto ci affidi è realmente usato per
			dare microcredito.<br><br> Le spese di gestione sono molto basse grazie al volontariato.</p>
			
			
			<hr>
			 <img src ="https://microsol-onlus.org/wp-content/uploads/2023/03/img.jpg" width="250" alt="5 per mille"> 
			  <br><br>
			
			








			
         </div> 
            <br>
				<?php 
				echo do_shortcode ("[mc4wp_form id='7452']") ; ?>
            
            <div class="report" >
            <p>Destinando al microcredito il 5 per mille nella dich. dei redditi molte persone possono lavorare concretamente: CF 91059290121 Micro Sol Onlus</p>
         </div> 


<!-- Begin MailChimp Signup Form 
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" >

<div id="mc_embed_signup">
<form action="https://microsol-onlus.us16.list-manage.com/subscribe/post?u=214a497926f9202c5d1b33d76&amp;id=d6d5267263" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
	
	
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	<!--
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_214a497926f9202c5d1b33d76_d6d5267263" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

End mc_embed_signup  --> 

            
           
        <br>
             <div class="report" >
                 <h4> Micro Sol effettua dei microcrediti anche tramite Kiva <a href="https://www.kiva.org/team/micro_sol_italia">Team Micro Sol</a></h4>
                 <br>
                    <a class="glyphicon" data-toggle="tooltip" data-placement="top"  title=" Utlizzando la piattaforma di Kiva individuiamo delle richieste
					che vogliamo sostenere. Finanziamo competamente o in parte la richiesta e poi la proponiamo sul nostro sito per raccogliere le adesioni. " > 
                 Come prestiamo in Kiva? </a> 
        
         
            </div>
            
            
            
            
            <br>
            
            
            
          
            
           
        
  
            
        </div><!--end col-->	
       

        
        
        
    </div><!--end row-->	
    
    
</div><!--end container-->	




<?php get_footer(); ?>
        



	

	
	


<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
	
	<!--Start Cookie Script--> <script  src="https://chs03.cookie-script.com/s/448b1717f8b0b1c4fdb5c9e3b405f33f.js"></script> <!--End Cookie Script-->
