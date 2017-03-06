<div class="container">
    <br>
<form class="form-horizontal" method="post" action="/update/<?=$link ?>/<?=$id ?>">
 <div class="form-group">
  <label for="Date" class="col-sm-2 control-label">Введите дату</label>
  <div class="col-sm-10">
   <input type="date" class="form-control" id="date" placeholder="Date" value="<?=$date ?>" name="date" autofocus required>
  </div>    
 </div>
     <div class="form-group">
  <label for="kat" class="col-sm-2 control-label" >Выберите категорию</label>
  <div class="col-sm-10">
     <select class="form-control" name="kat" >
      <?php foreach($kat as $a): ?>
 <option> <?=$a ?></option>
      <?php endforeach ?>
 </select> 
  </div>    
 </div>    
         <div class="form-group">
  <label for="item" class="col-sm-2 control-label">Выберите Статью</label>
  <div class="col-sm-10">
     <select class="form-control" name="item" >
      <?php foreach($item as $a): ?>
 <option> <?=$a ?></option>
      <?php endforeach ?>
 </select> 
  </div>    
 </div>
    
     <div class="form-group">
  <label for="sum" class="col-sm-2 control-label">Введите сумму в грн.</label>
  <div class="col-sm-10">
   <input type="float" class="form-control" id="float" placeholder="Введите сумму расходов" value="<?=$sum ?>" name="sum" required >
  </div>    
 </div>
    
             <div class="form-group">
  <label for="kom" class="col-sm-2 control-label">Комментарии:</label>
                 <div class="col-sm-10">      
        <textarea class="form-control" rows="5" name='coment' >
            <?=$coment ?>
           </textarea>
  </div>    
 </div>
 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
   <button type="submit" class="btn btn-success">Сохранить</button>
  </div>
 </div>
</form>  
</div>