<?php 
    $this->load->view('app/estrutura/header');

    echo "<title>".$title_page."</title><body class='skin-default-dark fixed-layout'>";

    $this->load->view('app/estrutura/preloader');

    echo "<div id='main-wrapper'>";

    $this->load->view('app/estrutura/menu_top');
    $this->load->view('app/estrutura/menu_lateral');

    // CONTEUDO
    $this->load->view('app/fragmentos/dispositivos/content');

    // FOOTER
    $this->load->view('app/estrutura/footer');
?>
<script type="text/javascript">
    $('#slimtest1, #slimtest2, #slimtest3, #slimtest4').perfectScrollbar();
</script>
</body>
</html>