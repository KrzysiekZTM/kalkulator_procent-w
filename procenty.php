<div id="procenty" class="row">
	<div class="col single-calc">
		<form class="row align-items-end">
			<div class="col-lg-12">
				<h2 class="text-center mb-60">Kalkulator Procentów</h2>
			</div>
			<div class="col-lg-12">
				<h3 class="b_subtitle">Jakim procentem liczby A jest liczba B</h3>
			</div>
			<div class="form-group col-lg-4">
				<label for="liczba_a_01">Liczba A</label>
				<input class="form-control" type="text" id='liczba_a_01' name="liczba_a_01" placeholder="Wprowadź liczbę" />
			</div>
			<div class="form-group col-lg-4">
				<label for="liczba_b_01">Liczba B</label>
				<input class="form-control" type="text" id='liczba_b_01' name="liczba_b_01" placeholder="Wprowadź liczbę" />
			</div>
            <div class="form-group col-lg-4">
                <input id="oblicz_procent_01" type="submit" class="btn btn-primary btn-block" value="Oblicz">
            </div>
            <div class="col-lg-12 ptop-10">
                <h3 class="text-center">Wynik: <span id="procent_wynik_01"></span></h3>
            </div>
		</form>
	</div>
</div>

<div class="row">
	<div class="col single-calc">
		<form class="row align-items-end">
			<div class="col-lg-12">
				<h3 class="b_subtitle">Oblicz procent z liczby</h3>
			</div>
			<div class="form-group col-lg-4">
				<label for="liczba_a_02">Procent</label>
				<div class="input-group">
				  <input type="number" class="form-control" id="liczba_a_02" name="liczba_a_02" placeholder="Wprowadź procent">
				  <div class="input-group-append">
				    <span class="input-group-text wynik_procent">%</span>
				  </div>
				</div>

			</div>
			<div class="form-group col-lg-4">
				<label for="liczba_b_02">Liczba</label>
				<input class="form-control" type="number" id='liczba_b_02' name="liczba_b" placeholder="Wprowadź liczbę" />
			</div>
            <div class="form-group col-lg-4">
                <button id="oblicz_procent_02" class="btn btn-primary btn-block">Oblicz</button>
            </div>
            <div class="col-lg-12">
                <h3 class="text-center">Wynik: <span id="wynik_procent_02"></span></h3>
            </div>
		</form>
	</div>
</div>

<div class="row mb-50">
	<div class="col single-calc">
		<form class="row align-items-end">
			<div class="col-lg-12">
				<h3 class="b_subtitle">O ile % wzrosła lub zmalała liczba?</h3>
			</div>
			<div class="form-group col-lg-4">
				<label for="liczba_a_03">Liczba Pierwotna</label>
				<input class="form-control" type="text" id='liczba_a_03' placeholder="Wprowadź liczbę" />
			</div>
			<div class="form-group col-lg-4">
				<label for="liczba_b_03">Liczba po zmianie</label>
				<input class="form-control" type="text" id='liczba_b_03' placeholder="Wprowadź liczbę" />
			</div>
            <div class="form-group col-lg-4">
                <button id="oblicz_procent_03" class="btn btn-primary btn-block">Oblicz</button>
            </div>
            <div class="col-lg-12">
                <h3 class="text-center">Wynik: <span id="wynik_procent_03"></span></h3>
            </div>
		</form>
	</div>
</div>