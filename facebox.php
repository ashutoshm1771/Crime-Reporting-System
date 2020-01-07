<script type="text/javascript" src="javascript/jquery.js"></script>
<link rel="stylesheet"  type="text/css" href="facebox/facebox.css" media="screen" />
<script type="text/javascript" src="facebox/facebox.js"></script>
<script type="text/javascript">
   jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loading_image : 'facebox/loading.gif',
        close_image : 'facebox/closeButton_.png'
      })
    })
  </script>
  <link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.3.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.accordion.js"></script>
	<link type="text/css" href="demos.css" rel="stylesheet" />
	<script type="text/javascript">
	$(function() {
		$("#accordion").accordion();
	});
	</script>