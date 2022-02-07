

<!DOCTYPE html>
<html lang="es" data-theme="dark">
    <head>
        <!-- Meta tags -->  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BYPASS CFX FIVEM SERVER URL</title>
        <!-- Scripts -->
        <link rel="stylesheet" href="assets/css/pico.min.css">
		
       

       
    </head>
    <body>
        <nav class="container">
            <ul>
               <li>
                <div class="switch">
                    <input class="switch__input" type="checkbox" id="themeSwitch">
                    <label aria-hidden="true" class="switch__label" for="themeSwitch">Light Mode</label>
                    <div aria-hidden="true" class="switch__marker"></div>
                  </div>
               </li>
            </ul>
            <ul>
              <li><strong>BYPASS CFX FIVEM SERVER URL</strong></li>
            </ul>
            <ul>
              <li><a href="#" class="secondary">…</a></li>
              <a id="top"></a>

            </ul>
          </nav>
          <!-- content -->

          <?php if (!empty($_POST)): ?>

<?php $url = $_POST["urlb"];
 
 


//$url = 'https://cfx.re/join/3yazl8';
$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, true); // this will include headers in request
curl_setopt($ch, CURLOPT_NOBODY, true); // this option will remove body from response
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$headers = explode(PHP_EOL, $response);
$variable = trim(str_replace('x-citizenfx-url:','',$headers[6])); ?>

<main class="container">
        <h3>     La ip/url bypasseada es: </h3>
        <div class="grid">
          <form>
            
          <input type="text" value="<?php print_r($variable); ?>" readonly id="bypassed">
          <div class="grid">
          <a href="#" role="button" class="contrast outline" onclick="copiarValor()">Copiar</a>
          <a href="index.php" role="button" class="secondary" >Bypassear otra URL</a>

</div>
          </form>
          </div>
           
                      
        </main>

<?php else: ?>
        <main class="container">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                

                <!-- Markup example 2: input is after label -->
                <label for="urlb">URL (ex: https://cfx.re/join/1sylu9):</label>
                <input type="url" id="urlb" name="urlb" placeholder="ex: https://cfx.re/join/1sylu9" required>
                

                <!-- Button -->
                <button type="submit">Bypassear</button>

                </form>
                      
        </main>
        <?php endif; ?>
        <footer class="container">
          <div class="grid">
            <div><small> Hecho con 💖 por <a href="https://github.com/joselsp95">Jose Luis S. P.</a></small></div>
            <div></div>
            <div></div>
            <div><a class="secondary" href="#top">Back to top</a></div>
          </div>
        </footer>
        <!-- scripts js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/bypass.js"></script>
		
		<!-- fin scripts js -->
    </body>
</html>