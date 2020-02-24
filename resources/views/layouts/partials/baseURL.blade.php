<script defer>
  window.baseURL = <?php
      if (env('APP_ENV') === 'local') {
        echo "''";
      } elseif (env('APP_ENV') === 'production') {
        echo "'http://msc-educ-smc.cmc.ec.gc.ca/motp-recruitment'";
      } elseif (env('APP_ENV') === 'external') {
        echo "'http://5to9design.ca'";
      }
  ?>
</script>