			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
			window.onload = function() {
			// Find alle elementer med undersider.
			  var menuItems = document.querySelectorAll(".menu-item-has-children > a");
	
	// For hvert element med undersider
			menuItems.forEach(function(menuItem){
				// Lav klik event for hvert element i løkken.
			  menuItem.addEventListener('click', function(e) {
				  // Fortæl a tagget at den ikke skal følge sit link.
				e.preventDefault();
				// Find det klikkede elements parent.
				var clicked = this.parentNode;
				// På baggrund af det klikkede elements parent, find den skjulte sub menu.
				var subMenu = clicked.querySelector(".sub-menu");
				// Find den nuværende åbne menu.
				var openMenu = document.querySelector(".sub-menu.show");

				// Hvis der er en åben menu og det klikkede elements under menu ikke er åben.
				if(openMenu != null && !subMenu.classList.contains("show")) {
					// Så skjul den åbne menu.
					openMenu.classList.remove("show");
				}
				// Toggle sub menuen for det klikkede element.
				subMenu.classList.toggle("show");  
			  })
			})

			};
		</script>

	</body>
</html>
