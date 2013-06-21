<?php include('header.php') ?>
				<h1 class="title">Demonstrating elements</h1>
				<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
				<hr>
				<h1>Heading 1</h1>
				<h2>Heading 2</h2>
				<h3>Heading 3</h3>
				<h4>Heading 4</h4>
				<h5>Heading 5</h5>
				<h6>Heading 6</h6>
				<p><small><a href="#">[top]</a></small></p>
				<hr>
				<h2 id="paragraph">Paragraph</h2>
				<p>Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
				<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
				<p><small><a href="#">[top]</a></small></p>
				<hr>
				<h2 id="list_types">List Types</h2>
				<h3>Definition List</h3>
				<dl>
				<dt>Definition List Title</dt>
				<dd>This is a definition list division.</dd>
				</dl>
				<h3>Ordered List</h3>
				<ol>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
				</ol>
				<h3>Unordered List</h3>
				<ul>
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
				</ul>
				<p><small><a href="#">[top]</a></small></p>
				<hr>
				<h2 id="form_elements">Forms</h2>
				<fieldset>
				<legend>Legend</legend>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>
					<form>
					<h2>Form Element</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.</p>
					<p><label for="text_field">Text Field:</label><br>
							<input id="text_field" type="text"></p>
					<p><label for="text_area">Text Area:</label><br>
							<textarea id="text_area"></textarea></p>
					<p><label for="select_element">Select Element:</label></p>
					<select name="select_element">
								<optgroup label="Option Group 1">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
								</optgroup>
								<optgroup label="Option Group 2">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
								</optgroup>
							</select>
					<p></p>
					<p><label for="radio_buttons">Radio Buttons:</label></p>
					<p>
						<input class="radio" name="radio_button" value="radio_1" type="radio"> Radio 1<br><br>
						<input class="radio" name="radio_button" value="radio_2" type="radio"> Radio 2<br><br>
						<input class="radio" name="radio_button" value="radio_3" type="radio"> Radio 3<br>
					</p>
					<p>
						<label for="checkboxes">Checkboxes:</label>
						<input class="checkbox" name="checkboxes" value="check_1" type="checkbox"> Radio 1<br><br>
						<input class="checkbox" name="checkboxes" value="check_2" type="checkbox"> Radio 2<br><br>
						<input class="checkbox" name="checkboxes" value="check_3" type="checkbox"> Radio 3<br>
					</p>
					<p>
						<label for="password">Password:</label><br>
						<input class="password" name="password" type="password">
					</p>
					<p>
						<label for="file">File Input:</label><br>
						<input class="file" name="file" type="file">
					</p>
					<p>
						<input class="button" value="Clear" type="reset"> <input class="button" value="Submit" type="submit">
					</p>
					</form>
				</fieldset>
				<p><small><a href="#">[top]</a></small></p>
				<hr>
				<h2 id="tables">Tables</h2>
				<table cellpadding="0" cellspacing="0">
				<tbody><tr>
				<th>Table Header 1</th>
				<th>Table Header 2</th>
				<th>Table Header 3</th>
				</tr>
				<tr>
				<td>Division 1</td>
				<td>Division 2</td>
				<td>Division 3</td>
				</tr>
				<tr class="even">
				<td>Division 1</td>
				<td>Division 2</td>
				<td>Division 3</td>
				</tr>
				<tr>
				<td>Division 1</td>
				<td>Division 2</td>
				<td>Division 3</td>
				</tr>
				</tbody></table>
				<p><small><a href="#">[top]</a></small></p>
				<hr>
				<h2 id="misc">Misc Stuff</h2>
				<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p>
				<blockquote><p>
					“This stylesheet is going to help so freaking much.” <br>-Blockquote
				</p></blockquote>
<?php include('footer.php') ?>