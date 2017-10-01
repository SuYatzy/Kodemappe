<!doctype html>
<html>
<head>
    <title>mf nettside</title>
    <meta charset='utf-8' />
    <link rel='stylesheet' type='text/css' href='../css/main.css' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class='main'>
        <header>
            <h1> Datamaskinens oppbygging </h1>
        </header>
        <nav>
            <?php
                include("../include/nav.php")
            ?>
        </nav>
        <article>
            <h2>Dell Optiplex 745</h2>
            <p>
              Oppgaven handler om å finne diverse informasjon om denne
            </p>

            <h2> Del 1: Setup / BIOS </h2>
            <p>
              1. Cpu: Intel® Core™2 6600 @ 2.40GHz <br />

            </p>
            <p
              2. Internminne: 2 GB <br />
            </p>
            <p>
              3. Prossesor L2 cache, 4 MB <br />
              Cachen i en maskin lagrer data som gjør at man kan utføre prosesser fortere. Hvordan dette fungerer er at den tar en spesifikk instruks og lagrer den til senere bruk. En slik spesifik instruks kan gjenbrukes mange ganger og er mye kjappere enn å utføre hele oppgaven hver gang maskinen krever det.
            </p>
            <p>
              4. BIOS versjon: 2.3.1 (05/21/07) <br />
              Dell Optiplex 745 System BIOS er den nyeste BIOSen tilgjengelig <br />
              BIOS er et interface der man kan justere hvordan maskinen oppfører seg. Dette er tilgjengelig før man booter opp OSet. Det er en egen minnemodul i maskinen som tar vare på BIOS innstillingene selv om det ikek går strøm i systemet.
            </p>
              5. Parametere som kan endres:
              <ul>
                <li>Tid og dato</li>
                <li>Boot Sequence</li>
                <li>Konfigurere hvilke drives man kan bruke</li>
                <li>Velge skjermkort</li>
                <li>Velge å ha flere CPU kjerner</li>
                <li>Speedstep</li>
                <li>Virtualization</li>
                <li>Limit CPUID Value</li>
                <li>HDD Acoustic mode</li>
                <li>Endre Passord på individuelle disker</li>
                <li>Chassis Intrusion</li>
                <li>TPM Security</li>
                <li>Execute disable memory protection</li>
                <li>Computrace(R)</li>
                <li>AC recovery</li>
                <li>Auto Power On</li>
                <li>Low Power Mode</li>
                <li>Remote Wake Up</li>
                <li>Suspend Mode</li>
                <li>ASF Mode</li>
                <li>SERR Message</li>
                <li>Tilbakestill til fabrikkinstillinger</li>
                <li>Fast Boot</li>
                <li>Numlock Key</li>
                <li>Hotkeys</li>
                <li>Keyboard Errors</li>
                <li>Og sikkert mer</li>
              </ul>
            </p>
            <h2> Del 2: Hardware Spesifikasjoner</h2>
            <p>
              3. Minnebrikken i slot 1 er SDRAM, og er produsert av Nanya. <br />
              4. 25&#8451; - 28&#8451; harddisken 22&#8451; - 28&#8451; <br />
              5. Chipset. Intel Q965
            </p>
            <h2> Del 3: Bak Skallet </h2>
            <img src='media/inside2.jpg' alt='Innsiden av pcen'>
            <p>
              Hovedkortet er det store grønne kortet som dekker bunnen av pcen. Alt på pcen er på en måte koblet på denne. <br />
            </p>
            <img src='media/exterior.jpg' alt='Utsiden av pcen'>
            <p>
              Du kan se strømforsyningen øverst, og diskene nederst på bildet.
            </p>
            <img src='media/processor.jpg' alt='Prosessoren'>
            <p>
              Dette er prosessoren
            </p>
            2. Busser:
            <ul>
              <li>PCI 2.3</li>
              <li>PCIe 1.0A</li>
              <li>SATA 1.0A og 2.0</li>
              <li>USB 2.0</li>
            </ul>
            <p>
              3. Det er plass til 4 ekstrakort. Two PCI card slots One PCI Express x16 card slot   One PCI Express x1 card slot
            </p>
            <p>
              4. Hardisk: Seagate Barracuda 7200.10, med 160GB lagring <br />
            </p>
            <p>
              5. Den har plass til to disker
            </p>
            <img src='media/ram.jpg' alt='Bilde av RAM'>
            <p>
              8. PCen har to RAM moduler. Nanya DDR2 SRAM 1GB, 667MHz. Dette er SRAM som vil si at data blir lagret på den og er tilgjengelig så lenge det går strøm i pcen. Flash RAM gjør dette, men data er også tilgjengelig når pcen ikke har strøm. Dette brukes derfor i BIOS konfigurering. <br />
            </p>
            <p>
              9. 2048 MB RAM til sammen. <br />
            </p>
            <p>
              10. Chipsettet på denne pcen er Intel Q965. Oppgaven til chipsettet er å passe på dataflyten mellom prosessoren og andre komponenter. Man skiller gjerne mellom north og south. North gjør at høyhastighetsbusser samarbeider, og south tilsvarende med lavhastighetsbusser. I moderne systemer er north innebygd i CPUen.
            </p>
        </article>
    </div>
    <footer>
        <?php
            include("../include/footer.php")
        ?>
    </footer>
</body>
</html>
