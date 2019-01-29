<?php
  if(!isset($_SESSION)) {
    session_start(); 
}
?>
<!doctype html>
    <html lang="en">
      <head>
        <title>Registreren</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <?php
            include 'nav_header.php';
            include 'register.php';
        ?>
   

        <!-- Register Form -->
    <div class="container borderform my-5">
        <div class="row justify-content-center">
         <!-- <div class="col-xl-1"></div> -->

            <div class="col-xl-6">
                <form action="register_form.php" method="post">
                <div class="form-group mb-0">
                    <label for="InputEmail1"></label>
                    <div class="input-group">
                        <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope"></i></span>   
                        </div> 
                        <input type="email" class="form-control shadow-none" id="email" name="email" aria-describedby="emailInput" placeholder="Voer hier uw e-mail adres in" title="Voer dit veld in" required autofocus>            
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Wij zullen nooit uw email met anderen delen zonder uw toestemming.</small>
                </div>
                    <div class="form-group">
                        <label for="Inputpassword1"></label> 
                        <div class="input-group">
                            <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-key"></i></span> 
                        </div>  
                        <input type="password" class="form-control shadow-none" id="password" name="password" aria-describedby="passwordInput" placeholder="Voer hier je wachtwoord in" required>
                    </div>
                <div class="form-group">
                    <label for="Inputpassword2"></label>
                        <div class="input-group">
                            <div class="input-group-prepend"> 
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-key"></i></span>   
                        </div>
                        <input type="password" class="form-control shadow-none" id="confirmPassword" name="password" aria-describedby="passwordInput" placeholder="Herhaal uw wachtwoord" required>          
                </div>
                    <div class="col">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            <p>
                            Ik heb de <a href="#" data-toggle="modal" data-target="#modelId1">algemene voorwaarden</a> gelezen en geaccepteerd.</p>
                            </label>
                        </div> 
                    </div>
                        <button type="submit" name="register" value="Register" class="btn btn-dark">Registreer</button> 
                   <?php 
                        if($showMessage) {
                        echo $message;
                    }   
                        if ($showErrorMessage) {
                        echo $errorMessage;
                    }
                    ?>   
                </form>
                <br><br>
                </div>   
            </div>
        </div>
    </div>
    </div>
    <!-- Register Form -->
       
    <!-- Modal Terms and Conditions -->
    <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Algemene Voorwaarden</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    Algemene Voorwaarden

Inhoudsopgave:
Artikel   1 - Definities
Artikel   2 - Identiteit van de ondernemer
Artikel   3 - Toepasselijkheid
Artikel   4 - Het aanbod
Artikel   5 - De overeenkomst
Artikel   6 - Herroepingsrecht
Artikel   7 - Kosten in geval van herroeping
Artikel   8 - Uitsluiting herroepingsrecht
Artikel   9 - De prijs
Artikel 10 - Conformiteit en garantie
Artikel 11 - Levering en uitvoering
Artikel 12 - Duurtransacties: duur, opzegging en verlenging
Artikel 13 - Betaling
Artikel 14 - Klachtenregeling
Artikel 15 - Geschillen
Artikel 16 - Aanvullende of afwijkende bepalingen

Artikel 1 - Definities
In deze voorwaarden wordt verstaan onder:

