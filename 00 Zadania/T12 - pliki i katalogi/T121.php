<?php
fopen('Pakuła_Mateusz.txt', 'w');
fopen('doSkasowania.txt', 'w');
unlink('doSkasowania.txt');
mkdir('Pakuła');
fopen('Pakuła/Pakuła_Mateusz.txt', 'w');
?>