<?php
    $sitename = "Minecraft Server mieten";
    require_once("./includes/header.php");
    ?>
<div id="header-holder" class="innerpage clouds-bg">
    <div id="top-content" class="container-fluid st-on-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        <div class="title-with-icon">
                            <span class="icon"><img src="images/server4.svg" alt=""></span><span
                                class="text">Minecraft Server
                            Hosting</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sub-pricing container-fluid">
    <div class="container pull-top">
        <?php require("./includes/minecraft-plans.php");?>
        <div class="pricing-button">
            <a href="<?=$BILLING_URL?>/products/minecraft-server/custom/checkout">Hier selber konfigurieren</a>
        </div>
        <?php require("./includes/indi-cta-daily-invoice.php");?>
    </div>
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
                    <div class="feature-title">Premium Hardware.</div>
                    <div class="feature-text">
                        Wir verwenden auf allen unseren Servern Hardware der Enterprise-Klasse. AMD EPYC<sup>™</sup> CPUs, DDR5 ECC RAM und M.2 NVMe SSD-Laufwerke gehören bei uns zum Standard.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="img-holder">
                    <img src="images/feature7.svg" alt="">
                </div>
            </div>
            <div class="col-sm-7 def-aligned">
                <div class="feature-info">
                    <div class="feature-title">Premium Panel.</div>
                    <div class="feature-text">
                        Du wirst nie wieder Probleme haben, deinen Server zu kontrollieren. Unser hervorragendes Kontrollpanel ermöglicht dir die maximale Kontrolle über deinen Server. Außerdem sieht es richtig gut aus.
                    </div>
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
                    <div class="feature-title">Premium Features.</div>
                    <div class="feature-text">
                        Einfache Backup-/Datenbankverwaltung, Mod-/Plugin-Support mit Manager und Ein-Klick-Installation, Audit-Logs, Sub-User, Zeitplanung, smarte Dateisuche und spielspezifische Features.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require_once("./includes/footer.php");
    ?>