Bedenktijd: de termijn waarbinnen de consument gebruik kan maken van zijn herroepingsrecht;
Consument: de natuurlijke persoon die niet handelt in de uitoefening van beroep of bedrijf en een overeenkomst op afstand aangaat met de ondernemer;
Dag: kalenderdag;
Duurtransactie: een overeenkomst op afstand met betrekking tot een reeks van producten en/of diensten, waarvan de leverings- en/of afnameverplichting in de tijd is gespreid;
Duurzame gegevensdrager: elk middel dat de consument of ondernemer in staat stelt om informatie die aan hem persoonlijk is gericht, op te slaan op een manier die toekomstige raadpleging en ongewijzigde reproductie van de opgeslagen informatie mogelijk maakt.
Herroepingsrecht: de mogelijkheid voor de consument om binnen de bedenktijd af te zien van de overeenkomst op afstand;
Modelformulier: het modelformulier voor herroeping die de ondernemer ter beschikking stelt die een consument kan invullen wanneer hij gebruik wil maken van zijn herroepingsrecht. 
Ondernemer: de natuurlijke of rechtspersoon die producten en/of diensten op afstand aan consumenten aanbiedt;
Overeenkomst op afstand: een overeenkomst waarbij in het kader van een door de ondernemer georganiseerd systeem voor verkoop op afstand van producten en/of diensten, tot en met het sluiten van de overeenkomst uitsluitend gebruik gemaakt wordt van één of meer technieken voor communicatie op afstand;
Techniek voor communicatie op afstand: middel dat kan worden gebruikt voor het sluiten van een overeenkomst, zonder dat consument en ondernemer gelijktijdig in dezelfde ruimte zijn samengekomen.
Algemene Voorwaarden: de onderhavige Algemene Voorwaarden van de ondernemer.

Artikel 2 - Identiteit van de ondernemer
[Naam ondernemer] (statutaire naam, eventueel aangevuld met handelsnaam);
[Vestigingsadres];
[Bezoekadres, indien dit afwijkt van het vestigingsadres];
Telefoonnummer: [en tijdstip(pen) waarop de ondernemer telefonisch te bereiken is]
E-mailadres: [vul hier uw e-mailadres in]
KvK-nummer: [vul hier uw KvK-nummer in]
Btw-identificatienummer: [vul hier uw btw-nummer in]

Indien de activiteit van de ondernemer is onderworpen aan een relevant vergunningstelsel: de
gegevens over de toezichthoudende autoriteit:

Indien de ondernemer een gereglementeerd beroep uitoefent:
de beroepsvereniging of -organisatie waarbij hij is aangesloten;
de beroepstitel, de plaats in de EU of de Europese Economische Ruimte waar deze is toegekend;
een verwijzing naar de beroepsregels die in Nederland van toepassing zijn en aanwijzingen waar en hoe deze beroepsregels toegankelijk zijn.

Artikel 3 - Toepasselijkheid 
Deze algemene voorwaarden zijn van toepassing op elk aanbod van de ondernemer en op elke tot stand gekomen overeenkomst op afstand en bestellingen tussen ondernemer en consument.
Voordat de overeenkomst op afstand wordt gesloten, wordt de tekst van deze algemene voorwaarden aan de consument beschikbaar gesteld. Indien dit redelijkerwijs niet mogelijk is, zal voordat de overeenkomst op afstand wordt gesloten, worden aangegeven dat de algemene voorwaarden bij de ondernemer zijn in te zien en zij op verzoek van de consument zo spoedig mogelijk kosteloos worden toegezonden.
Indien de overeenkomst op afstand elektronisch wordt gesloten, kan in afwijking van het vorige lid en voordat de overeenkomst op afstand wordt gesloten, de tekst van deze algemene voorwaarden langs elektronische weg aan de consument ter beschikking worden gesteld op zodanige wijze dat deze door de consument op een eenvoudige manier kan worden opgeslagen op een duurzame gegevensdrager. Indien dit redelijkerwijs niet mogelijk is, zal voordat de overeenkomst op afstand wordt gesloten, worden aangegeven waar van de algemene voorwaarden langs elektronische weg kan worden kennisgenomen en dat zij op verzoek van de consument langs elektronische weg of op andere wijze kosteloos zullen worden toegezonden.
Voor het geval dat naast deze algemene voorwaarden tevens specifieke product- of dienstenvoorwaarden van toepassing zijn, is het tweede en derde lid van overeenkomstige toepassing en kan de consument zich in geval van tegenstrijdige algemene voorwaarden steeds beroepen op de toepasselijke bepaling die voor hem het meest gunstig is.
Indien één of meerdere bepalingen in deze algemene voorwaarden op enig moment geheel of gedeeltelijk nietig zijn of vernietigd worden, dan blijft de overeenkomst en deze voorwaarden voor het overige in stand en zal de betreffende bepaling in onderling overleg onverwijld vervangen worden door een bepaling dat de strekking van het oorspronkelijke zoveel mogelijk benaderd.
Situaties die niet in deze algemene voorwaarden zijn geregeld, dienen te worden beoordeeld ‘naar de geest’ van deze algemene voorwaarden.
Onduidelijkheden over de uitleg of inhoud van één of meerdere bepalingen van onze voorwaarden, dienen uitgelegd te worden ‘naar de geest’ van deze algemene voorwaarden.

