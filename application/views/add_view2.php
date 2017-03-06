<br>

<form class="form-horizontal" method="post" action="/save/<?=$link ?>">
  
    
     <div class="form-group">
  <label for="sum" class="col-sm-2 control-label">Категория</label>
  <div class="col-sm-10">
   <input type="float" class="form-control" id="float" placeholder="Введите новую Категорию" value="<?=$kat ?>" name="kat" required >
  </div>    
 </div>
    
             
 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
   <button type="submit" class="btn btn-success">Сохранить</button>
  </div>
 </div>
</form>  