<?php require_once '../assets/inc/header.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Red Dead Online Free Mode Events Schedule</title>
    <meta name="description" content="Timetable of RDR2 Online free-roam/role events, customised to your local time zone" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="/assets/css/lib/bootstrap/bootstrap-<?php echo $bootstrap; ?>.min.css" />
  <link rel="stylesheet" href="/assets/fonts/fonts.css?nocache=<?php echo $nocache; ?>" />
  <link rel="stylesheet" href="/assets/css/styles.css?nocache=<?php echo $nocache; ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> 
   <link rel="stylesheet" href="/assets/fonts/fonts.css" />
  </head>
  <body class="dark">
    <main class="wrapper">
      <h2>Red Dead Online Event Schedule</h2>

      <p>Next Free Roam Event:
        <b class="next-role-event-rdo"  id="next-fr-event-name"></b> at <b class="next-role-event-rdo" id="next-fr-event-time"></b> starts in <span id="next-fr-event-eta"></span></p>
      <br />
      <p>Next Role Event: <b class="next-role-event-rdo" id="next-role-event-name"></b> at
        <b class="next-role-event-rdo" id="next-role-event-time"></b>  starts in <span id="next-role-event-eta"></span></p>
   
      <p>All times are in your local time zone<span id="locale"></span>,
        according to your device's locale settings</p>
      <noscript>
        <p class="warning browsehappy">Please enable JavaScript to view the timetable</p>
      </noscript>
      <section class="schedule-wrapper">
        <section>
          <h2>Free-roam schedule</h2>
          <div id="free-roam-schedule" class="schedule"></div>
          <p><strong>*</strong><small>Random events include Horseback Kills, Headshot Kills, Bow Kills, Longarm Kills, Sidearm Kills, Wild Animal Kills or Fishing</small></p>
        </section>
        <section>
          <h2>Role schedule</h2>
          <div id="role-schedule" class="schedule"></div>
        </section>
      </section>
    </main>
    <script src="fme_rdodailies.js"></script>
    <script src="main.js"></script>
<?php require_once '../assets/inc/donate-form-fme-popup.php' ?>
<!-- ES6 Compatibility Check -->
  <script>function isES6() { try { return eval("() => {};"), !0 } catch (r) { return !1 } } isES6() || alert("This browser might not be fully supported, and errors will likely occur. Please update your browser if you experience issues.");</script>

  <script src="/assets/js/lib/jquery/jquery-<?php echo $jquery; ?>.min.js"></script>
  <script src="/assets/js/lib/bootstrap/bootstrap-<?php echo $bootstrap; ?>.min.js"></script>
  <script src="/assets/js/lib/jquery/jquery.cookie.js"></script>
  <script src="/assets/js/popup-modal.js?nocache=<?php echo $nocache; ?>"></script>

<!-- Cloudflare -->
  <script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "1dd2435f8c794f75b9093a3f1e433f80"}'></script>
  </body>
</html>
