<script src="<?php echo SCRIPTSPATH; ?>bootstrap.min.js"></script>
<?php if (isset($bottomScripts)): ?>
  <?php foreach ($bottomScripts as $script): ?>
    <script src="<?php echo SCRIPTSPATH . $script; ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>
</body>
</html>
