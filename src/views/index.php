<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client</title>
</head>
<body>

  <h1>Hi,</h1>
  <h2 id="hero"></h2>

  <script type="text/javascript">
    let hero = document.getElementById('hero');

    fetch('/infos').then(response => {
      return response.json();
    }).then(json => {
      hero.innerText = json.hero;
    });        

  </script>
</body>
</html>