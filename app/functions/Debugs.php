<?php
namespace app\functions;

class Debugs{

    public function console_log($debug){
        echo "<script type='text/javascript'>console.log($debug);</script>";
    }

    public function confirmAlert($msnPergunta,$msnConfirmacao, $rota){
        
        if($rota == null){
            echo "<script>
                if(window.confirm('$msnPergunta'))
                {
                    window.alert('$msnConfirmacao');
                }
            </script>";
        }
        else
        {
            echo "<script>
                if(window.confirm('$msnPergunta'))
                {
                    window.open('$rota','$msnConfirmacao');
                }
            </script>";
            include "app/views/" . $rota .".php";
        }
        
        
    }
    public function inforAlert($msnInformacao){
        echo "<script>
                window.alert('$msnInformacao');
            </script>";
    }
    public function inforAlertRedirect($msnInformacao, $rota){
        echo "<script>
                window.alert('$msnInformacao');
            </script>";
        if($rota == null)
        {
            echo "<script>
            window.location='$rota'
            </script>";
        }
        else
        {
            header("Location: ". URL_BASE . $rota);
        }
    }
}
?>