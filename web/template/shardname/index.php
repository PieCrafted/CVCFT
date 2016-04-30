<!doctype html>
<?php require('../config.php'); ?>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/ol.css" type="text/css">
    <link rel="stylesheet" href="css/civmap.css" type="text/css">
    <script src="components/platform/platform.js"></script>
    <link rel="import" href="imports.html">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>CivTemp ShardName</title>
    <link rel="icon" href="/img/favicon.ico">
  </head>
  <body>
  	<style type="text/css">
 .topcorner{
   position:absolute;
   top:0;
   right:0;
    padding-top: 10px;
    padding-right: 10px;
    white-space:nowrap;
  }
</style>
    <core-drawer-panel>

      <core-header-panel drawer>
        <core-toolbar>
          <core-tooltip label="Home" position="right">
            <a href="https://cvcft.com"><img src="img/logo.png"/></a>
          </core-tooltip>
          <core-icon-button icon="home"></core-icon-button>
          <core-tooltip label="Get URL for current view"><core-icon-button icon="link"></core-icon-button></core-tooltip>
          <core-icon-button icon="file-download"></core-icon-button>
        </core-toolbar>

        <layer-toggle>
          <!-- <layer-item name="biomes">Biomes</layer-item>
          <layer-item name="height">Height</layer-item>
          <layer-item name="claims">Land claims</layer-item> -->
          <layer-item name="rails" checked>Rail network</layer-item>
          <layer-item name="cities" checked>Cities</layer-item>
          <layer-item name="abandoned">Inactive cities</layer-item>
          <layer-item name="points">Points of interest</layer-item>
          <!-- <layer-item name="players" checked>Players on snitches</layer-item> -->
          <!-- <layer-item name="civballs"><core-tooltip label="by Soraendo">Civballs</core-tooltip></layer-item> -->
          <!-- <layer-item name="tiles" checked exclusive>JourneyMap</layer-item> -->
</layer-item>
          <!-- <layer-item name="test" exclusive><core-tooltip label="Test data">Test data</core-tooltip> -->
        </layer-toggle>

        <player-list></player-list>
        <div layout>
          <strong>Create features</strong>
          <div>
            <core-icon-button icon="add" add-city>Add city, town, or any other point</core-icon-button>
          </div>
          <div>
            <core-icon-button icon="add" add-rail>Add rail</core-icon-button>
          </div>
          <!--
          <div>
            <core-icon-button icon="create" modify-features>Modify feature mode</core-icon-button>
          </div>
          <div>
            <core-icon-button icon="cloud-upload" create-pr-rails>Rails pull request</core-icon-button>
          </div>
          <div>
            <core-icon-button icon="cloud-upload" create-pr-cities>Points pull request</core-icon-button>
          </div> -->
        </div>

        <paper-shadow z="3"></paper-shadow>
      </core-header-panel>

      <core-header-panel main>
        <core-toolbar hidden>
          <core-icon-button icon="menu"></core-icon-button>
          <div flex>
            <a href="http://reddit.com/r/CVCFT">CivTemp Aleph</a>
          </div>
        </core-toolbar>

        <civ-map id="map"></civ-map>
        <div id="position">

          <?php
            if ($globalAlert != "null") {
              echo "<font color=\"$gAlertColor\">$globalAlert</font>";
            }
          ?>

        </div>
      </core-header-panel>

    </core-drawer-panel>
    <script>
    document.querySelector('core-drawer-panel').addEventListener('core-responsive-change', function(e) {

      document.querySelector('core-header-panel[main] core-toolbar').hidden = !e.detail.narrow;
    });
    document.querySelector('core-header-panel[main] core-icon-button[icon=menu]').addEventListener('click', function() {
      document.querySelector('core-drawer-panel').togglePanel();
    });

    document.querySelector('core-toolbar core-icon-button[icon=link]').addEventListener('click', function() {
      window.location.hash = document.querySelector('civ-map').getZoomHash();
    });
    document.querySelector('core-toolbar core-icon-button[icon=home]').addEventListener('click', function() {
      document.querySelector('civ-map').goHome();
    });
    document.querySelector('core-toolbar core-icon-button[icon=file-download]').addEventListener('click', function() {
      document.querySelector('civ-map').download(this);
    });
    document.querySelector('civ-map').addEventListener('map-players', function(e) {
      document.querySelector('player-list').players = e.detail.sort(function (a, b) {
          return a.toLowerCase().localeCompare(b.toLowerCase());
      });
    });

     document.querySelector('core-icon-button[add-city]').addEventListener('click', function() {
       window.addCity();
     });
     document.querySelector('core-icon-button[add-rail]').addEventListener('click', function() {
       window.addRail();
     });
    // document.querySelector('core-icon-button[modify-features]').addEventListener('click', function() {
    //   window.modifyFeatures();
    // });
    // document.querySelector('core-icon-button[create-pr-rails]').addEventListener('click', function() {
    //   if (window.exportModified) {
    //     window.exportModified('rails');
    //   } else {
    //     alert('Edit some features first.');
    //   }
    // });
    // document.querySelector('core-icon-button[create-pr-cities]').addEventListener('click', function() {
    //   if (window.exportModified) {
    //     window.exportModified('cities');
    //   } else {
    //     alert('Edit some features first.');
    //   }
    // });
    </script>
    <script src="js/civmap.js?cachebust=2016-03-03"></script>
    <div class="topcorner">
      <a href="https://cvcft.com"><img src="/img/mapwm.png" height="40" align="right" style="opacity: 0.5;" /></a><br>
      <p align="right" style="font-size:10px;padding-top:10px;"><?php echo $globalWatermark; ?></a></p>
    </div>
  </body>
</html>
