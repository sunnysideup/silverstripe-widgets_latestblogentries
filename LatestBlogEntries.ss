<% if Links %>
<ul class="LatestBlogEntries">
	<% loop Links %>
		<li><a class="$LinkOrSection $FirstLast" href="$Link"><span>$MenuTitle</span></a></li>
	<% end_loop %>
</ul>
<% end_if %>
