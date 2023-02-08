<?php
  if(isset($_POST['submit'])){
    saveMessage($_POST);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class='container'>

<form method="post">
<div class="row m-3">
  <div class="col">
  <div class="form-group">
    <input list="Isvykimas" type="text" placeholder="Vykstate Is" name="KelioneIs" class="form-control">
    <datalist id="Isvykimas">
        <?php foreach($marsrutai as $duomenys => $kryptis):?>
            <?php foreach($kryptis as $marsrutas => $MarsrutoNumeris):?>
            <option value="<?=$duomenys;?>"><?=$MarsrutoNumeris?></option>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </datalist>
</div>
  </div>
  <div class="col">
  <div class="form-group">
    <input list="Isvykimas" type="text" placeholder="Vykstate I" name="KelioneI" class="form-control">
    <datalist id="Atvykimas">
        <?php foreach($marsrutai as $duomenys => $kryptis):?>
            <?php foreach($kryptis as $marsrutas => $MarsrutoNumeris):?>
            <option value="<?=$duomenys;?>"><?=$MarsrutoNumeris?></option>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </datalist>
</div>
  </div>
</div>
<div class="row m-3">
    <div class="col">
    <div class="form-group">
                <select name="bagazas" class="form-control">
                    <option selected disabled>--Pasirinkite Svori--</option>
                    <?php foreach($svoris as $code => $bagazas):?>
                    <option value="<?=$bagazas;?>"><?=$bagazas;?></option>
                <?php endforeach; ?>
            </select>
            </div>
    </div>
    <div class="col">
    <div class="form-group">
                <textarea name="message" placeholder="Jusu zinute"></textarea>
            </div>
    </div>
</div>
<div class="row m-3">
    <div class="col"><div class="form-group">
                <input type="text" name="Vardas" placeholder="Vardas">
            </div>
        </div>
        <div class="col"> 
        <div class="form-group">
                <input type="text" name="Pavarde" placeholder="Pavarde">
            </div>
        </div>
</div>
<div class="row m-3">
    <div class="col">
    <div class="form-group">
                <input type="text" name="AsmensKodas" placeholder="AsmensKodas">
            </div>
    </div>
    <div class="col">
    <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Rodyti</button>  
            </div>
    </div>
</div>
</form>
<section>
    <h2 class='bg-primary text-center'>Bilietai</h2>
    <?php foreach( getData() as $list):?>
    <div class='row'>
        <?php $list = explode(',',$list);?>
        <?php foreach($list as $item):?>
            <?php if(!empty($item)):?>
        <div class="col-3">Is <?=$item?></div>
        <div class="col-3">I <?=$item?></div>
        <?php endif;?>
        <?php endforeach;?>
    </div>
    <?php endforeach;?>
</section>
</div>
</body>
</html>