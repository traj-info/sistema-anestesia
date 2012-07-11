<?php $this->load->view('header'); ?>
<?php $this->load->view('grupos_mensagens'); ?>
<?php echo (isset($msg) && isset($msg_type)) ? msg($msg, $msg_type) : ''; ?>
<?php echo ($this->input->get('msg') && $this->input->get('msg_type')) ? msg(urldecode(html_entity_decode($this->input->get('msg', TRUE))), urldecode(html_entity_decode($this->input->get('msg_type', TRUE)))) : ''; ?>
<h2><?php echo $title; ?></h2>
<?php echo $links; ?>
<div class='pag_indice' id='pag_got_messages'>Total de mensagens: <strong><?php echo $total; ?></strong> | Vendo mensagem <?php echo $comeco; ?> a <?php echo $final; ?></div>
<?php
if($total > 0)
{
	echo "<table id='view_got_messages' class='tabela1 tabela_estilo1'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>#</th>";
	echo "<th>Lida</th>";
	echo "<th>De</th>";
	echo "<th>Assunto</th>";
	echo "<th>Data</th>";
	echo "<th>Opções</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	
	foreach($results as $i => $u)
	{
		$status = ($u->read_count > 0) ? 'lida' : 'não lida';
		$from = $u->from->nome;
		$data = $u->created;
	
		echo "<tr id='" . $u->id . "'>";
		echo "<td>" . ($i + $comeco) . "</td>";
		echo "<td>" . $status . "</td>";
		echo "<td>" . $from . "</td>";
		echo "<td>" . $u->subject . "</td>";
		echo "<td>" . $data . "</td>";
		echo "<td><ul class='view_opcoes'>";
		echo "<li class='op_excluir'><a title='Excluir grupo' onclick=\"confirmar_delete('" . base_url('grupos/delete/' . $u->id) . "', '" . $u->id . "', '" . strtoupper($u->name) . "')\" href='#'>Excluir</a></li>";
		echo "<li class='op_editargrupo'><a title='Editar grupo' href='" . base_url('grupos/edit/' . $u->id) . "'>Editar grupo</a></li>";
		echo "<li class='op_assistentes'><a title='Mostrar assistentes' onclick=\"mostrar_assistentes('" . $u->id . "')\" href='#'>Mostrar assistentes</a></li>";
		echo "</ul></td>";
		
		echo "</tr>";
		
		echo "<tr class='detalhes_assistentes' id='assist_" . $u->id . "'>";
		echo "<td colspan='6'><ul>";
		
		echo $u->body;
		
		echo "</ul></td>";
		echo "</tr>";
	}
	echo "</table>";
}

?>

<?php $this->load->view('footer'); ?>