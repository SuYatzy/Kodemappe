<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Regler</title>
    <script type='text/javascript' src='script/main.js'></script>
    <link rel='stylesheet' href='main.css'>
  </head>
  <body>
    <header>
      <h1>Regler</h1>
      <article id='introduction'>
        <p>
          Denne nettsiden er et spill som blir laget fra bunnen av brukerne. For å påvirke utviklingen av dette spillet skriver man et forslag til en regel i formen under. En regel kan være hva enn man ønsker så lenge det er mulig for meg å implementere. Jeg er på et begynnernivå, så det er selvfølgelig mange begrensinger på hvor fort regler blir tatt i bruk.
        </p>
        <p>
          Et forslag til en god regel hadde vært et fargeskjema. Grått er veldig kjedelig.
        </p>
      </article>
    </header>
    <main>
      <form action='proposeRule.php' method='post' id='suggest'>
        <input type='text' id='inputNewRule'>
        <input type='submit' id='btnSubmit' value='Foreslå regel'>
      </form>
    </main>
    <hr>
    <article id='rules'>
    </article>
  </body>
</html>
