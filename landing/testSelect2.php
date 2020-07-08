<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Select 2 -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>
<script>
  // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
      $('.js-example-basic-single').select2();
  });
</script>
<style>
    .select2-choices {
  height: 150px !important;
  min-height: 150px !important;
  max-height: 150px !important;
  overflow-y: auto;
  background-color: #f00 !important;
  color: #0F0;
}
body{
    background-color: #f00 !important;
}
</style>
<body>
            <div>
              <select class="js-example-basic-single select2-choices" name="state">
              <option value="AL">Alabama</option>
                ...
              <option value="WY">Wyoming</option>
              </select>
            </div>
</body>
</html>