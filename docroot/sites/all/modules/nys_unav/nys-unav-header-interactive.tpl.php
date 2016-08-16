<?php

/**
 * @file
 * New York State Universal Navigation Interactive Header iFrame embed code.
 *
 * See https://github.com/ny/universal-navigation for latest version.
 *
 * Variables:
 * - none.
 *
 * @ingroup themeable
 */
?>
<!-- uNav interactive header -->
<div id="nygov-universal-navigation" class="nygov-universal-container" data-iframe="true" data-updated="2014-11-07 08:30">
  <noscript>
    <iframe width="100%" height="86px" src="//static-assets.ny.gov/load_global_menu/ajax?iframe=true" frameborder="0" style="border:none; overflow:hidden; width:100%; height:86px;" scrolling="no">
      Your browser does not support iFrames
    </iframe>
  </noscript>
  <script type="text/javascript">
    var _NY = {
      HOST: "static-assets.ny.gov",
      BASE_HOST: "www.ny.gov",
      hideSettings: false,
      hideSearch: false
    };
    (function (document, bundle, head) {
      head = document.getElementsByTagName('head')[0];
      bundle = document.createElement('script');
      bundle.type = 'text/javascript';
      bundle.async = true;
      bundle.src = "//static-assets.ny.gov/sites/all/widgets/universal-navigation/js/dist/global-nav-bundle.js";
      head.appendChild(bundle);
    }(document));
  </script>
</div>
<!-- end uNav interactive header -->
