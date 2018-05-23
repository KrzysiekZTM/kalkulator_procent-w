<?php

$vat = array(3, 7, 8, 22, 23);

?>

<div id="vat" class="row mb-50">
	<div class="col single-calc">
		<form class="row">
			<div class="col-md-12">
				<h2 class="text-center mb-30">Kalkulator VAT</h2>
			</div>
			<div class="col-md-12 mb-30">
                <h3 class="b_subtitle mb-15">Wybierz typ konwersji</h3>
                <button id="brutto_netto" class="btn btn-block btn-secondary">Brutto na netto</button>
                <button id="netto_brutto" class="btn btn-block btn-secondary">Netto na brutto</button>
            </div>
            <div class="col-md-12">
                <h3 class="b_subtitle mb-15">Wybierz stawkę VAT lub wpisz własną</h3>
            </div>
			<?php

			foreach($vat as $vat_item){
			    if($vat_item == 23){
            ?>
                    <div class="form-check col-md-3 mb-30 vat_select">
                        <label class="form-check-label btn btn-secondary btn-success btn-block" for="vat-<?php echo $vat_item ?>"><?php echo $vat_item." %" ?>
                            <input checked hidden class="form-check-input" type="radio" name="vat" id="vat-<?php echo $vat_item ?>" value="<?php echo $vat_item ?>">
                        </label>
                    </div>
            <?php
                }else {
                    ?>
                    <div class="form-check col-md-3 mb-30 vat_select">
                        <label class="form-check-label btn btn-secondary btn-block"
                               for="vat-<?php echo $vat_item ?>"><?php echo $vat_item." %" ?>
                            <input hidden class="form-check-input" type="radio" name="vat"
                                   id="vat-<?php echo $vat_item ?>" value="<?php echo $vat_item ?>">
                        </label>
                    </div>
                    <?php
                }
			}

			?>

			<div class="form-group col-md-9">
				<input type="number" class="form-control" id="custom_vat" name="custom_vat" placeholder="Wprowadź inny vat">
			</div>
			<div class="form-group col-md-12">
                <h3 class="b_subtitle mb-15">Wprowadź kwotę netto lub brutto i naciśnij przycisk</h3>
				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="kwota_label">Kwota</span>
				  </div>
				  <input type="text" class="form-control" id="kwota">
				</div>
			</div>
            <div class="col-md-12">
                <h3 class="mb-30">Wynik: <span id="vat_result"></span></h3>
            </div>

			<div class="form-gorup col-md-12">
				<input id="oblicz" type="submit" class="btn btn-primary btn-block" value="Oblicz">
			</div>

		</form>	
	</div>
</div>