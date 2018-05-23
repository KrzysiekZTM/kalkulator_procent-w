<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof Jabłoński
 * Date: 07.05.2018
 * Time: 07:48
 */
?>

<div id="waluty" class="row">
	<div class="col single-calc">
		<form class="row align-items-center">
            <div class="col-md-12">
                <h2 class="text-center mb-60">Konwerter walut</h2>
            </div>
			<div class="form-group col-lg-5">
                <label for="waluta_01">Wybierz pierwszą walutę</label>
                <select class="form-control waluta_select" name="waluta_01" id="waluta_01">
                    <option value="">-Wybierz walutę-</option>
                </select>
            </div>
            <div class="col-lg-2">
                <i class="convert fas fa-arrow-circle-right fa-3x"></i>
            </div>
            <div class="form-group col-lg-5">
                <label for="waluta_02">Wybierz drugą walutę</label>
                <select class="form-control waluta_select" name="waluta_02" id="waluta_02">
                    <option value="">-Wybierz walutę-</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label for="waluta_liczba">Wpisz kwotę</label>
                <input class="form-control" type="number" id="waluta_liczba" name="waluta_liczba">
            </div>
            <div class="col-md-12">
                <h3 class="mb-30">Wynik: <span id="waluta_wynik"></span></h3>
            </div>
            <div class="col-md-12 mb-20">
                <button id="waluta_oblicz" class="btn btn-primary btn-block">Oblicz</button>
            </div>
            <div class="col-md-12">
                <small class="text-muted">*Konwerter kożysta ze średnich wartości walut publikowanych przez Narodowy Bank Polski</small>
            </div>
		</form>
	</div>
</div>