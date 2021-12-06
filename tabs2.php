<?php require_once './assets/inc/header.php' ?>
<?php require_once './version.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Daily Challenges</title>
<?php require_once 'assets/inc/meta.php' ?>
</head>
<body>
<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade active in" id="tab-pane1">
      <h2 id="challenges-header">
        <img id="challenges-header-left" src="./assets/images/header_bg_left.png" alt="">
        <div id="challenges-header-center">
          <span data-text="menu.daily_challenges">Daily Challenges</span>
        </div>
        <img id="challenges-header-right" src="./assets/images/header_bg_right.png" alt=""> 
      </h2>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="tab-pane2">
    ...tab content2...
  </div>
  <div role="tabpanel" class="tab-pane fade" id="tab-pane3">
    ...tab content3...
  </div>
</div>
<!-- End tabs -->

<!-- Select dropdown -->
<select id="floorplanSelect" class="form-control" name="floorplan">
  <option value="tab-pane1">tab1</option>
  <option value="tab-pane2">tab2</option>
  <option value="tab-pane3">tab3</option>
</select>
<!-- End Select -->
<?php require_once 'assets/inc/footer.php' ?>
<script type="text/javascript">
  $('#floorplanSelect').on('change', function(e) {
    $('.tab-pane').removeClass('active in')
    $('#' + $(e.currentTarget).val()).addClass("active in");
  })
</script>
</body>
</html>