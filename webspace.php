<?php
   $sitename = "Webspace mieten";
   require_once("./includes/header.php");
   ?>
<div id="header-holder" class="innerpage clouds-bg">
   <div id="top-content" class="container-fluid st-on-top">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="page-title">
                  <div class="title-with-icon">
                     <span class="icon"><img src="images/server1.svg" alt=""></span><span class="text">Webspace</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="sub-pricing container-fluid">
   <div class="container pull-top">
      <div class="row">
         <div class="col-xs-12">
            <div class="info-text">
            Wir bieten leistungsstarkes Webhosting auf blitzschnellen, zuverlässigen und hochleistungsfähigen dedizierten Servern mit dem Plesk Control Panel. NGINX ist bei uns Standard, dadurch heben wir uns in Sachen Leistung und Zuverlässigkeit von der Konkurrenz ab!            </div>
         </div>
      </div>
<?php
require("includes/webspace-plans.php");

require("includes/indi-cta-daily-invoice.php");
?>
   </div>
</div>
<div class="features container-fluid">
   <div class="container">
      <div class="row rtl-row">
         <div class="col-sm-5">
            <div class="img-holder">
               <img src="images/feature4.svg" alt="">
            </div>
         </div>
         <div class="col-sm-7">
            <div class="feature-info">
               <div class="feature-title">Hosting für jede Website</div>
               <div class="feature-text">Wir setzen bei unserem Webhosting auf Markenhardware von HP<sup>®</sup> und Dell<sup>®</sup> in Unternehmensqualität. Damit bieten wir dir die beste Leistung für dein Geld!            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-5">
            <div class="img-holder">
               <img src="images/feature5.svg" alt="">
            </div>
         </div>
         <div class="col-sm-7 def-aligned">
            <div class="feature-info">
               <div class="feature-title">Hohe Sicherheit</div>
               <div class="feature-text">Unsere Server sind mit bis zu 2 TB/s gegen DDoS-Attacken geschützt. Außerdem werden unsere Server 24/7 durch intelligente Systeme überwacht.</div>
            </div>
         </div>
      </div>
      <div class="row rtl-row">
         <div class="col-sm-5">
            <div class="img-holder">
               <img src="images/feature6.svg" alt="">
            </div>
         </div>
         <div class="col-sm-7">
            <div class="feature-info">
               <div class="feature-title">Einfache Domain Integration</div>
               <div class="feature-text">Die Domain verbindet sich automatisch mit dem Webhosting, wenn du diese mit der gleichen Bestellung erworben hast. Wenn du später oder von einem anderen Händler eine Domain erworben hast, kannst du diese sehr einfach oder mit der Hilfe unseres Supports verbinden.</div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-5">
            <div class="img-holder">
               <img src="images/feature2.svg" alt="">
            </div>
         </div>
         <div class="col-sm-7 def-aligned">
            <div class="feature-info">
               <div class="feature-title">In Eile? Los gehts!</div>
               <div class="feature-text">Jetzt geht’s los! Keine Zeit zu verlieren, denn dein Webspace ist in maximal 24 Stunden startklar!<sup>2</sup></div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php
   require_once("./includes/footer.php");
   ?>