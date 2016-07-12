<div class="cuerpo">
    <ul class="galeria">
        <?php
            require_once 'co.php';
            $sql=  mysql_query("select * from foto");
            while($res=  mysql_fetch_array($sql)){
            //echo $res["nombre"];
            //echo '<li class="galer"<img src="'.$res["foto"].'" width="100" heigth="100"><br>';
                echo '<li class="galeria__item"><img src="'.$res["foto"].'" width="100" heigth="100" class="galeria__img"></li>';
                    }   
                ?>
    </ul>
</div>