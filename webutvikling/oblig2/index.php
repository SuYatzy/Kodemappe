<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>oblig2</title>
    <link rel='stylesheet' href='css/master.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/c8d6ad2f6c.js"></script>
  </head>
  <body>
    <header>
      <h1>Obligatorisk Oppgave 2, Webutvikling</h1>
    </header>
    <nav>
      <?php
        include("include/nav.html")
       ?>
    </nav>
    <aside class='cal'>
      <span>
        <h3>Mandag</h3>
        <strong>Øvingstimer</strong> 08:00 - 12:00 <br />
        <strong>Støttetimer</strong> 12:15 -  14:00<br />
        <strong>Webutvikling</strong> 14:15 -  16:00<br />
      </span>
      <span>
        <h3>Tirsdag</h3>
        <strong>Infprog</strong> 08:15 - 10:00 <br />
        <strong>Øvingstimer</strong> 10:15 - 15:00 <br />
      </span>
      <span>
        <h3>Onsdag</h3>
        <strong>Øvingstimer</strong> 08:15 - 12:00 <br />
        <strong>Webutvikling</strong> 02:15 - 14:00 <br />
        <strong>Infprog</strong> 14:15 - 16:00 <br />
      </span>
      <span>
        <h3>Torsdag</h3>
        <strong>Øvingstimer</strong> 08:15 - 10:00 <br />
        <strong>Støttetimer</strong> 10:15 - 12:00 <br />
        <strong>Øvingstimer</strong> 12:15 - 14:00 <br />
      </span>
      <span>
        <h3>Fredag</h3>
        <strong>Webutvikling</strong> 09:15 - 11:00 <br />
        <strong>Øvingstimer</strong> 11:15 - 16:00 <br />
      </span>
    </aside>
    <aside class='info'>
      <span>
        <h3>Nyheter:</h3>
        <p>
          MathML-artikkel ute
        </p>
        <p>
          GitHub-artikkel ute
        </p>
        <p>
          SVG-artikkel ute
        </p>
        <p>
          Alle mine prosjekter er nå tilgjengelige på GitHub
        </p>
        <p>
          Nettsiden ble laget
        </p>
      </span>
      <span>
        <h3>Innleveringer:</h3>
        <i class="fa fa-square-o"></i><strong>Webutvikling</strong> 4. Oktober<br />
        <i class="fa fa-check-square-o"></i><strong>Infprog</strong> 4.Oktober
      </span>
    </aside>
    <main class='previewWrapper'>
      <article class='articlePreview'>
        <a href='articles/mathml.php'>
          <h2>MathML</h2>
          <p>
            MathML er et markup språk som kan brukes på nettsider. Det lar deg skrive inn matematiske formler
            <i class='fa fa-chevron-down'></i>
          </p>
        </a>
      </article>
      <article class='articlePreview'>
        <a href='articles/svg.php'>
          <h2>SVG</h2>
          <p>
            SVG er vektorgrafikk som støttes av alle moderne nettlesere. Det tar lite plass og kan manipuleres med CSS.
            <i class='fa fa-chevron-down'></i>
          </p>
        </a>
      </article>
      <article class='articlePreview'>
        <a href='articles/git.php'>
          <h2>GitHub</h2>
          <p>
            GitHub er en tjeneste som lar deg lagre prosjektene dine online, slike at man får publisity.
            <i class='fa fa-chevron-down'></i>
          </p>
        </a>
      </article>
      <article class='articlePreview'>
        <a href='http://ask.hiof.no/~martisf/infprog/oblig2/'>
          <h2>Infprog Oblig 2</h2>
          <p>
            Obligatorisk oppgave 2 i innføring i programmering er ferdig. Denne gangen med alle ekstraoppgavene også.
            <i class='fa fa-chevron-down'></i>
          </p>
        </a>
      </article>
      <article class='articlePreview'>
        <a href='http://ask.hiof.no/~martisf/infprog/oblig1/'>
          <h2>Infprog Oblig 1</h2>
          <p>
            Obligatorisk oppgave 1 i innføring i programmering er ferdig.
            <i class='fa fa-chevron-down'></i>
          </p>
        </a>
      </article>
      <article class='articlePreview'>
        <a href='http://ask.hiof.no/~martisf/webutvikling/oblig1/oppgave1.html'>
          <h2>Webutvikling Oblig 1</h2>
          <p>
            Obligatorisk oppgave 1 i webutvikling er ferdig. Her er det litt informasjon om webservere, FTP og domener. Altså grunnleggende shit man burde kunne som webutviklere.
            <i class='fa fa-chevron-down'></i>
          </p>
        </a>
      </article>
    </main>
    <footer><?php include("include/footer.html") ?></footer>
  </body>
</html>
