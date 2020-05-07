<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon app</title>
</head>
<body>

  <h1>Hello,</h1>
  <h2 id="hero"></h2>

  <script type="text/javascript">
    let hero = document.getElementById('hero');
    let getUrl = window.location;
    let protocole = getUrl.protocol;
    let host = getUrl.host;
    let url = `${protocole}//${host}/index.php/infos`;

    fetch(url).then(response => {
      return response.json();
    }).then(json => {
      hero.innerText = json.hero;
    });     

  </script>
</body>
</html>