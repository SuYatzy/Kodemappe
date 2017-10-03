<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>oblig2 - SVG</title>
    <link rel='stylesheet' href='../css/master.css'>
    <link rel='stylesheet' href='../css/svg.css'>
  </head>
  <body>
    <header>
      <h1>SVG</h1>
    </header>
    <nav>
      <?php
        include('../include/nav.html')
       ?>
    </nav>
    <main>
      <article class='articleFull'>
        <h2>Scaleable Vector Graphics</h2>
        <p>
          SVG kan konstrueres i HTML og manipuleres i CSS. Det tar mindre plass enn bildefiler og er ikke avhengig av oppløsning. Konstruering av vektorgrafikk kan være mer tidkrevende enn å tegne et bilde, men i gjengjeld tilbyr det fleksibilitet og praktikalitet<br />
          SVG fungerer veldig bra til å lage ikoner og annen grafikk, som månen jeg har brukt i de neste eksemplene.
        </p>

        <svg id='moon' class='lone' viewBox='0 0 12 12'>
          <defs>
            <mask id='mask'>
              <rect x='0' y='0' width='30' height='30' fill='white' />
              <circle cx='8' cy='4' r='5' />
            </mask>
          </defs>
          <circle cx='6' cy='6' r='6' mask='url(#mask)' />
        </svg>
        <figcaption>Dette er slik en vektor ser ut ubehandlet:</figcaption>
        <div class='svgWrapper'>
          <svg class='red'>
            <use xlink:href='#moon' />
          </svg>
          <svg class='orange'>
            <use xlink:href='#moon' />
          </svg>
          <svg class='yellow'>
            <use xlink:href='#moon' />
          </svg>
          <svg class='green'>
            <use xlink:href='#moon' />
          </svg>
          <svg class='teal'>
            <use xlink:href='#moon' />
          </svg>
          <svg class='blue'>
            <use xlink:href='#moon' />
          </svg>
          <svg class='indigo'>
            <use xlink:href='#moon' />
          </svg>
          <svg class='purple'>
            <use xlink:href='#moon' />
          </svg>
        </div>

        <div class='svgWrapper'>
          <svg fill='url(#gradRb)'>
            <defs>
              <linearGradient id='gradRb' x1='0%' y1='0%' x2='100%' y2='100%'>
                <stop offset='0%' style='stop-color:blue; stop-opacity:1' />
                <stop offset='100%' style='stop-color:red; stop-opacity:1' />
              </linearGradient>
            </defs>
            <use xlink:href='#moon' />
          </svg>
          <svg fill='url(#gradDark)'>
            <defs>
              <linearGradient id='gradDark' x1='0%' y1='0%' x2='100%' y2='100%'>
                <stop offset='0%' style='stop-color:red; stop-opacity:1' />
                <stop offset='100%' style='stop-color:yellow; stop-opacity:1' />
              </linearGradient>
            </defs>
            <use xlink:href='#moon' />
          </svg>
          <svg fill='url(#gradRainbow)'>
            <defs>
              <linearGradient id='gradRainbow' x1='0%' y1='0%' x2='100%' y2='100%'>
                <stop offset='0%' style='stop-color:#d64646; stop-opacity:1' />
                <stop offset='14%' style='stop-color:#d67f46; stop-opacity:1' />
                <stop offset='28%' style='stop-color:#d6c546; stop-opacity:1' />
                <stop offset='42%' style='stop-color:#92d646; stop-opacity:1' />
                <stop offset='56%' style='stop-color:#46d692; stop-opacity:1' />
                <stop offset='70%' style='stop-color:#46b4d6; stop-opacity:1' />
                <stop offset='84%' style='stop-color:#4656d6; stop-opacity:1' />
                <stop offset='100%' style='stop-color:#9046d6; stop-opacity:1' />
              </linearGradient>
            </defs>
            <use xlink:href='#moon' />
          </svg>
          <svg fill='url(#gradGray)'>
            <defs>
              <linearGradient id='gradGray' x1='0%' y1='0%' x2='100%' y2='100%'>
                <stop offset='0%' style='stop-color:#333; stop-opacity:1' />
                <stop offset='100%' style='stop-color:#bbb; stop-opacity:1' />
              </linearGradient>
            </defs>
            <use xlink:href='#moon' />
          </svg>
        </div>
        <figcaption>Man kan endre farger:</figcaption>

        <div class='svgWrapper'>
          <svg class='small'>
            <use xlink:href='#moon' />
          </svg>
          <svg class='medium'>
            <use xlink:href='#moon' />
          </svg>
          <svg class='big'>
            <use xlink:href='#moon' />
          </svg>
        </div>
        <figcaption>Man kan endre størrelse:</figcaption>
        <svg viewBox='0 0 3 1' class='rect'>
          <defs>
            <mask id='maskMoon'>
              <rect x='0' y='0' width='3' height='1' fill='#333'/>
              <svg>
                <use xlink:href='#moon' />
              </svg>
            </mask>
          </defs>
          <rect x='0' y='0' width='3' height='1' mask='url(#maskMoon)'/>
        </svg>
        <figcaption>Man kan bruke SVG til masking:</figcaption>
        <p>
          Man kan sikkert gjøre mer shit også.
        </p>
      </article>
    </main>
    <footer><?php include("../include/footer.html") ?></footer>
  </body>
</html>
