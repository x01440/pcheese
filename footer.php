<footer class="site-footer">
<!-- footer widget area -->
    <div id="mainfooter">

        <!-- 1/3 -->
        <div class="four columns">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
        </div>
        <!-- /End 1/3 -->
        <!-- 2/3 -->
        <div class="four columns">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
        </div>
        <!-- /End 2/3 -->
        <!-- 3/3 -->
        <div class="four columns">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
        </div>
        <!-- /End 3/3 -->

    </div>
    <!-- /End Footer widget area -->
</footer>

</div><!-- container -->
<p><center><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></center></p>

<?php wp_footer(); ?>
</body>
</html>