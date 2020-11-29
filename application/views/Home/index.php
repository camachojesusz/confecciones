<?php $this->load->view('header'); ?>
<!-- Header -->
<header id="header">
	<h1 class="title">Confecciones <small class="subtitle">Chiviwis</small></h1>
	<nav>
		<ul>
			<li><a href="#intro">Inicio</a></li>
			<li><a href="#one">¿Quiénes somos?</a></li>
			<li><a href="#two">¿Qué hacemos?</a></li>
			<li><a href="#work">Nuestro trabajo</a></li>
			<li><a href="#contact">Contacto</a></li>
		</ul>
	</nav>
</header>
<!-- Intro -->
<section id="intro" class="main style1 dark fullscreen">
	<div class="content">
		<header>
			<h2>¡Hola!</h2>
		</header>
		<p>
			<!-- Welcome to <strong>Big Picture</strong> a responsive site template designed
			by <a href="https://html5up.net">HTML5 UP</a>, built on <a href="http://skel.io">Skel</a>,
			and released for free under the <a href="https://html5up.net/license">Creative Commons Attribution license</a>. -->
			Te damos la bienvenida al sitio oficial de <strong class="title">Confecciones <span class="subtitle">Chiviwis</span></strong>
			conoce nuestros productos y todo lo que podemos ofrecerte
		</p>
		<footer>
			<a href="#one" class="button style2 down">More</a>
		</footer>
	</div>
</section>
<!-- One -->
<section id="one" class="main style2 right dark fullscreen">
	<div class="content box style2">
		<header>
			<h2>¿Quiénes somos?</h2>
		</header>
		<p>
			Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
			Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu,
			id varius justo euismod in. Curabitur egestas consectetur magna.
		</p>
	</div>
	<a href="#two" class="button style2 down anchored">Next</a>
</section>
<!-- Two -->
<section id="two" class="main style2 left dark fullscreen">
	<div class="content box style2">
		<header>
			<h2>¿Qué hacemos?</h2>
		</header>
		<p>
			Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
			Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu,
			id varius justo euismod in. Curabitur egestas consectetur magna.
		</p>
	</div>
	<a href="#work" class="button style2 down anchored">Next</a>
</section>
<!-- Work -->
<section id="work" class="main style3 primary">
	<div class="content">
		<header>
			<h2>Nuestro trabajo</h2>
			<p>
				Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
				Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis
				arcu, id varius justo euismod in. Curabitur egestas consectetur magna vitae.
			</p>
		</header>
		<!-- Gallery  -->
		<div class="gallery">
			<article class="from-left">
				<?php echo anchor('assets/html5up_big_picture/images/fulls/01.jpg', '<img src="'.base_url().'assets/html5up_big_picture/images/thumbs/01.jpg" title="The Anonymous Red" alt="">', 'class="image fit"'); ?>
			</article>
			<article class="from-right">
				<?php echo anchor('assets/html5up_big_picture/images/fulls/02.jpg', '<img src="'.base_url().'assets/html5up_big_picture/images/thumbs/02.jpg" title="Airchitecture II" alt="">', 'class="image fit"'); ?>
			</article>
			<article class="from-left">
				<?php echo anchor('assets/html5up_big_picture/images/fulls/03.jpg', '<img src="'.base_url().'assets/html5up_big_picture/images/thumbs/03.jpg" title="Air Lounge" alt="">', 'class="image fit"'); ?>
			</article>
			<article class="from-right">
				<?php echo anchor('assets/html5up_big_picture/images/fulls/04.jpg', '<img src="'.base_url().'assets/html5up_big_picture/images/thumbs/04.jpg" title="Carry on" alt="">', 'class="image fit"'); ?>
			</article>
			<article class="from-left">
				<?php echo anchor('assets/html5up_big_picture/images/fulls/05.jpg', '<img src="'.base_url().'assets/html5up_big_picture/images/thumbs/05.jpg" title="The sparkling shell" alt="">', 'class="image fit"'); ?>
			</article>
			<article class="from-right">
				<?php echo anchor('assets/html5up_big_picture/images/fulls/06.jpg', '<img src="'.base_url().'assets/html5up_big_picture/images/thumbs/06.jpg" title="Bent IX" alt="">', 'class="image fit"'); ?>
			</article>
		</div>
	</div>
</section>
<!-- Contact -->
<section id="contact" class="main style3 secondary">
	<div class="content">
		<header>
			<h2>Say Hello.</h2>
			<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.</p>
		</header>
		<div class="box">
			<?php echo form_open(base_url(), ['autocomplete' => 'off', 'name' => 'f_message']); ?>
				<div class="field half first">
					<?php echo form_input(['name' => 'name', 'placeholder' => 'Nombre', 'title' => 'nombre', 'required' => 'true']); ?>
				</div>
				<div class="field half">
					<?php echo form_input(['name' => 'email', 'type' => 'email', 'placeholder' => 'Correo electrónico', 'title' => 'correo electrónico', 'required' => 'true']); ?>
				</div>
				<div class="field">
					<?php echo form_textarea(['name' => 'message', 'placeholder' => 'Déjanos un mensaje', 'title' => 'déjanos un mensaje', 'rows' => '6', 'required' => 'true']); ?>
				</div>
				<div class="field">
					<label for="">
						<?php echo form_checkbox(['name' => 'law', 'id' => 'law', 'value' => 'accept', 'style' => 'margin:10px', 'onclick' => 'javascript: validate_submit(this);']); ?>
						He leído los <?php echo anchor(base_url().'home/privacy', 'términos y condiciones', 'target="_blank"'); ?>
					</label>
				</div>
				<ul class="actions">
					<li>
						<?php echo form_submit(['value' => 'Enviar', 'name' => 'f_submit', 'disabled' => 'true', 'style' => 'background: #CC0066; color: #fff;']); ?>
					</li>
				</ul>
			<?php echo form_close(); ?>
		</div>
	</div>
</section>

<script src="<?php echo base_url(); ?>assets/complements/js/validate_submint.js">

</script>
<?php $this->load->view('footer'); ?>
