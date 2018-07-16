<h1>Posts do Blog</h1>

<p><?php echo $this->Html->link("Adicionar Post", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
                <th>Action</th>
        <th>Created</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

<?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
                </td>
                <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'tem certeza que deseja excluir esta postagem?')
            )?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
<?php endforeach; ?>

</table>