<br>

<form class="form-horizontal" method="post" action="/save/<?=$link ?>">
  
    
     <div class="form-group">
  <label for="sum" class="col-sm-2 control-label">Операция по карточке</label>
  <div class="col-sm-10">
   <input type="float" class="form-control" id="float" placeholder="Введите новую Операцию по карточке" value="<?=$kat ?>" name="operation" required >
  </div>    
 </div>
         <div class="form-group">
  <label for="sum" class="col-sm-2 control-label">Код Операции по карточке</label>
  <div class="col-sm-10">
   <input type="float" class="form-control" id="float" placeholder="Введите Код Операции по карточке" value="<?=$item ?>" name="code_operation" required >
  </div>    
 </div>
    
             
 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
   <button type="submit" class="btn btn-success">Сохранить</button>
  </div>
 </div>
</form>  