Artikel 4 - Het aanbod
Indien een aanbod een beperkte geldigheidsduur heeft of onder voorwaarden geschiedt, wordt dit nadrukkelijk in het aanbod vermeld.
Het aanbod is vrijblijvend. De ondernemer is gerechtigd het aanbod te wijzigen en aan te passen.
Het aanbod bevat een volledige en nauwkeurige omschrijving van de aangeboden producten en/of diensten. De beschrijving is voldoende gedetailleerd om een goede beoordeling van het aanbod door de consument mogelijk te maken. Als de ondernemer gebruik maakt van afbeeldingen zijn deze een waarheidsgetrouwe weergave van de aangeboden producten en/of diensten. Kennelijke vergissingen of kennelijke fouten in het aanbod binden de ondernemer niet.
Alle afbeeldingen, specificaties gegevens in het aanbod zijn indicatie en kunnen geen aanleiding zijn tot schadevergoeding of ontbinding van de overeenkomst.
Afbeeldingen bij producten zijn een waarheidsgetrouwe weergave van de aangeboden producten. Ondernemer kan niet garanderen dat de weergegeven kleuren exact overeenkomen met de echte kleuren van de producten. 
Elk aanbod bevat zodanige informatie, dat voor de consument duidelijk is wat de rechten en verplichtingen zijn, die aan de aanvaarding van het aanbod zijn verbonden. Dit betreft in het 
bijzonder:
de prijs inclusief belastingen;
de eventuele kosten van verzending;
de wijze waarop de overeenkomst tot stand zal komen en welke handelingen daarvoor nodig zijn;
het al dan niet van toepassing zijn van het herroepingsrecht;
de wijze van betaling, aflevering en uitvoering van de overeenkomst;
de termijn voor aanvaarding van het aanbod, dan wel de termijn waarbinnen de ondernemer de prijs garandeert;
de hoogte van het tarief voor communicatie op afstand indien de kosten van het gebruik van de techniek voor communicatie op afstand worden berekend op een andere grondslag dan het reguliere basistarief voor het gebruikte communicatiemiddel;
of de overeenkomst na de totstandkoming wordt gearchiveerd, en zo ja op welke wijze deze voor de consument te raadplegen is;
de manier waarop de consument, voor het sluiten van de overeenkomst, de door hem in het kader van de overeenkomst verstrekte gegevens kan controleren en indien gewenst herstellen;
de eventuele andere talen waarin, naast het Nederlands, de overeenkomst kan worden gesloten;
de gedragscodes waaraan de ondernemer zich heeft onderworpen en de wijze waarop de consument deze gedragscodes langs elektronische weg kan raadplegen; en
de minimale duur van de overeenkomst op afstand in geval van een duurtransactie.
Optioneel: beschikbare maten, kleuren, soort materialen.


