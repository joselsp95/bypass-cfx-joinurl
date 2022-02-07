// holis
// Switch de light/dark de la web

document.getElementById('themeSwitch').addEventListener('change', function(event){
    (event.target.checked) ? document.documentElement.setAttribute('data-theme', 'light') : document.documentElement.setAttribute('data-theme', 'dark');
  });
  
// Mostramos o ocultamos el div de exportacion de archivos 
  
function valueChanged()
    {
        if($('.switchExport').is(":checked"))   
            $(".pcapExportOpt").show();
        else
            $(".pcapExportOpt").hide();
    }
//

function copiarValor() {
    /* Get the text field */
    var copyText = document.getElementById("bypassed");
  
    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */
  
     /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);
  
    /* Alert the copied text */
    alert("Texto copiado: " + copyText.value);
  }