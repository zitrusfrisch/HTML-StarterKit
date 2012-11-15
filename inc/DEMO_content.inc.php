		<section id="content">

			<figure>
				<img src="http://lorempixel.com/g/1200/400/" alt="Demo Image" />
			</figure>

			<hr />

			<h1>Heading H1</h1>
			<h2>Heading H2</h2>
			<h3>Heading H3</h3>
			<h4>Heading H4</h4>
			<h5>Heading H5</h5>
			<h6>Heading H6</h6>

			<p>Lorem ipsum dolor <sup>super Text</sup> sit amet, consectetuer <sub>sub Text</sub> adipiscing elit, <a href="#">Link</a> sed diam nonummy nibh euismod <mark>markierter Text tincidunt ut laoreet</mark> dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet <strong>consectetuer adipiscing elit sediam</strong> nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
			<p><a class="arrow" href="#">Arrow-Link</a></p>
			<small>Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</small>

			<blockquote>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</blockquote>

			<hr />

			<p>
				<em>Emphasis</em><br />
				<strong>Strong</strong><br />
				<del>Deleted</del><br />
				<ins>Inserted</ins><br />
				<dfn>Definition</dfn>
			</p>

			<hr />

			<address>
				Daniel Riemer<br />
				zitrusfrisch<br />
				<a href="http://twitter.com/zitrusfrisch">Twitter URL</a>
			</address>

			<hr />

			<pre>
&lt;pre&gt;
Lorem ipsum dolor sit amet
&lt;/pre&gt;
</pre>

			<p>
				<code>
					&lt;code&gt;<br />
					Lorem ipsum dolor sit amet<br />
					&lt;/code&gt;
				</code>
			</p>

			<h2>Lists</h2>

			<h3>Unordered List</h3>

			<ul>
				<li>Unordered list item</li>
				<li>Unordered list item</li>
				<li>Unordered list item</li>
			</ul>

			<h3>Unordered List with nested items</h3>

			<ul class="ul-disc">
				<li>Unordered list item
					<ul class="ul-square">
						<li>Nested unordered list item</li>
						<li>Nested unordered list item</li>
						<li>Nested unordered list item</li>
					</ul>
				</li>
				<li>Unordered list item</li>
				<li>Unordered list item</li>
			</ul>

			<h3>Ordered List</h3>

			<ol>
				<li>Ordered list item</li>
				<li>Ordered list item</li>
				<li>Ordered list item</li>
			</ol>

			<h3>Ordered List with nested items</h3>

			<ol>
				<li>Unordered list item
					<ol>
						<li>Nested unordered list item</li>
						<li>Nested unordered list item</li>
						<li>Nested unordered list item</li>
					</ol>
				</li>
				<li>Unordered list item</li>
				<li>Unordered list item</li>
			</ol>

			<h2>Tables</h2>

			<table>
				<thead>
					<tr>
						<th>Table header one</th>
						<th>Table header two</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Lorem ipsum dolor sit amet</td>
						<td>Lorem ipsum dolor sit amet</td>
					</tr>
					<tr>
						<td colspan="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
					</tr>
					<tr>
						<td>Lorem ipsum dolor sit amet</td>
						<td>Lorem ipsum dolor sit amet</td>
					</tr>
					<tr>
						<td>Lorem ipsum dolor sit amet</td>
						<td>Lorem ipsum dolor sit amet</td>
					</tr>
					<tr>
						<td>Lorem ipsum dolor sit amet</td>
						<td>Lorem ipsum dolor sit amet</td>
					</tr>
				</tbody>
			</table>

			<h2>Form elements</h2>

			<form id="dummy" action="INSERT_SCRIPT_HERE" method="post">

				<fieldset>

					<!-- <legend>Legend</legend> -->

					<p>
						<label>Text Input</label>
						<input type="text" name="XXXXXXXXXXXX" placeholder="Ihr Username">
						<span>Associated help text</span>
					</p>
					<p>
						<label>Password</label>
						<input type="password" name="XXXXXXXXXXXX" placeholder="Ihr Passwort">
						<span>Associated help text</span>
					</p>

					<p class="error">
						<label>Input mit Fehlermeldung</label>
						<input type="text" name="XXXXXXXXXXXX" placeholder="Platzhalter">
						<span>Associated help text</span>
					</p>

					<p>
						<label>Suche</label>
						<input type="search" name="XXXXXXXXXXXX" placeholder="Suchbegriff eingeben&hellip;">
						<span>Associated help text</span>
					</p>

					<p>
						<label>Textarea</label>
						<textarea name="XXXXXXXXXXXX" rows="5" cols="20" placeholder="Mitteilung eingeben&hellip;"></textarea>
						<span>Associated help text</span>
					</p>


					<p>
						<label>Select field</label>
						<select name="XXXXXXXXXXXX">
							<option value="1">Lorem ipsum dolor</option>
							<option value="2">Lorem ipsum dolor</option>
							<option value="3">Lorem ipsum dolor</option>
						</select>
						<select name="XXXXXXXXXXXX">
						    <option>Lorem ipsum dolor</option>
						    <optgroup label="Options&hellip;">
						    	<option>Lorem ipsum dolor</option>
						    	<option>Lorem ipsum dolor</option>
						    	<option>Lorem ipsum dolor</option>
						    	<option>Lorem ipsum dolor</option>
						    </optgroup>
						    <optgroup label="More Options&hellip;">
						    	<option>Lorem ipsum dolor</option>
						    	<option>Lorem ipsum dolor</option>
						    	<option>Lorem ipsum dolor</option>
						    	<option>Lorem ipsum dolor</option>
						    </optgroup>
						</select>
					</p>

					<p>
						<span class="label">Checkboxes</span>
						<label><input type="checkbox" name="XXXXXXXXXXXX" checked="checked" /> Label</label>
						<label><input type="checkbox" name="XXXXXXXXXXXX" /> Label</label>
					</p>

					<p>
						<span class="label">Radio Buttons</span>
						<label><input type="radio" name="XXXXXXXXXXXX" checked="checked" /> Label</label>
						<label><input type="radio" name="XXXXXXXXXXXX" /> Label</label>
					</p>

					<p>
						<label>Upload</label>
						<input type="file" id="file" />
						<span>Associated help text</span>
					</p>


				</fieldset>

				<button type="submit">Send message</button> or <a href="#">cancel</a>.

			</form>

		</section><!-- End #content -->
