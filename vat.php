<?php

$vat = array(3, 7, 8, 22, 23);

?>

<div class="row mb-50">
	<div class="col single-calc">
		<form class="row">
			<div class="col-md-12">
				<h2 class="text-center mb-30">Kalkulator VAT</h2>
			</div>
			
			<?php

			foreach($vat as $vat_item){
			?>
				<div class="form-check col-md-3 mb-30 vat_select">
				  <label class="form-check-label btn btn-secondary btn-block" for="vat-<?php echo $vat_item ?>"><?php echo $vat_item ?>
					<input ng-model="vat" hidden class="form-check-input" type="radio" name="vat" id="vat-<?php echo $vat_item ?>" value="<?php echo $vat_item ?>">
				  </label>
				</div>
			<?php
			}

			?>

			<div class="form-group col-md-9">
				<input ng-model="vat" type="text" class="form-control" id="custom_vat" name="custom_vat" placeholder="Wprowadź inny vat">
			</div>
			<div class="form-group col-md-12">
				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="netto_label">Kwota netto</span>
				  </div>
				  <input type="text" class="form-control" name="netto" id="netto">
				</div>
			</div>
			<div class="form-group col-md-12">
				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="brutto_label">Kwota brutto</span>
				  </div>
				  <input type="text" class="form-control" name="brutto" id="brutto">
				</div>
			</div>

			<div class="form-gorup col-md-12">
				<input type="submit" class="btn btn-primary btn-block" value="Oblicz">
			</div>

		</form>	
	</div>
</div>