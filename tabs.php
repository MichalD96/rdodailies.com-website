<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabs</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade active in" id="tab-pane1">
    ...tab content1...
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

<script type="text/javascript">
  $('#floorplanSelect').on('change', function(e) {
    $('.tab-pane').removeClass('active in')
    $('#' + $(e.currentTarget).val()).addClass("active in");
  })
</script>
</body>
</html>