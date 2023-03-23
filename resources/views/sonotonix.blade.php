<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="dist/css/tabulator.min.css" rel="stylesheet">
  <script type="text/javascript" src="dist/js/tabulator.min.js"></script>
  <title>Sonotonix</title>
</head>

<body>
  <header>
    <h1>Sonotonix</h1>
    <p>Le meilleur catalogue de sonotones des Internets</p>
    <hr>
  </header>
  <main>
    <div id="data">
      <script>
        let dataTable = new Tabulator(#data, {
          ajaxURL: "http://localhost:8000/api/hearingaids/",
          columns: [{
            title: "Nom",
            field: "name"
          } {
            title: "Référence",
            field: "refnumber"
          } {
            title: "Description",
            field: "description"
          } {
            title: "Prix",
            field: "price"
          }]
        })

        table.setdata(dataTable);
      </script>
    </div>
  </main>
</body>

</html>
