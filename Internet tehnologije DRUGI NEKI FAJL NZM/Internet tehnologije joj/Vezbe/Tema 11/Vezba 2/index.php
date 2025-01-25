<?php

#PRIMER 1
  $administrator = false;
  //$urednik = true;
/*
if($administrator === true){
    echo 'Dobrodosli administrator';
}
else{
    echo 'Dobrodosli gost';
}
*/
//Ternarni operator
/*
    pravi se prvo uslov, znak pitanja, ' ako je uslov tacan' , : , 'ako nije tacno'
*/
    
  //echo ($administrator === true) ? 'Dobrodosli admin!' : 'Dobrodosli gost';

#PRIMER 2
   
//upotreba jos jednog ternarnog operatora unutar blokova '' : ''

 //echo ($administrator === true) ? 'Dobrodosli admin! '.($urednik === true ? 'Vi ste takodje i urednik vesti' : '') : 'Dobrodosli gost';

//niz za citanje dole preko foreach ternarno
    $niz = ['Petar','Ivana','Marko'];
	
?>


<!-- PRIMER SA HTMLOM klasicni IF/ELSE -->
<div>
    <?php if($administrator){ ?>
    <h1>Dobrodosli administratore!!!</h1>
    <?php } else { ?>
    <h1>Dobrodosli goste!</h1>
    <?php } ?>
</div>


<!-- PRIMER SA HTML UPOTREBA TERNARNOG OPERATORA -->
<hr>
<div>
    <?php if($administrator): ?>
        <h1>Dobrodosli administrator</h1>
        <?php else: ?>
        <h1>Dobrodosli gost</h1>
    <?php endif; ?>
</div>

<!-- Upotreba foreach petlje za niz sa ternarnim operatorom -->
<div>
    <h4>Spisak administratora i urednika</h4>
    <?php foreach($niz as $vrednost): ?> 
        <ul> 
            <li><?php echo $vrednost; ?></li>
        </ul>
        <?php endforeach; ?>
</div>