<!-- about -->
<div class="about" id="about">
	<div class="container">
		<div class="heading">
			<h2 data-aos="zoom-in">About Us</h2>
		</div>
		<?php 
		$about_data=$dbobj->fetchOne('about',1);
		// print_r($about_data);exit;
		?>
		<h4>What Make Our Coffe So Special ?</h4>
		<p>At Nordic, we believe that coffee is more than just a drink—it's an experience. Our coffee beans are sourced from the finest plantations, carefully roasted to bring out the rich, bold flavors you love. Whether you're looking for a smooth, mellow blend or a strong, energizing brew, we have something for every coffee lover.
        </p>
	</div>
</div>
<!-- //about -->
