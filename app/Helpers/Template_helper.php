<?php 

function LoadTemplate($template_name, $vars = array(), $return = FALSE)
{
    if($return):
        $content  = view('Template/Sneat/Header', $vars, $return);
        $content .= view($template_name, $vars, $return);
        $content .= view('Template/Sneat/Footer', $vars, $return); 

        return $content;
    else:
        echo view('Template/Sneat/Header', $vars);
        // echo "here";exit;
        echo view($template_name, $vars);
        // echo "here";exit;
        echo view('Template/Sneat/Footer', $vars); 
    endif;
    }

    ?>