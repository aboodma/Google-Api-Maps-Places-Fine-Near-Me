<!doctype html>
<html lang="en-US">
  <head>
    <title>Locations Near Me | Google Maps JavaScript API Demo</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <?php include "GetLocations.php"?>

  </head>
  <body>
    <div class="content">
      <h1><img src="assets/images/Logog.png" />GoogleMaps Api Test</h1>
      <p class="disclaimer">This Script Made Just For Test If You Want To use You Should To Have Cradits From <a href="#">Griffin Design</a> <br>
                            This Scriot Made Using <span style="font-weight: bold;">PHP,Jquery,JavaScript,MYSQLI</span> </p>
                            <div class="col-md-12 text-center">
                              <button type="button" data-toggle="modal" data-target="#myModal" name="button">Upload Csv File</button>
                            </div>

                            <div class="" id="response">

                            </div>
                            <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Acente Csv</h4>
      </div>
      <div class="modal-body">
        <form  id="uploadCSV" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="File">CSV Acente File Upload</label>
    <input type="file" class="form-control-file" name="File" id="File">
    <p>Please Select Just Csv File </p>
  </div>
  <div class="form-group">
    <input type="submit" id="submit" name="import" value="Import"   class="btn btn-success">
  </div>
</form>
        </div>
        <div class="modal-footer">

        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

      <form action="#" method="post" >
        <label for="maxRadius">Find locations within
          <input name="maxRadius" id="maxRadius" type="number" value="5" min="1" />
        </label>
        <label for="userAddress"> miles of
          <input name="userAddress" id="userAddress" type="text" placeholder="Your Address" value="Samanyolu Sk. Maltepe İstanbul"/>
        </label>
        <button id="submitLocationSearch">Search</button>
      </form>

      <h2 id="location-search-alert">All Locations</h2>

      <div id="locations-near-you-map"></div>

      <div id="locations-near-you"></div>

      <script defer src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyBIBaRCMnXgkZ31IXN3M4R6KUbA0PXzbGk&callback=createSearchableMap"></script>
      <script src="createSearchableMap.js"></script>
      <script src="assets/js/bootstrap.min.js" ></script>
      <script src="assets/js/bootstrap.bundle.min.js" ></script>
    <script src="assets/js/form.js" charset="utf-8"></script>
    </div>
  </body>
</html>
