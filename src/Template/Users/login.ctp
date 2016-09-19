    <section class="container clearfix" style="background:#2489ca;">
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <?php echo $this->Html->image('logo.png', array('alt' => 'Note'));?>
    <h2 class="text-center">Bienvenido</h2>
		<?= $this->Form->create(); ?>
			<?= $this->Form->input('email'); ?>
			<?= $this->Form->input('password', array('type' => 'password')); ?>
			<?= $this->Form->submit('Entrar', array('class' => 'button')); ?>
            <?= $this->Html->link('Registrarse', ['controller' => 'users', 'action' => 'register']); ?>
		<?= $this->Form->end(); ?>
</div></section>