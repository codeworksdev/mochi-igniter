            </div>

        </div>

        <!-- Latest compiled and minified JavaScript -->
        <script src="mochi/js/jquery/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="mochi/js/helpers/modernizr-min.js"></script>
        <script src="mochi/js/helpers/underscore-min.js"></script>
        <script src="mochi/js/helpers/sprintf.min.js"></script>
        <script src="mochi/js/helpers/underscore.string.min.js"></script>
        <script src="mochi/js/helpers/basil.min.js"></script>
        <script src="mochi/js/mochi.min.js"></script>
        <script src="frontend/js/onload.js"></script>

        <?php if (file_exists($mochi->jsOnloadPage)): ?>
            <script src="<?php echo $mochi->jsOnloadPage; ?>"></script>
        <?php endif; ?>
    </body>
</html>