Artikel 5 - De overeenkomst
De overeenkomst komt, onder voorbehoud van het bepaalde in lid 4, tot stand op het moment van aanvaarding door de consument van het aanbod en het voldoen aan de daarbij gestelde voorwaarden.
Indien de consument het aanbod langs elektronische weg heeft aanvaard, bevestigt de ondernemer onverwijld langs elektronische weg de ontvangst van de aanvaarding van het aanbod. Zolang de ontvangst van deze aanvaarding niet door de ondernemer is bevestigd, kan de consument de overeenkomst ontbinden.
Indien de overeenkomst elektronisch tot stand komt, treft de ondernemer passende technische en organisatorische maatregelen ter beveiliging van de elektronische overdracht van data en zorgt hij voor een veilige web omgeving. Indien de consument elektronisch kan betalen, zal de ondernemer daartoe passende veiligheidsmaatregelen in acht nemen.
De ondernemer kan zich - binnen wettelijke kaders - op de hoogte stellen of de consument aan zijn betalingsverplichtingen kan voldoen, evenals van al die feiten en factoren die van belang zijn voor een verantwoord aangaan van de overeenkomst op afstand. Indien de ondernemer op grond van dit onderzoek goede gronden heeft om de overeenkomst niet aan te gaan, is hij gerechtigd gemotiveerd een bestelling of aanvraag te weigeren of aan de uitvoering bijzondere voorwaarden te verbinden.
De ondernemer zal bij het product of dienst aan de consument de volgende informatie, schriftelijk of op zodanige wijze dat deze door de consument op een toegankelijke manier kan worden opgeslagen op een duurzame gegevensdrager, meesturen:
a. het bezoekadres van de vestiging van de ondernemer waar de consument met klachten terecht kan;
b. de voorwaarden waaronder en de wijze waarop de consument van het herroepingsrecht gebruik kan maken, dan wel een duidelijke melding inzake het uitgesloten zijn van het herroepingsrecht;
c. de informatie over garanties en bestaande service na aankoop;
d. de in artikel 4 lid 3 van deze voorwaarden opgenomen gegevens, tenzij de ondernemer deze gegevens al aan de consument heeft verstrekt vóór de uitvoering van de overeenkomst;
e. de vereisten voor opzegging van de overeenkomst indien de overeenkomst een duur heeft van meer dan één jaar of van onbepaalde duur is.
In geval van een duurtransactie is de bepaling in het vorige lid slechts van toepassing op de eerste levering.
Iedere overeenkomst wordt aangegaan onder de opschortende voorwaarden van voldoende beschikbaarheid van de betreffende producten. 

Artikel 6 - Herroepingsrecht
Bij levering van producten:
Bij de aankoop van producten heeft de consument de mogelijkheid de overeenkomst zonder opgave van redenen te ontbinden gedurende 14 dagen. Deze bedenktermijn gaat in op de dag na ontvangst van het product door de consument of een vooraf door de consument aangewezen en aan de ondernemer bekendgemaakte vertegenwoordiger.
Tijdens de bedenktijd zal de consument zorgvuldig omgaan met het product en de verpakking. Hij zal het product slechts in die mate uitpakken of gebruiken voor zover dat nodig is om te kunnen beoordelen of hij het product wenst te behouden. Indien hij van zijn herroepingsrecht gebruik maakt, zal hij het product met alle geleverde toebehoren en - indien redelijkerwijze mogelijk - in de originele staat en verpakking aan de ondernemer retourneren, conform de door de ondernemer verstrekte redelijke en duidelijke instructies.
Wanneer de consument gebruik wenst te maken van zijn herroepingsrecht is hij verplicht dit binnen 14 dagen, na ontvangst van het product, kenbaar te maken aan de ondernemer. Het kenbaar maken dient de consument te doen middels het modelformulier. Nadat de consument kenbaar heeft gemaakt gebruik te willen maken van zijn herroepingsrecht dient de klant het product binnen 14 dagen retour te sturen. De consument dient te bewijzen dat de geleverde zaken tijdig zijn teruggestuurd, bijvoorbeeld door middel van een bewijs van verzending. 
Indien de klant na afloop van de in lid 2 en 3 genoemde termijnen niet kenbaar heeft gemaakt gebruik te willen maken van zijn herroepingsrecht resp. het product niet aan de ondernemer heeft teruggezonden, is de koop een feit. 
Bij levering van diensten:
Bij levering van diensten heeft de consument de mogelijkheid de overeenkomst zonder opgave van redenen te ontbinden gedurende ten minste 14 dagen, ingaande op de dag van het aangaan van de overeenkomst.
Om gebruik te maken van zijn herroepingsrecht, zal de consument zich richten naar de door de ondernemer bij het aanbod en/of uiterlijk bij de levering ter zake verstrekte redelijke en duidelijke instructies.

