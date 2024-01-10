<?php

function limpiar($var) {
	return (isset($var)?htmlspecialchars(trim($var)):"");
}