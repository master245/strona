<form>
<input type="text" name="dystans" onkeyup="licz(this.form)"> *60 / <input type="text" name="czas" onkeyup="this.form"> = <input type="text" name="srednia_predkosc">
</form>

<?php
function licz(x){
x.srednia_predkosc.value=(x.dystans.value*60||0)/(+x.czas.value||1)
}
?>