Artikel 7 - Kosten in geval van herroeping 
Indien de consument gebruik maakt van zijn herroepingsrecht, komen ten hoogste de kosten van terugzending voor zijn rekening.
Indien de consument een bedrag betaald heeft, zal de ondernemer dit bedrag zo spoedig mogelijk, doch uiterlijk binnen 14 dagen na herroeping, terugbetalen. Hierbij is wel de voorwaarde dat het product reeds terugontvangen is door de webwinkelier of sluitend bewijs van complete terugzending overlegd kan worden. Terugbetaling zal geschieden via dezelfde betaalmethode die door de consument is gebruikt tenzij de consument nadrukkelijk toestemming geeft voor een andere betaalmethode.
Bij beschadiging van het product door onzorgvuldige omgang door de consument zelf is de consument aansprakelijk voor eventuele waardevermindering van het product.
De consument kan niet aansprakelijk worden gesteld voor waardevermindering van het product wanneer door de ondernemer niet alle wettelijk verplichte informatie over het herroepingsrecht is verstrekt, dit dient te gebeuren voor het sluiten van de koopovereenkomst.


Artikel 8 - Uitsluiting herroepingsrecht
De ondernemer kan het herroepingsrecht van de consument uitsluiten voor producten zoals omschreven in lid 2 en 3. De uitsluiting van het herroepingsrecht geldt slechts indien de ondernemer dit duidelijk in het aanbod, althans tijdig voor het sluiten van de overeenkomst, heeft vermeld.
Uitsluiting van het herroepingsrecht is slechts mogelijk voor producten: 
a. die door de ondernemer tot stand zijn gebracht overeenkomstig specificaties van de consument;
b. die duidelijk persoonlijk van aard zijn;
c. die door hun aard niet kunnen worden teruggezonden;
d. die snel kunnen bederven of verouderen;
e. waarvan de prijs gebonden is aan schommelingen op de financiële markt waarop de ondernemer geen invloed heeft;
f. voor losse kranten en tijdschriften;
g. voor audio- en video-opnamen en computersoftware waarvan de consument de verzegeling heeft verbroken.
h. voor hygiënische producten waarvan de consument de verzegeling heeft verbroken.
Uitsluiting van het herroepingsrecht is slechts mogelijk voor diensten:
a. betreffende logies, vervoer, restaurantbedrijf of vrijetijdsbesteding te verrichten op een bepaalde datum of tijdens een bepaalde periode;
b. waarvan de levering met uitdrukkelijke instemming van de consument is begonnen voordat de bedenktijd is verstreken;
c. betreffende weddenschappen en loterijen.


Artikel 9 - De prijs
Gedurende de in het aanbod vermelde geldigheidsduur worden de prijzen van de aangeboden producten en/of diensten niet verhoogd, behoudens prijswijzigingen als gevolg van veranderingen in btw-tarieven.
In afwijking van het vorige lid kan de ondernemer producten of diensten waarvan de prijzen gebonden zijn aan schommelingen op de financiële markt en waar de ondernemer geen invloed op heeft, met variabele prijzen aanbieden. Deze gebondenheid aan schommelingen en het feit dat eventueel vermelde prijzen richtprijzen zijn, worden bij het aanbod vermeld. 
Prijsverhogingen binnen 3 maanden na de totstandkoming van de overeenkomst zijn alleen toegestaan indien zij het gevolg zijn van wettelijke regelingen of bepalingen.
Prijsverhogingen vanaf 3 maanden na de totstandkoming van de overeenkomst zijn alleen toegestaan indien de ondernemer dit bedongen heeft en: 
a. deze het gevolg zijn van wettelijke regelingen of bepalingen; of
b. de consument de bevoegdheid heeft de overeenkomst op te zeggen met ingang van de dag waarop de prijsverhoging ingaat.
De in het aanbod van producten of diensten genoemde prijzen zijn inclusief btw.
Alle prijzen zijn onder voorbehoud van druk – en zetfouten. Voor de gevolgen van druk – en zetfouten wordt geen aansprakelijkheid aanvaard. Bij druk – en zetfouten is de ondernemer niet verplicht het product volgens de foutieve prijs te leveren. 

