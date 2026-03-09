</main><!-- /doc-main -->
</div><!-- /doc-layout -->

<?php if (isset($modals)) echo $modals; ?>

<!-- Framework JS -->
<script src="<?= $base ?>../Assets/js/airframe.js"></script>
<!-- Doc shell JS -->
<script src="<?= $base ?>js/doc-shell.js"></script>
<?php if (isset($extraJs)): foreach ($extraJs as $js): ?>
<script src="<?= $base ?>js/<?= $js ?>"></script>
<?php endforeach; endif; ?>

</body>
</html>