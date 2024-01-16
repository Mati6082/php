<style>
    body {
        margin: 0;
        font-family: "Roboto Light", sans-serif;
        background: #dcdcdc;
    }

    p {
        margin: 0 5%;
        width: calc(100vw - 10%);
        height: 100vh;
        line-height: 100vh;
        text-align: center;
        font-size: 300%;
        color: #dcdcdc;
        background: #1e1e1e;
        overflow: hidden;
    }

    p::selection {
        background: #dcdcdc;
        color: #1e1e1e;
    }
</style>

<?php

if (isset($_COOKIE["lastVisit"])) {
    $cookie = explode(" ", $_COOKIE["lastVisit"]);

    echo "<p>Ostatnio odwiedził*ś tę stronę ${cookie[0]} o godzinie ${cookie[1]}</p>";
} else {
    echo "<p>Odwiedzasz tę stronę po raz pierwszy!</p>";
}

$value = date("d.m.Y H:i:s"); //dzień.mc.rok godz:min:sek

$expires = time() + 30 * 24 * 60 * 60; // obecny czas + 30 dni

setcookie("lastVisit", $value, $expires);