Artikel 10 - Conformiteit en Garantie
De ondernemer staat ervoor in dat de producten en/of diensten voldoen aan de overeenkomst, de in het aanbod vermelde specificaties, aan de redelijke eisen van deugdelijkheid en/of bruikbaarheid en de op de datum van de totstandkoming van de overeenkomst bestaande wettelijke bepalingen en/of overheidsvoorschriften. Indien overeengekomen staat de ondernemer er tevens voor in dat het product geschikt is voor ander dan normaal gebruik.
Een door de ondernemer, fabrikant of importeur verstrekte garantie doet niets af aan de wettelijke rechten en vorderingen die de consument op grond van de overeenkomst tegenover de ondernemer kan doen gelden.
Eventuele gebreken of verkeerd geleverde producten dienen binnen 4 weken na levering aan de ondernemer schriftelijk te worden gemeld. Terugzending van de producten dient te geschieden in de originele verpakking en in nieuwstaat verkerend.
De garantietermijn van de ondernemer komt overeen met de fabrieksgarantietermijn. De ondernemer is echter te nimmer verantwoordelijk voor de uiteindelijke geschiktheid van de producten voor elke individuele toepassing door de consument, noch voor eventuele adviezen ten aanzien van het gebruik of de toepassing van de producten.
De garantie geldt niet indien:
De consument de geleverde producten zelf heeft gerepareerd en/of bewerkt of door derden heeft laten repareren en/of bewerken;
De geleverde producten aan abnormale omstandigheden zijn blootgesteld of anderszins onzorgvuldig worden behandeld of in strijd zijn met de aanwijzingen van de ondernemer en/of op de verpakking behandeld zijn;
De ondeugdelijkheid geheel of gedeeltelijk het gevolg is van voorschriften die de overheid heeft gesteld of zal stellen ten aanzien van de aard of de kwaliteit van de toegepaste materialen. 

Artikel 11 - Levering en uitvoering
De ondernemer zal de grootst mogelijke zorgvuldigheid in acht nemen bij het in ontvangst nemen en bij de uitvoering van bestellingen van producten en bij de beoordeling van aanvragen tot verlening van diensten.
Als plaats van levering geldt het adres dat de consument aan het bedrijf kenbaar heeft gemaakt.
Met inachtneming van hetgeen hierover in lid 4 van dit artikel is vermeld, zal het bedrijf geaccepteerde bestellingen met bekwame spoed doch uiterlijk binnen 30 dagen uitvoeren, tenzij consument akkoord is gegaan met een langere leveringstermijn. Indien de bezorging vertraging ondervindt, of indien een bestelling niet dan wel slechts gedeeltelijk kan worden uitgevoerd, ontvangt de consument hiervan uiterlijk 30 dagen nadat hij de bestelling geplaatst heeft bericht. De consument heeft in dat geval het recht om de overeenkomst zonder kosten te ontbinden. De consument heeft geen recht op een schadevergoeding. 
Alle levertermijnen zijn indicatief. Aan eventuele genoemde termijnen kan de consument geen rechten ontlenen. Overschrijding van een termijn geeft de consument geen recht op schadevergoeding.
In geval van ontbinding conform het lid 3 van dit artikel zal de ondernemer het bedrag dat de consument betaald heeft zo spoedig mogelijk, doch uiterlijk binnen 14 dagen na ontbinding, terugbetalen.
Indien levering van een besteld product onmogelijk blijkt te zijn, zal de ondernemer zich inspannen om een vervangend artikel beschikbaar te stellen. Uiterlijk bij de bezorging zal op duidelijke en begrijpelijke wijze worden gemeld dat een vervangend artikel wordt geleverd. Bij vervangende artikelen kan het herroepingsrecht niet worden uitgesloten. De kosten van een eventuele retourzending zijn voor rekening van de ondernemer.
Het risico van beschadiging en/of vermissing van producten berust bij de ondernemer tot het moment van bezorging aan de consument of een vooraf aangewezen en aan de ondernemer bekend gemaakte vertegenwoordiger, tenzij uitdrukkelijk anders is overeengekomen.

