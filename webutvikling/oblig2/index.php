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
        <strong>Infprog</strong> 12:15 -  14:00<br />
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
        <strong>Infprog</strong> 10:15 - 12:00 <br />
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
          Trollmann lagt til
        </p>
        <p>
          SVG side skrevet
        </p>
        <p>
          Trollmann fjernet
        </p>
        <p>
          Nettsiden liger ute til nedlasting på GitHub???
        </p>
        <p>
          Trollmann lagt til
        </p>
        <p>
          Nettsiden ble laget
        </p>
      </span>
      <span>
        <h3>Innleveringer:</h3>
        <strong>Webutvikling</strong> 4. Oktober <br />
        <strong>Infprog</strong> 4.Oktober
      </span>
    </aside>
    <main class='previewWrapper'>
      <article class='articlePreview'>
        <a href='articles/mathml.php'>
          <h2>MathML</h2>
          <p>
            MathML er et blalblsrbksof
            <span><i class='fa fa-chevron-down'></i></span>
          </p>
        </a>
      </article>
      <article class='articlePreview'>
        <a href='articles/svg.php'>
          <h2>SVG</h2>
          <p>
            SVG er vektorgrafikk som støttes av alle moderne nettlesere. Det tar lite plass og kan manipuleres med CSS.
            <span><i class='fa fa-chevron-down'></i></span>
          </p>
        </a>
      </article>
      <article class='articlePreview'>
        <a href='articles/git.php'>
          <h2>GitHub</h2>
          <p>

            <span><i class='fa fa-chevron-down'></i></span>
          </p>
        </a>
      </article>
      <article class='articlePreview'>
        <a href='#'>
          <h2>Fukn artikkel om shit</h2>
          <p>
            Sånn faktisk hva skal være her?
            <span><i class='fa fa-chevron-down'></i></span>
          </p>
        </a>
      </article>
      <article class='articlePreview'>
        <a href='#'>
          <h2>Mer Filler</h2>
          <p>
            Hjelp, jeg vet ikke hva som skal være her
            <span><i class='fa fa-chevron-down'></i></span>
          </p>
        </a>
      </article>
      <article class='articlePreview'>
        <a href='#'>
          <h2>Kul trollmann</h2>
          <p>
            <img src='media/wizard.gif' alt='Infinity Wizard'>
            <span><i class='fa fa-chevron-down'></i></span>
          </p>
        </a>
      </article>
    </main>
    <footer>
      <?php
        include("include/footer.html")
       ?>
    </footer>
  </body>
</html>
