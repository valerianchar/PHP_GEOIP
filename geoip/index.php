
<!DOCTYPE html>
<html>
<head>
  <title>BaBiDiBou</title>
</head>
<body>
    <div id="wrap">
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="fichiercsv.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name
                        <legend>J'en ai ma claque</legend>
                        File Button
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                            Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="btn_import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="btn_export" class="btn btn-primary button-loading" data-loading-text="Loading...">export</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>