Artikel 12 - Duurtransacties: duur, opzegging en verlenging
Opzegging
De consument kan een overeenkomst die voor onbepaalde tijd is aangegaan en die strekt tot het geregeld afleveren van producten (elektriciteit daaronder begrepen) of diensten, te allen tijde opzeggen met inachtneming van daartoe overeengekomen opzeggingsregels en een opzegtermijn van ten hoogste één maand.
De consument kan een overeenkomst die voor bepaalde tijd is aangegaan en die strekt tot het geregeld afleveren van producten (elektriciteit daaronder begrepen) of diensten, te allen tijde tegen het einde van de bepaalde duur opzeggen met inachtneming van daartoe overeengekomen opzeggingsregels en een opzegtermijn van ten hoogste één maand.
De consument kan de in de vorige leden genoemde overeenkomsten:
te allen tijde opzeggen en niet beperkt worden tot opzegging op een bepaald tijdstip of in een bepaalde periode;
tenminste opzeggen op dezelfde wijze als zij door hem zijn aangegaan;
altijd opzeggen met dezelfde opzegtermijn als de ondernemer voor zichzelf heeft bedongen.
Verlenging
Een overeenkomst die voor bepaalde tijd is aangegaan en die strekt tot het geregeld afleveren van producten (elektriciteit daaronder begrepen) of diensten, mag niet stilzwijgend worden verlengd of vernieuwd voor een bepaalde duur.
In afwijking van het vorige lid mag een overeenkomst die voor bepaalde tijd is aangegaan en die strekt tot het geregeld afleveren van dag- nieuws- en weekbladen en tijdschriften stilzwijgend worden verlengd voor een bepaalde duur van maximaal drie maanden, als de consument deze verlengde overeenkomst tegen het einde van de verlenging kan opzeggen met een opzegtermijn van ten hoogste één maand.
Een overeenkomst die voor bepaalde tijd is aangegaan en die strekt tot het geregeld afleveren van producten of diensten, mag alleen stilzwijgend voor onbepaalde duur worden verlengd als de consument te allen tijde mag opzeggen met een opzegtermijn van ten hoogste één maand en een opzegtermijn van ten hoogste drie maanden in geval de overeenkomst strekt tot het geregeld, maar minder dan eenmaal per maand, afleveren van dag-, nieuws- en weekbladen en tijdschriften.
Een overeenkomst met beperkte duur tot het geregeld ter kennismaking afleveren van dag-, nieuws- en weekbladen en tijdschriften (proef- of kennismakingsabonnement) wordt niet stilzwijgend voortgezet en eindigt automatisch na afloop van de proef- of kennismakingsperiode.
Duur
Als een overeenkomst een duur van meer dan een jaar heeft, mag de consument na een jaar de overeenkomst te allen tijde met een opzegtermijn van ten hoogste een maand opzeggen, tenzij de redelijkheid en billijkheid zich tegen opzegging vóór het einde van de overeengekomen duur verzetten.

