<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './Classes/Machine.php';
        include_once './Classes/Salle.php';
        
        $s1 = new Salle(1, "Salle 1");
        $s2 = new Salle(2,"Salle 2");
        
        $m1 =new Machine(1, "Dell", $s1);
        $m2 =new Machine(2, "HP", $s1);
        $m3 =new Machine(3, "Asus",$s2);
        
        $ss = Array($s1, $s2);
      
        
        $mm = array($m1, $m2, $m3);

        
        foreach ($ss as $s)
        {
            echo "- ".$s."<br>";
            
            foreach ($mm as $m)
            {
            if($s->getId()== $m->getSalle()->getId()){
                echo $m."<br>";
            }
            }
        }
        
        
        echo "Feelsbatman ";
       
        ?>
    </body>
</html>
