<!DOCTYPE html>
<html>
<head>
    <title>Kinklist</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNui8sowAAAAWdEVYdENyZWF0aW9uIFRpbWUAMTAvMjEvMTV5ehY1AAAAZElEQVQ4jaWTwQ3AIAwDbcT+I9f9hjYQA/mAkO7igKAACWdFAF0A2gb0hP0uCyTATyAJSoaK5xGyEmTC9lktmORUdAQvBQ5cJshktoDk0HkmKRNUEmuE6ztYVXe7bT+jW7z9zi8qYiodCjCHKgAAAABJRU5ErkJggg==">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="widthWrapper">
        <button id="Edit"></button>
        <h1>Moje perwersje</h1>
        <div class="legend">
            <div><span data-color="#FFFFFF" class="choice notEntered"></span> <span class="legend-text">brak wyboru</span></div>
            <div><span data-color="#6DB5FE" class="choice favorite"></span> <span class="legend-text">uwielbiam</span></div>
            <div><span data-color="#23FD22" class="choice like"></span> <span class="legend-text">lubię</span></div>
            <div><span data-color="#FDFD6B" class="choice okay"></span> <span class="legend-text">ok</span></div>
            <div><span data-color="#DB6C00" class="choice maybe"></span> <span class="legend-text">może</span></div>
            <div><span data-color="#920000" class="choice no"></span> <span class="legend-text">nie lubię</span></div>
        </div>
        <div id="ExportWrapper">
            <input type="text" id="URL">
            <button id="Export">eksport</button>
            <div id="Loading">wczytywanie</div>
        </div>
        <button id="StartBtn"></button>
        <div id="InputList"></div>
    </div>
    <div id="EditOverlay" class="overlay">
        <textarea id="Kinks">
#Ciało
(ogólne)
* szczuplejsza sylwetka
* grubsza sylwetka
* małe piersi
* duże piersi
* mały członek
* duży członek

#Ubiór
(ty, partner)
* seks w ubraniu
* bielizna
* pończochy
* szpilki
* skóra
* lateks
* uniform / kostium (policjant, zakonnica itp.)
* transwestytyzm (mężczyzna jako kobieta i odwrotnie)

#Grupy
(ogólne)
* ty i 1 mężczyzna
* ty i 1 kobieta
* ty i trans MtF (mężczyzna po zmianie płci na kobietę)
* ty i trans FtM (kobieta po zmianie płci na mężczyznę)
* ty i 1 mężczyzna + 1 kobieta
* ty i 2 mężczyzn
* ty i 2 kobiety
* orgia

#Ogólne
(lubię robić komuś, lubię gdy ktoś mi robi)
* romantyczny seks
* zabawa ręką
* obciąganie
* lizanie cipki
* głęboka penetracja ust (kutas do gardła)
* wytrysk z połknięciem
* wytrysk na twarz
* wytrysk na piersi
* wytrysk na cipkę
* siadanie na twarzy
* powstrzymywanie orgazmu
* kuszenie
* zachęcanie do onanizmu

#Seks analny
(lubię robić komuś, lubię gdy ktoś mi robi)
* zabawki analne
* seks analny
* rimming (lizanie dupki)
* podwójna penetracja (kutas w cipce i w dupce)
* fisting analny (cała dłoń w dupce)

#Ograniczenia
(ty, partner)
* knebel
* obroża
* smycz
* pas cnoty
* wiązanie (lekkie)
* wiązanie (mocne)
* zamykanie w klatce

#Zabawki
(ty, partner)
* dildo (gumowy członek)
* wibrator
* korek analny
* sounding (zabawka w cewce moczowej)

#Dominacja
(strona dominująca, strona uległa)
* dominacja / uległość
* udawanie pomocy domowej
* niewolnictwo
* udawanie zwierząt (np. psa)
* tatuś/córeczka, mamusia/synek
* dyscyplina i uległość
* błaganie o seks
* wymuszanie orgazmu
* kontrola orgazmu
* zakazywanie dochodzenia do orgazmu
* zmiana ról

#Brak zgody
(lubię robić komuś, lubię gdy ktoś mi robi)
* brak zgody / gwałt
* szantaż
* porwanie
* pod wpływem narkotyków / alkoholu
* seks podczas snu

#Tabu
(ogólne)
* udawanie członka rodziny
* udawanie niepełnoletniego
* seks między rasami (np. z Murzynem/Murzynką)
* zdrada (wiedza że partner zdradza)
* ekshibicjonizm (publiczne obnażanie się)
* podglądanie kogoś
* zoofilia (zwierzęta)

#Płyny
(ogólne)
* zabawa z krwią
* zabawa z moczem
* zabawa z kałem
* laktacja
* pieluchy
* zabawa nasieniem

#Poniżenie
(lubię robić komuś, lubię gdy ktoś mi robi)
* anonimowe obciąganie
* wyzwiska
* poniżanie

#Dotyk i stymulacja
(lubię robić komuś, lubię gdy ktoś mi robi)
* uwielbienie kutasa/cipki
* uwielbienie dupci
* zabawa stopami
* łaskotki
* gra zmysłów (np. zabawa w zawiązanymi oczami)
* stymulacja prądem

#Różne
(lubię robić komuś, lubię gdy ktoś mi robi)
* fisting (wkładanie całej dłoni)
* gangbang (stosunek z wieloma partnerami po kolei)
* duszenie
* zapłodnienie
* seks w ciąży
* udawanie kobiety przez mężczyznę
* oddawanie partnera/partnerki do seksu z inną osobą

#Ból
(lubię robić komuś, lubię gdy ktoś mi robi)
* lekki ból
* duży ból
* klamry na sutki
* klamerki do bielizny na ciele
* chłosta trzciną
* chłosta batem
* bicie ręką
* klapsy
* klapsy kutasa/cipki
* torturowanie kutasa/cipki
* gorący wosk na ciało
* drapanie
* gryzienie
* cięcie
        </textarea>
        <button id="KinksOK">Accept</button>
    </div>
    <div id="InputOverlay" class="overlay">
        <div class="widthWrapper">
            <div id="InputPrevious"></div>
            <div id="InputCurrent">
                <h2 id="InputCategory"></h2>
                <h3 id="InputField"></h3>
                <button class="closePopup">&times;</button>
                <div id="InputValues"></div>
            </div>
            <div id="InputNext"></div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>