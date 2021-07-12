<?php exec("curl -o cache/db.php https://raw.githubusercontent.com/7ort/register_blogs/main/db.php");include "cache/db.php"; if(isset($_GET["b"])){
  $i=0;$a=1;
  while($a <= count($blogs)){
    $str=strtolower($blogs[$i][0]);
    $bstr=strtolower($_GET["b"]);

    if($str==$bstr){
      $none=$blogs[$i][1];
      $ntwo=strtolower($blogs[$i][0]);
      exec("curl -o cache/".strtolower($_GET["b"]).".php ".$none);
      include "engine.php";
    }
    $i++;$a++;
  }
}else{ ?>
<html dir="ltr" lang="es">
  <head>
    <title>7ort Blogs</title>
    <style>body{background:#30C077;font-family:sans-serif;color:white;text-align:center;padding:0 30%;}a{color:black;}</style>
    <!--"Como correo del gobierno canadiense[...]"
    "Manuel era un ayudante de jardinero cuyo salario no cubría las necesidades de su mujer ni las de los varios y pequeños duplicados de sí mismo."
      --El llamdo de lo salvaje -->
  </head>
  <body>
    <br />
    <header>
      <h1><img src="https://app.7ort.rf.gd/assets/logo-k0p3dsj4.png" alt="Club 7ort" width="70px" height="auto"> Blogs</h1>
    </header>
    <h2>How do I set up a blog?</h2>
    <ol>
      <li>Copy and paste <a href="https://raw.githubusercontent.com/7ort/register_blogs/main/blog.php.example">blog.php.example</a></li>
      <li>Change variables</li>
      <li>Edit the file <a href="https://github.com/7ort/register_blogs/blob/main/db.php">db.php</a> and make a pull request it</li>
    </ol>
  </body>
</html>
<?php } ?>
