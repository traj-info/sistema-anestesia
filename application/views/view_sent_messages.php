<?php $this->load->view('header'); ?>
<?php $this->load->view('grupos_mensagens'); ?>
<?php echo (isset($msg) && isset($msg_type) )? msg($msg, $msg_type) : ''; ?>
<h2><?php echo $title; ?></h2>
<h3>Índice de mensagens recebidas</h3>


<?php $this->load->view('footer'); ?>