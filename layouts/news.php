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

        <article class="blog-post">
         <?php

         foreach ($blog_news as $blog_post) {
           echo "<hr>";
           echo $blog_post["post_title"] . "<br>";
           echo $blog_post["post_excerpt"] . "<br>";
           echo $blog_post["post_body"] . "<br>";
         }
         ?>
          
        </article>

        
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
