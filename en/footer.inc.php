<? if ($project!='NO'): ?>
<div id="project-nav">
	<h2><span class="pictogram">&#93;</span>Back</h2>
	<span><? echo $project_number ?> of <? echo $projects_total ?></span>
	<span><a href="">Previous</a> &nbsp;/&nbsp; <a href="">Next</a></span>
</div>
<? endif; ?>

<div id="info">
	<div class="txt grid2">
		<h4>Contacts</h4>
		<ul>
			<li><a class="tel" href="tel:+447919537622">+44 [0]7919 537 622</a></li>
			<li><a href="mailto:nuno@nunocoelhosantos.com?subject=Question%20about%20your%20work%20/%20Quote%20/%20Work%20proposal%20/%20Fan%20mail&body=Dear%20Nuno,%0D%0A%0D%0A%0D%0A">nuno&hairsp;@&hairsp;nunocoelhosantos.com</a></li>
			<li><a href="http://twitter.com/nunosans" target="_blank">@&hairsp;nunosans</a></li>
		</ul>
	</div>
	<div class="txt grid3">
		<h4>Newsletter</h4>
		<p>If you feel like having new work sent to your inbox, enter your email below</p>
		<form id="newsletter">
			<input type="email" name="email" placeholder="Email address">
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
	<div class="txt grid1">
		<h4>Also</h4>
		<ul>
			<li><a href="http://uk.linkedin.com/pub/nuno-coelho-santos/31/244/915" target="_blank">LinkedIn</a></li>
			<li><a href="http://www.facebook.com/nunosans" target="_blank">Facebook</a></li>
			<li><a href="http://github.com/ncoelhosantos" target="_blank">Github</a></li>
			<li><a href="http://twitter.com/nunosans" target="_blank">Twitter</a></li>
		</ul>
	</div>
</div>

<span id="copyright">
	© <?php date_default_timezone_set('Europe/London'); echo date("Y") ?> Nuno Coelho Santos &nbsp;/&nbsp;
	<a id="columns-on">Show Columns</a><a id="columns-off">Hide Columns</a>
</span>

</body>
</html>
