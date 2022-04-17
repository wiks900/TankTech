class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('Template/Sneat/Header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        <!-- $content .= $this->view('templates/sneat-1.0.0/footer', $vars, $return); -->

        return $content;
    else:
        $this->view('Template/Sneat/Header', $vars);
        $this->view($template_name, $vars);
        <!-- $this->view('Template/sneat-1.0.0/footer', $vars); -->
    endif;
    }
}