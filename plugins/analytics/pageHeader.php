<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php print trim(Settings::pluginGet("trackingid"));?>']);
  _gaq.push(['_trackPageview']);

 _gaq.push(['_setCustomVar', 1, 'Logged in', '<?php print $loguserid?"Yes":"No";?>', 2]);
   
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
