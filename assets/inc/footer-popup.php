<!-- ES6 Compatibility Check -->
  <script>function isES6() { try { return eval("() => {};"), !0 } catch (r) { return !1 } } isES6() || alert("This browser might not be fully supported, and errors will likely occur. Please update your browser if you experience issues.");</script>

  <script src="/assets/js-popup/lib/jquery/jquery-<?php echo $jquery; ?>.min.js"></script>
  <script src="/assets/js-popup/lib/bootstrap/bootstrap-<?php echo $bootstrap; ?>.min.js"></script>
  <script src="/assets/js-popup/lib/jquery/jquery.cookie.js"></script>
  <script src="/assets/js-popup/settings.js?nocache=<?php echo $nocache; ?>"></script>  
  <script src="/assets/js-popup/scripts.js?nocache=<?php echo $nocache; ?>"></script>  
  <script src="/assets/js-popup/dailies-rank.js?nocache=<?php echo $nocache; ?>"></script>
  <script src="/assets/js-popup/dailies.js?nocache=<?php echo $nocache; ?>"></script>
  <script src="/assets/js-popup/counters.js?nocache=<?php echo $nocache2; ?>"></script>
  <script src="/assets/js-popup/reload.js?nocache=<?php echo $nocache; ?>"></script>

<!-- Cloudflare 
  <script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "1dd2435f8c794f75b9093a3f1e433f80"}'></script>-->