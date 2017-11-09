<?php
switch ($_POST['mat']){
    case 'plus':

        echo $_POST["tal1"]; echo "+"; echo $_POST["tal2"];  echo "="; echo $_POST[tal1] + $_POST[tal2];
        break;

    case 'minus':
        echo $_POST["tal1"]; echo "-"; echo $_POST["tal2"];  echo "="; echo $_POST[tal1] - $_POST[tal2];
        break;
    case 'gange':
        echo $_POST["tal1"]; echo "*"; echo $_POST["tal2"];  echo "="; echo $_POST[tal1] * $_POST[tal2];
        break;
    case 'divider':
        echo $_POST["tal1"]; echo "/"; echo $_POST["tal2"];  echo "="; echo $_POST[tal1] / $_POST[tal2];
        break;
    default;
}


