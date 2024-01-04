<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T13 - zaprojektuj własne trampki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zaprojektuj własne trampki</h1>
    <h2>Autor: Mateusz Pakuła 3ip02</h2>
    <p>
        Zapoznaj się z rozdziałem podręcznika. Opracuj własny formularz i skrypt pobierający dane. Do wykonania zadania
        użyj różne komponenty formularzy. Przykładowy wygląd formularza pokazany jest na załączonej grafice.
    </p>
</header>

<section>
    <div id="regulamin">
        <h1>Formularz konkursu "Podrasuj swoje buty!"</h1>
        <p>Chcesz zamienić swoje stare trampki na nową parę zaprojektowanych przez siebie butów Forcefield? Napisz nam,
            dlaczego sądzisz, że powinieneś pożegnać się ze swoimi wysłużonymi butami, a być może zostaniesz jednym z
            laureatów konkursu!</p>
    </div>
    <form id="my-form" action="raport.php" method="post">
        <fieldset>
            <legend>Podstawowe dane</legend>
            <label for="imie-naz">Imię i nazwisko: </label><input type="text" name="imie_naz" id="imie-naz"><br>
            <label for="email">E-mail: </label><input type="text" name="email" id="email"><br>
            <label for="tel">Telefon: </label><input type="number" name="tel" id="tel"><br>
            <label for="opis">Moje buty są TAKIE stare... </label><br>
            <textarea name="opis" id="opis" cols="50" rows="5" placeholder="Nie więcej niż 300 znaków"></textarea>
        </fieldset>

        <h1>Zaprojektuj trampki:</h1>

        <fieldset>
            <legend>Własny projekt butów</legend>
            <fieldset>
                <legend>Kolor <i>(wybierz jeden)</i></legend>
                <input type="radio" name="kolor" id="czerwony" value="czerwony"><label
                        for="czerwony">czerwony</label><br>
                <input type="radio" name="kolor" id="niebieski" value="niebieski"><label
                        for="niebieski">niebieski</label><br>
                <input type="radio" name="kolor" id="czarny" value="czarny"><label for="czarny">czarny</label><br>
                <input type="radio" name="kolor" id="srebrny" value="srebrny"><label for="srebrny">srebrny</label><br>
            </fieldset>
            <fieldset>
                <legend>Opcje <i>(możesz wybrać kilka)</i></legend>
                <input type="checkbox" name="sznurowki" id="sznurowki" value="błyszczące sznurówki"><label for="sznurowki">Błyszczące
                    sznurówki</label><br>
                <input type="checkbox" name="logo" id="logo" value="metalowe logo"><label for="logo">Metalowe logo</label><br>
                <input type="checkbox" name="podeszwy" id="podeszwy" value="świecące podeszwy"><label for="podeszwy">Świecące podeszwy</label><br>
                <input type="checkbox" name="mp3" id="mp3" value="odtwarzanie MP3"><label for="mp3">Odtwarzanie MP3</label><br>
            </fieldset>
            <fieldset>
                <legend>Rozmiar</legend>
                <label for="rozmiar">Rozmiar zgodny ze standardowymi rozmiarami butów </label><input type="number"
                                                                                                     name="rozmiar"
                                                                                                     id="rozmiar">
            </fieldset>
        </fieldset>
        <button type="submit">Podrasuj swoje buty!</button>
        <button type="reset">Resetuj</button>
    </form>
</section>

<footer>
    <p>Mateusz Pakuła &copy; 2023</p>
</footer>
</body>
</html>