Artikel 13 - Betaling
Voor zover niet anders is overeengekomen, dienen de door de consument verschuldigde bedragen te worden voldaan binnen 7 werkdagen na het ingaan van de bedenktermijn als bedoeld in artikel 6 lid 1. In geval van een overeenkomst tot het verlenen van een dienst, vangt deze termijn aan nadat de consument de bevestiging van de overeenkomst heeft ontvangen.
De consument heeft de plicht om onjuistheden in verstrekte of vermelde betaalgegevens onverwijld aan de ondernemer te melden.
In geval van wanbetaling van de consument heeft de ondernemer behoudens wettelijke beperkingen, het recht om de vooraf aan de consument kenbaar gemaakte redelijke kosten in rekening te brengen.

Artikel 14 - Klachtenregeling
De ondernemer beschikt over een voldoende bekendgemaakte klachtenprocedure en behandelt de klacht overeenkomstig deze klachtenprocedure.
Klachten over de uitvoering van de overeenkomst moeten binnen 7 dagen volledig en duidelijk omschreven worden ingediend bij de ondernemer, nadat de consument de gebreken heeft geconstateerd.
Bij de ondernemer ingediende klachten worden binnen een termijn van 14 dagen gerekend vanaf de datum van ontvangst beantwoord. Als een klacht een voorzienbaar langere verwerkingstijd vraagt, wordt door de ondernemer binnen de termijn van 14 dagen geantwoord met een bericht van ontvangst en een indicatie wanneer de consument een meer uitvoerig antwoord kan verwachten.
Indien de klacht niet in onderling overleg kan worden opgelost ontstaat een geschil dat vatbaar is voor de geschillenregeling.
Bij klachten dient een consument zich allereerst te wenden tot de ondernemer. Indien de webwinkel is aangesloten bij Stichting WebwinkelKeur en bij klachten die niet in onderling overleg opgelost kunnen worden dient de consument zich te wenden tot Stichting WebwinkelKeur ( HYPERLINK "http://www.webwinkelkeur.nl/"www.webwinkelkeur.nl), deze zal gratis bemiddelen. Controleer of deze webwinkel een lopend lidmaatschap heeft via  HYPERLINK "https://www.webwinkelkeur.nl/leden/"https://www.webwinkelkeur.nl/leden/. Mocht er dan nog niet tot een oplossing gekomen worden, heeft de consument de mogelijkheid om zijn klacht te laten behandelen door de door Stichting WebwinkelKeur aangestelde onafhankelijke geschillencommissie, de uitspraak hiervan is bindend en zowel ondernemer als consument stemmen in met deze bindende uitspraak. Aan het voorleggen van een geschil aan deze geschillencommissie zijn kosten verbonden die door de consument betaald dienen te worden aan de betreffende commissie. Tevens is het mogelijk om klachten aan te melden via het Europees ODR platform ( HYPERLINK "http://ec.europa.eu/odr"http://ec.europa.eu/odr).
Een klacht schort de verplichtingen van de ondernemer niet op, tenzij de ondernemer schriftelijk anders aangeeft.
Indien een klacht gegrond wordt bevonden door de ondernemer, zal de ondernemer naar haar keuze of de geleverde producten kosteloos vervangen of repareren.

Artikel 15 - Geschillen
Op overeenkomsten tussen de ondernemer en de consument waarop deze algemene voorwaarden betrekking hebben, is uitsluitend Nederlands recht van toepassing. Ook indien de consument woonachtig is in het buitenland.
Het Weens Koopverdrag is niet van toepassing.

Artikel 16 - Aanvullende of afwijkende bepalingen
Aanvullende dan wel van deze algemene voorwaarden afwijkende bepalingen mogen niet ten nadele van de consument zijn en dienen schriftelijk te worden vastgelegd dan wel op zodanige wijze dat deze door de consument op een toegankelijke manier kunnen worden opgeslagen op een duurzame gegevensdrager.

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
   <!-- Modal Terms and Conditions --->

        <!-- Optional JavaScript -->
        <script src="js/passwordverify.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        
    </body>
<?php
include 'footer.php'
?>


</html>