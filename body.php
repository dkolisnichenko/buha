<?php 
?>
    
<body>
        <div class="container">
            <h1>Домашняя Бухгалтерия <h6 class="date"> <em> <?=date("F j, Y, g:i a") ?> </em></h6></h1>   
                             
        <h2>Баланс счета: <?=$balance ?>  грн. </h2>
       
<div class="dropdown">
 <button class="btn  btn-info dropdown-toggle"  type="button" data-toggle="dropdown">Управление счетом
</button>
                            
<ul class="dropdown-menu">
 <li><a href="rashod"> Расходы </a></li>
     <li><a href="prihod"> Доходы </a></li>
     <li> <a href="balance"> 
          Баланс карты 
         </a></li>
     <li class="divider"></li>    
     <li><a href="option"> <span class="glyphicon glyphicon-option-vertical"></span>Настройки </a></li>
 </ul>  
    
 <a href="stat"><button class="btn  btn-success "  type="button" >Статистика </button></a>  
 <a href="logout"><button class="btn  btn-link "  type="button" >Выйти </button></a>   

     </div>         
         </div> 
    </body>
