</main>

</div>
<footer id="footer" role="contentinfo">
<nav>
    <?php
      $args = array(
        'theme_location' => 'footer_menu',
        'menu_class' => 'footer-menu',
      );
      wp_nav_menu($args);
    ?>
  </nav>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>