<?php
function conectarBD() {
    return new mysqli("localhost", "root", "", "PuentesReyes");
}
?>