<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <!--  Sisesta siia kood -->
<?php 
 $a = rand(100, 200);;
 
  if (150 < $a) {
    echo "Juhuslik number {$a} on suurem kui 150";
  }
  elseif (150 > $a) {
    echo "Juhuslik number {$a} on väiksem kui 150";
  }

 ?>
        <h2>Juhuslik pilt</h2>
        <!--  Sisesta siia kood -->
          <img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/<?php echo rand(1, 13);?>.jpg"/>

        <h2>Kõikide piltide väljastamine</h2>
        <!--  Sisesta siia kood -->
<div id="images">
        <?php
          for ($i=1; $i <13 ; $i++) { 
            echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.$i.'.jpg">';
            
          }

        ?>
        </div>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>


