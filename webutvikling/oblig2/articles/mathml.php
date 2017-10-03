<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>oblig2 - MathML</title>
    <link rel='stylesheet' href='../css/master.css'>
    <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
  </head>
  <body>
    <header>
      <h1>MathML</h1>
    </header>
    <nav>
      <?php
        include("../include/nav.html")
       ?>
    </nav>
    <main>
      <article class='articleFull'>
        <h2>MathML</h2>
        <p>
          MathML er et markup språk som kan brukes på nettsider. Det er ikke en erstatning for standard HTML, men noe som kan brukes i tillegg. Hensikten er å gjøre matematisk innhold i en kode mer semantisk og oversiktlig
        </p>
        <p>
          Historisk sett har mange brukt bilder istedet for tekst til å skrive matematiske formler, siden å gjøre det direkte i html var for tidkrevende. Det fører med seg et par problemer naturligvis. Man utelukker for det første resultater i en søkemotor. Man gjør også at folk som avhenger av for eksempel opplesningsprogrammer, ikke har tilgang til innholdet i det hele tatt. <br />
          Dessuten er det klumsete å bruke et bilde til å sette inn tekst. Man hører det også når man sier det, at det ikke er sånn det skal være.
        </p>
        <p>
          Det burde noteres at MathML er en veldig tungvinn måte å skrive matte på. Og det finnes alternativer som er mer oversiktlige som troff og TeX, heck til og med Unicode kan brukes. Forøvrig støttes ikke MathML i Opera. <br />
          Men av hensyn til oppgaveteksten, la meg vise noen eksempler på MathML kode.
        </p>
        <p data-height="265" data-theme-id="dark" data-slug-hash="rGGKpV" data-default-tab="html,result" data-user="SuYatzy" data-embed-version="2" data-pen-title="math1" class="codepen">See the Pen <a href="https://codepen.io/SuYatzy/pen/rGGKpV/">math1</a> by Martin Sanderhoff (<a href="https://codepen.io/SuYatzy">@SuYatzy</a>) on <a href="https://codepen.io">CodePen</a>.</p>
        <p>
          Koden ovenfor viser et enkelt "regnestykke". Det er brukt noen få ulike tagger her: <br />
          mrow brukes til å gruppere uttryk horisontalt <br />
          msup brukes til å indikere at "child en" skal ha "child to" som eksponent <br />
          mi brukes til identifiers, slik som variabelnavn <br />
          mo brukes til operatorer.
        </p>
        <p data-height="265" data-theme-id="dark" data-slug-hash="Oxxowm" data-default-tab="html,result" data-user="SuYatzy" data-embed-version="2" data-pen-title="math2" class="codepen">See the Pen <a href="https://codepen.io/SuYatzy/pen/Oxxowm/">math2</a> by Martin Sanderhoff (<a href="https://codepen.io/SuYatzy">@SuYatzy</a>) on <a href="https://codepen.io">CodePen</a>.</p>
        <p>
          Dette eksempelet er <em>kremt</em> stjålet fra Wikipedia, men redigert litt. Her ser man at man kan bruke "mfrac" til å lage en brøk. Og man kan bruke "msqrt" til å sette et kvadratrottegn rundt et uttrykk.
        </p>
        <p data-height="265" data-theme-id="dark" data-slug-hash="MEELyR" data-default-tab="html,result" data-user="SuYatzy" data-embed-version="2" data-pen-title="math3" class="codepen">See the Pen <a href="https://codepen.io/SuYatzy/pen/MEELyR/">math3</a> by Martin Sanderhoff (<a href="https://codepen.io/SuYatzy">@SuYatzy</a>) on <a href="https://codepen.io">CodePen</a>.</p>
        <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>        <p>
          Man kan også lage matriser for eksempel ved å lage et "mtable". Resten fungerer som en vanlig html tabell nesten.
        </p>
      </article>
    </main>
    <footer><?php include("../include/footer.html") ?></footer>
  </body>
</html>
