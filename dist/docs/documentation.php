<div class="tab-content">
<h1 class="sr-only">Introduction</h1>
<div class="tab-pane active" id="about" role="tabpanel">
	<h2><?php _e('About', 'bootstrap-4-shortcodes'); ?></h2>
	<p>
	<?php _e('WordPress plugin that provides shortcodes for easier use of the Bootstrap 4 styles and components in your content.', 'bootstrap-4-shortcodes'); ?>
	</p>
</div>

<h1 class="sr-only"><?php _e('Layout', 'bootstrap-4-shortcodes'); ?></h1>
<div class="tab-pane" id="grid" role="tabpanel">
<h2><?php _e('Grid', 'bootstrap-4-shortcodes'); ?></h2>

	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[row]
  [column sm&#x3D;&quot;6&quot;] ... [&#x2F;column]
  [column sm&#x3D;&quot;6&quot;] ... [&#x2F;column]
[&#x2F;row]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example with container', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">The container component is also supported in case your theme doesn&apos;t include a container.</p>
			<pre><code class="d-block p-4">[container]
  [row]
    [column xs&#x3D;&quot;6&quot;] ... [&#x2F;column]
    [column xs&#x3D;&quot;6&quot;] ... [&#x2F;column]
  [&#x2F;row]
[&#x2F;container]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example with fluid container', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">The container-fluid component is supported as a discrete shortcode.</p>
			<pre><code class="d-block p-4">[container-fluid]  
[row]
    [column xs&#x3D;&quot;6&quot;] ... [&#x2F;column]
    [column xs&#x3D;&quot;6&quot;] ... [&#x2F;column]
  [&#x2F;row]
[&#x2F;container-fluid]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[container] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[row] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[column] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>xs</td>
			<td><?php _e('Size of column on extra small screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>1-12, flex</td>
			<td></td>
		</tr>
		<tr>
			<td>sm</td>
			<td><?php _e('Size of column on small screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>1-12, flex</td>
			<td></td>
		</tr>
		<tr>
			<td>md</td>
			<td><?php _e('Size of column on medium screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>1-12, flex</td>
			<td></td>
		</tr>
		<tr>
			<td>lg</td>
			<td><?php _e('Size of column on large screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>1-12, flex</td>
			<td></td>
		</tr>
		<tr>
			<td>xl</td>
			<td><?php _e('Size of column on extra large screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>1-12, flex</td>
			<td></td>
		</tr>
		<tr>
			<td>offset_xs</td>
			<td><?php _e('Offset on extra small screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>offset_sm</td>
			<td><?php _e('Offset on small screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>offset_md</td>
			<td><?php _e('Offset on medium screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>offset_lg</td>
			<td><?php _e('Offset on large screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>offset_xl</td>
			<td><?php _e('Offset on extra large screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>pull_xs</td>
			<td><?php _e('Pull on extra small screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>pull_sm</td>
			<td><?php _e('Pull on small screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>pull_md</td>
			<td><?php _e('Pull on medium screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>pull_lg</td>
			<td><?php _e('Pull on large screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>pull_xl</td>
			<td><?php _e('Pull on extra large screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>push_xs</td>
			<td><?php _e('Push on extra small screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>push_sm</td>
			<td><?php _e('Push on small screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>push_md</td>
			<td><?php _e('Push on medium screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>push_lg</td>
			<td><?php _e('Push on large screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>push_xl</td>
			<td><?php _e('Push on extra large screens.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>0-12</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="media-object" role="tabpanel">
<h2><?php _e('Media Object', 'bootstrap-4-shortcodes'); ?></h2>

	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[media]
  [media-object]
    &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder.png&quot;&gt;
  [&#x2F;media-object]
  [media-body]
    [media-heading] &lt;h4&gt;Media Heading&lt;&#x2F;h4&gt; [&#x2F;media-heading]
    ...
  [&#x2F;media-body]
[&#x2F;media]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Media List', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Wrap several <code>[media-object]</code>s in <code>[media-list]</code>, useful for comment threads or articles lists.</p>
			<pre><code class="d-block p-4">[media-list]
  [media]
    [media-object]
      &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder.png&quot;&gt;
    [&#x2F;media-object]
    [media-body]
      [media-heading] &lt;h4&gt;Media Heading&lt;&#x2F;h4&gt; [&#x2F;media-heading]
      ...
    [&#x2F;media-body]
  [&#x2F;media]
  [media]
    [media-object]
      &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder.png&quot;&gt;
    [&#x2F;media-object]
    [media-body]
      [media-heading] &lt;h4&gt;Media Heading&lt;&#x2F;h4&gt; [&#x2F;media-heading]
      ...
    [&#x2F;media-body]
  [&#x2F;media]
[&#x2F;media-list]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[media] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[media-object] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>media</td>
			<td><?php _e('Whether the image pulls to the left or right.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>left, right</td>
			<td>left</td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[media-body] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[media-heading] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('<code>[media-heading]</code> should contain heading tag (<code>h1</code>, <code>h2</code>, <code>h3</code>, <code>h4</code>, <code>h5</code>, or <code>h6</code>), inserted using the WordPress editor. If a header tag is not added <code>h4</code> will be inserted automatically.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="responsive-utilities" role="tabpanel">
<h2><?php _e('Responsive Utilities', 'bootstrap-4-shortcodes'); ?></h2>

	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[hidden down&#x3D;&quot;sm&quot;] ... [&#x2F;hidden]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[hidden] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>up</td>
			<td><?php _e('Hide the contents on this screen size and above.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>xs, sm, md, lg, xl</td>
			<td></td>
		</tr>
		<tr>
			<td>down</td>
			<td><?php _e('Hide the contents on this screen size and below.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>xs, sm, md, lg, xl</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<h1 class="sr-only"><?php _e('Components', 'bootstrap-4-shortcodes'); ?></h1>
<div class="tab-pane" id="alerts" role="tabpanel">
<h2><?php _e('Alerts', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Any links, headings, or strong or bold text within an alert will automatically be styled to match the alert type.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[alert type&#x3D;&quot;primary&quot;] ... [&#x2F;alert]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Dismissible', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[alert type&#x3D;&quot;primary&quot; dismissible] ... [&#x2F;alert]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[alert] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Any links, headings, or strong or bold text within an alert will automatically be styled to match the alert type.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>type</td>
			<td><?php _e('The type of the alert.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>primary, secondary, success, info, warning, danger, light, dark</td>
			<td>primary</td>
		</tr>
		<tr>
			<td>dismissible</td>
			<td><?php _e('If the alert should be dismissable.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="badge" role="tabpanel">
<h2><?php _e('Badge', 'bootstrap-4-shortcodes'); ?></h2>

	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[badge type&#x3D;&quot;primary&quot;] Lorem [&#x2F;badge]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Pill badges', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[badge type&#x3D;&quot;primary&quot; pill] Ipsum [&#x2F;badge]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Links', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[badge type&#x3D;&quot;primary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Dolor Sit&lt;&#x2F;a&gt; [&#x2F;badge]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[badge] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>type</td>
			<td><?php _e('The type of the badge.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>primary, secondary, success, info, warning, danger, light, dark</td>
			<td>primary</td>
		</tr>
		<tr>
			<td>pill</td>
			<td><?php _e('If the badge should be styled as a pill.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="breadcrumb" role="tabpanel">
<h2><?php _e('Breadcrumb', 'bootstrap-4-shortcodes'); ?></h2>

	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Remember that <code>[breadcrumb]</code> must wrap a set of links inserted via the WordPress editor.</p>
			<pre><code class="d-block p-4">[breadcrumb]
  &lt;a href&#x3D;&quot;#link1&quot;&gt; Link 1 &lt;&#x2F;a&gt;
  &lt;a href&#x3D;&quot;#link2&quot;&gt; Link 2 &lt;&#x2F;a&gt;
  [active] Link 3 [&#x2F;active]
[&#x2F;breadcrumb]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[breadcrumb] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="buttons" role="tabpanel">
<h2><?php _e('Buttons', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Wrap any <code>a</code>, <code>button</code>, or <code>input</code> tag inserted via the WordPress editor in <code>[button]</code> to give it button properties and classes.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Wrap any <code>a</code>, <code>button</code>, or <code>input</code> tag inserted via the WordPress editor in <code>[button]</code> to give it button properties and classes.</p>
			<pre><code class="d-block p-4">[button type&#x3D;&quot;primary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Button Text&lt;&#x2F;a&gt; [&#x2F;button]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Large button', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Set button sizes with the <code>size</code> parameter.</p>
			<pre><code class="d-block p-4">[button type&#x3D;&quot;primary&quot; size&#x3D;&quot;lg&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Button Text&lt;&#x2F;a&gt; [&#x2F;button]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Button-block example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Set <code>block</code> flag for block-style buttons.</p>
			<pre><code class="d-block p-4">[button type&#x3D;&quot;primary&quot; block] &lt;a href&#x3D;&quot;#link&quot;&gt;Button Text&lt;&#x2F;a&gt; [&#x2F;button]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[button] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Wrap any <code>a</code>, <code>button</code>, or <code>input</code> tag inserted via the WordPress editor in <code>[button]</code> to give it button properties and classes.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>type</td>
			<td><?php _e('The type of the button.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>primary, secondary, success, info, warning, danger, light, dark, link, outline-primary, outline-secondary, outline-success, outline-info, outline-warning, outline-danger, outline-light, outline-dark</td>
			<td>primary</td>
		</tr>
		<tr>
			<td>size</td>
			<td><?php _e('The size of the button.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>sm, lg</td>
			<td></td>
		</tr>
		<tr>
			<td>block</td>
			<td><?php _e('Flag whether the button should be a block-level button.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>active</td>
			<td><?php _e('Flag whether the button should styled as active.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>disabled</td>
			<td><?php _e('Flag whether the button should styled as disabled.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="button-groups" role="tabpanel">
<h2><?php _e('Button Groups', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Remember that <code>[button]</code> must wrap an <code>a</code>, <code>button</code>, or <code>input</code> tag inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Remember that <code>[button]</code> must wrap an <code>a</code>, <code>button</code>, or <code>input</code> tag inserted via the WordPress editor.</p>
			<pre><code class="d-block p-4">[button-group]
  [button type&#x3D;&quot;secondary&quot;] [active]&lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt;[&#x2F;active] [&#x2F;button]
  [button type&#x3D;&quot;secondary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt; [&#x2F;button]
  [button type&#x3D;&quot;secondary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt; [&#x2F;button]
[&#x2F;button-group]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Vertical example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Set the <code>vertical</code> flag to make the buttons appear vertically stacked rather than horiztonally.</p>
			<pre><code class="d-block p-4">[button-group vertical]
  [button type&#x3D;&quot;secondary&quot;] [active]&lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt;[&#x2F;active] [&#x2F;button]
  [button type&#x3D;&quot;secondary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt; [&#x2F;button]
  [button type&#x3D;&quot;secondary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt; [&#x2F;button]
[&#x2F;button-group]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Button Toolbar', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Wrap <code>[button group]s</code> in <code>[button-toolbar]</code> to make a button toolbar.</p>
			<pre><code class="d-block p-4">[button-toolbar]
  [button-group]
    [button type&#x3D;&quot;secondary&quot;] [active]&lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt;[&#x2F;active] [&#x2F;button]
    [button type&#x3D;&quot;secondary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt; [&#x2F;button]
    [button type&#x3D;&quot;secondary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt; [&#x2F;button]
  [&#x2F;button-group]
  [button-group]
    [button type&#x3D;&quot;secondary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt; [&#x2F;button]
    [button type&#x3D;&quot;secondary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt; [&#x2F;button]
    [button type&#x3D;&quot;secondary&quot;] &lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt; [&#x2F;button]
  [&#x2F;button-group]
  [button-group]
    [button type&#x3D;&quot;secondary&quot;] [disabled]&lt;a href&#x3D;&quot;#link&quot;&gt;Text&lt;&#x2F;a&gt;[&#x2F;disabled] [&#x2F;button]
  [&#x2F;button-group]
[&#x2F;button-toolbar]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[button-group] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Remember that <code>[button]</code> must wrap an <code>a</code>, <code>button</code>, or <code>input</code> tag inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>size</td>
			<td><?php _e('The size of the button.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>sm, lg</td>
			<td></td>
		</tr>
		<tr>
			<td>vertical</td>
			<td><?php _e('Flag whether the button is vertical.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[button-toolbar] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Remember that <code>[button]</code> must wrap an <code>a</code>, <code>button</code>, or <code>input</code> tag inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="cards" role="tabpanel">
<h2><?php _e('Cards', 'bootstrap-4-shortcodes'); ?></h2>

	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[card]
  [card-body]
    Lorem ipsum dolor sit.
  [&#x2F;card-body]
[&#x2F;card]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('List groups', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">List groups are suppored by adding the <code>flush</code> flag to the <code>[list-group]</code> shortcode.</p>
			<pre><code class="d-block p-4">[card]
  [list-group flush]
    &lt;ul&gt;
      &lt;li&gt;Cras justo odio&lt;&#x2F;li&gt;
      &lt;li&gt;Dapibus ac facilisis in&lt;&#x2F;li&gt;
      &lt;li&gt;Vestibulum at eros&lt;&#x2F;li&gt;
    &lt;&#x2F;ul&gt;
  [&#x2F;list-group]
[&#x2F;card]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Kitchen sink', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[card]
  [card-img top]
    &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot; class&#x3D;&quot;img-fluid&quot;&gt;
  [&#x2F;card-img]
  [card-body]
    [card-title]
      &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
   [&#x2F;card-title]
    &lt;p&gt;Lorm ipsum dolor sit amet.&lt;&#x2F;p&gt;
  [&#x2F;card-body]
  [list-group flush]
    &lt;ul&gt;
      &lt;li&gt;Cras justo odio&lt;&#x2F;li&gt;
      &lt;li&gt;Dapibus ac facilisis in&lt;&#x2F;li&gt;
      &lt;li&gt;Vestibulum at eros&lt;&#x2F;li&gt;
    &lt;&#x2F;ul&gt;
  [&#x2F;list-group]
  [card-body]
    &lt;a href&#x3D;&quot;#link&quot;&gt;Lorem Ipsup&lt;&#x2F;a&gt;
    &lt;a href&#x3D;&quot;#link&quot;&gt;Dolor Sit&lt;&#x2F;a&gt;
  [&#x2F;card-body]
[&#x2F;card]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Card with image cap', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Image caps are supported with the <code>[card-img]</code> shortcode and the <code>top</code> or <code>bottom</code> flag.</p>
			<pre><code class="d-block p-4">[card]
  [card-img top]
    &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot; class&#x3D;&quot;img-fluid&quot;&gt;
  [&#x2F;card-img]
  [card-body]
    [card-title]
      &lt;h5&gt;Card Title&lt;&#x2F;h5&gt; [&#x2F;card-title]
    Lorem ipsum dolor sit.
  [&#x2F;card-body]
[&#x2F;card]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Card with image overlay', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Image overlay cards are supported with the <code>[card-img-overlay]</code> shortcode.</p>
			<pre><code class="d-block p-4">[card]
  [card-img]
    &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot; class&#x3D;&quot;img-fluid&quot;&gt;
  [&#x2F;card-img]
  [card-img-overlay]
    [card-title]
      &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
    [&#x2F;card-title]
    Lorem ipsum dolor sit.
  [&#x2F;card-img-overlay]
[&#x2F;card]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Card with Header and Footer', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Card header and card footers are supported with the <code>[card-header]</code> and <code>[card-footer]</code> shortcodes.</p>
			<pre><code class="d-block p-4">[card]
  [card-header]
    Example Header
  [&#x2F;card-header]
  [card-body]
    [card-title]
      &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
    [&#x2F;card-title]
    Lorem ipsum dolor sit.
  [&#x2F;card-body]
  [card-footer]
    Example footer.
  [&#x2F;card-footer]
[&#x2F;card]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Card group', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Use card groups to render cards as a single, attached element with equal width and height columns.</p>
			<pre><code class="d-block p-4">[card-group]
  [card]
    [card-body]
      [card-title]
        &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
      [&#x2F;card-title]
      Lorem ipsum dolor sit.
    [&#x2F;card-body]
  [&#x2F;card]
  [card]
    [card-body]
      [card-title]
        &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
      [&#x2F;card-title]
      Cras justo odio.
    [&#x2F;card-body]
  [&#x2F;card]
  [card]
    [card-body]
      [card-title]
        &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
      [&#x2F;card-title]
      Dapibus ac facilisis in.
    [&#x2F;card-body]
  [&#x2F;card]
[&#x2F;card-group]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Card deck', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Need a set of equal width and height cards that aren’t attached to one another? Use card decks.</p>
			<pre><code class="d-block p-4">[card-deck]
  [card]
    [card-body]
      [card-title]
        &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
      [&#x2F;card-title]
      Lorem ipsum dolor sit.
    [&#x2F;card-body]
  [&#x2F;card]
  [card]
    [card-body]
      [card-title]
        &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
      [&#x2F;card-title]
      Cras justo odio.
    [&#x2F;card-body]
  [&#x2F;card]
  [card]
    [card-body]
      [card-title]
        &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
      [&#x2F;card-title]
      Dapibus ac facilisis in.
    [&#x2F;card-body]
  [&#x2F;card]
[&#x2F;card-deck]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Card columns', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Cards can be organized into Masonry-like columns with just CSS by wrapping them in <code>[card-columns]</code></p>
			<pre><code class="d-block p-4">[card-columns]
  [card]
    [card-body]
      [card-title]
        &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
      [&#x2F;card-title]
      Lorem ipsum dolor sit.
    [&#x2F;card-body]
  [&#x2F;card]
  [card]
    [card-body]
      [card-title]
        &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
      [&#x2F;card-title]
      Cras justo odio.
    [&#x2F;card-body]
  [&#x2F;card]
  [card]
    [card-body]
      [card-title]
        &lt;h5&gt;Card Title&lt;&#x2F;h5&gt;
      [&#x2F;card-title]
      Dapibus ac facilisis in.
    [&#x2F;card-body]
  [&#x2F;card]
[&#x2F;card-columns]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[card] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[card-body] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Any <code>p</code> or <code>blockquote</code> tags within <code>[card-body]</code> will automatically receive <code>card-text</code> or <code>card-bodyquote</code> classes respectively', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[card-title] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('<code>[card-title]</code> should contain a heading tag (<code>h1</code>, <code>h2</code>, <code>h3</code>, <code>h4</code>, <code>h5</code>, or <code>h6</code>), inserted using the WordPress editor. If a heading tag is not added <code>h4</code> will be inserted automatically', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[card-subtitle] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('<code>[card-subtitle]</code> should contain a heading tag (<code>h1</code>, <code>h2</code>, <code>h3</code>, <code>h4</code>, <code>h5</code>, or <code>h6</code>), inserted using the WordPress editor. If a heading tag is not added <code>h6</code> will be inserted automatically', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[card-img] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('<code>[card-img]</code> should contain an image inserted using the WordPress editor.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>top</td>
			<td><?php _e('Flag whether this image cap is at the top of the card.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>bottom</td>
			<td><?php _e('Flag whether this image cap is at the bottom of the card.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[card-img-overlay] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[card-header] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('<code>[card-header]</code> should contain a heading tag (<code>h1</code>, <code>h2</code>, <code>h3</code>, <code>h4</code>, <code>h5</code>, or <code>h6</code>), inserted using the WordPress editor. If a heading tag is not added <code>div</code> (no heading) will be inserted automatically', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[card-footer] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[card-group] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[card-deck] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[card-columns] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="carousel" role="tabpanel">
<h2><?php _e('Carousel', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Remember that <code>[carousel]</code> must wrap a set of images inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[carousel]
  &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot;&gt;
  &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot;&gt;
  &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot;&gt;
[&#x2F;carousel]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Controls', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[carousel controls]
  &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot;&gt;
  &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot;&gt;
  &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot;&gt;
[&#x2F;carousel]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('With indicators', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[carousel controls indicators]
  &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot;&gt;
  &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot;&gt;
  &lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder-lg.png&quot;&gt;
[&#x2F;carousel]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[carousel] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Remember that <code>[carousel]</code> must wrap a set of images inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>controls</td>
			<td><?php _e('Whether to show carousel controls.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>indicators</td>
			<td><?php _e('Whether to show position indicators.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>interval</td>
			<td><?php _e('The amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>any number (in ms) or &quot;false&quot;</td>
			<td>5000</td>
		</tr>
		<tr>
			<td>pause</td>
			<td><?php _e('Whether the carousel pauses on hover. If set to null, hovering over the carousel won&#39;t pause it.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>hover, null</td>
			<td>hover</td>
		</tr>
		<tr>
			<td>wrap</td>
			<td><?php _e('Whether the carousel should cycle continuously or have hard stops.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>true, false</td>
			<td>true</td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="collapse" role="tabpanel">
<h2><?php _e('Collapse', 'bootstrap-4-shortcodes'); ?></h2>

	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Accordion example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Create an accordion by wrapping <code>[card]</code>s in <code>[accordion]</code>.</p>
			<pre><code class="d-block p-4">[accordion]
  [card]
    [card-header] ... [&#x2F;card-header]
    [card-body]
      ...
    [&#x2F;card-body]
  [&#x2F;card]
  [card]
    [card-header] ... [&#x2F;card-header]
    [card-body]
      ...
    [&#x2F;card-body]
  [&#x2F;card]
[&#x2F;accordion]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[accordion] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="dropdown" role="tabpanel">
<h2><?php _e('Dropdowns', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Remember that <code>[dropdown-menu]</code> must wrap an <code>a</code>, or <code>button</code> tags inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">The <code>dropdown</code> flag must be used on a <code>[button]</code> shortcode for dropdowns to work.</p>
			<pre><code class="d-block p-4">[dropdown]
  [button dropdown]Dropdown Button[&#x2F;button]
  [dropdown-menu]
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 1&lt;&#x2F;a&gt;
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 2&lt;&#x2F;a&gt;
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 3&lt;&#x2F;a&gt;
  [&#x2F;dropdown-menu]
[&#x2F;dropdown]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Dropdown with header tags as labels', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Add a header to label sections of actions in any dropdown menu.</p>
			<pre><code class="d-block p-4">[dropdown]
  [button dropdown]Dropdown Button[&#x2F;button]
  [dropdown-menu]
    &lt;h6&gt;Dropdown header&lt;&#x2F;h6&gt;
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 1&lt;&#x2F;a&gt;
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 2&lt;&#x2F;a&gt;
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 3&lt;&#x2F;a&gt;
  [&#x2F;dropdown-menu]
[&#x2F;dropdown]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Divider example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Separate groups of related menu items with a <code>[dropdown-divider]</code>.</p>
			<pre><code class="d-block p-4">[dropdown]
  [button dropdown]Dropdown Button[&#x2F;button]
  [dropdown-menu]
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 1&lt;&#x2F;a&gt;
    [dropdown-divider]
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 2&lt;&#x2F;a&gt;
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 3&lt;&#x2F;a&gt;
  [&#x2F;dropdown-menu]
[&#x2F;dropdown]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Split button dropdowns', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Create split button dropdowns with <code>[button-group]</code> and the <code>dropdown</code> and <code>split</code flag.</p>
			<pre><code class="d-block p-4">[button-group]
  [button]Button[&#x2F;button]
    [button dropdown split][&#x2F;button]
    [dropdown-menu]
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 1&lt;&#x2F;a&gt;
    [dropdown-divider]
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 2&lt;&#x2F;a&gt;
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 3&lt;&#x2F;a&gt;
  [&#x2F;dropdown-menu]
[&#x2F;button-group]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Dropup, dropright variations', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Set the <code>dropup</code> or <code>dropright</code> flags to set these variations.</p>
			<pre><code class="d-block p-4">[dropdown dropup]
  [button dropdown]Dropdown Button[&#x2F;button]
  [dropdown-menu]
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 1&lt;&#x2F;a&gt;
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 2&lt;&#x2F;a&gt;
    &lt;a href&#x3D;&quot;#link&quot;&gt;Link 3&lt;&#x2F;a&gt;
  [&#x2F;dropdown-menu]
[&#x2F;dropdown]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[dropdown] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>dropup</td>
			<td><?php _e('Set dropup variation.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>dropright</td>
			<td><?php _e('Set dropright variation.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[dropdown-menu] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>align</td>
			<td><?php _e('Alignment of the dropdown menu.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>right</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[dropdown-divider] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="jumbotron" role="tabpanel">
<h2><?php _e('Jumbotron', 'bootstrap-4-shortcodes'); ?></h2>

	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[jumbotron]
  &lt;h1&gt; Hello, World! &lt;&#x2F;h1&gt;
  [lead] This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information. [&#x2F;lead]
[&#x2F;jumbotron]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Fluid example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Set the <code>fluid</code> flag to make a fluid jumbotron.</p>
			<pre><code class="d-block p-4">[jumbotron fluid]
  &lt;h1&gt; Hello, World! &lt;&#x2F;h1&gt;
  [lead] This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information. [&#x2F;lead]
[&#x2F;jumbotron]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[jumbotron] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>fluid</td>
			<td><?php _e('Flag whether jumbotron should be fluid.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="list-group" role="tabpanel">
<h2><?php _e('List Group', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Remember that <code>[list-group]</code> must wrap a set of links or list items inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[list-group]
  &lt;ul&gt;
    &lt;li&gt;Cras justo odio&lt;&#x2F;li&gt;
    &lt;li&gt;Dapibus ac facilisis in&lt;&#x2F;li&gt;
    &lt;li&gt;Morbi leo risus&lt;&#x2F;li&gt;
    &lt;li&gt;Porta ac consectetur ac&lt;&#x2F;li&gt;
    &lt;li&gt;Vestibulum at eros&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;list-group]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Linked list', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Create a linked list by wrapping links</p>
			<pre><code class="d-block p-4">[list-group]
  &lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;
  [active]&lt;a href&#x3D;&quot;#link2&quot;&gt;Dapibus ac facilisis in&lt;&#x2F;a&gt;[&#x2F;active]
  &lt;a href&#x3D;&quot;#link3&quot;&gt;Morbi leo risus&lt;&#x2F;a&gt;
  &lt;a href&#x3D;&quot;#link4&quot;&gt;Porta ac consectetur ac&lt;&#x2F;a&gt;
  [disabled]&lt;a href&#x3D;&quot;#link5&quot;&gt;Vestibulum at eros&lt;&#x2F;a&gt;[&#x2F;disabled]
[&#x2F;list-group]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Contextual styles', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Wrap items in the <code>list-group-item</code> shortcode to give them contextual styles</p>
			<pre><code class="d-block p-4">[list-group]
  [list-group-item type&#x3D;&quot;success&quot;]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;list-group-item]
  [list-group-item type&#x3D;&quot;info&quot;]&lt;a href&#x3D;&quot;#link2&quot;&gt;Dapibus ac facilisis in&lt;&#x2F;a&gt;[&#x2F;list-group-item]
  [list-group-item type&#x3D;&quot;warning&quot;]&lt;a href&#x3D;&quot;#link3&quot;&gt;Morbi leo risus&lt;&#x2F;a&gt;[&#x2F;list-group-item]
  [list-group-item type&#x3D;&quot;danger&quot;]&lt;a href&#x3D;&quot;#link4&quot;&gt;Porta ac consectetur ac&lt;&#x2F;a&gt;[&#x2F;list-group-item]
[&#x2F;list-group]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[list-group] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Remember that <code>[list-group]</code> must wrap a set of links or list items inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[list-group-item] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Remember that <code>[list-group]</code> must wrap a set of links or list items inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>type</td>
			<td><?php _e('The type of the list-group-item.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>primary, secondary, success, info, warning, danger, light, dark</td>
			<td>primary</td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="modal" role="tabpanel">
<h2><?php _e('Modal', 'bootstrap-4-shortcodes'); ?></h2>

	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[modal fade id&#x3D;&quot;example-modal&quot;]
  [modal-header]&lt;h5&gt;Example Header&lt;&#x2F;h5&gt;[&#x2F;modal-header]
  [modal-body]
    Lorem ipsum dolor sit.
  [&#x2F;modal-body]
  [modal-footer]
    [button type&#x3D;&quot;secondary&quot;] Lorem [&#x2F;button]
    [button type&#x3D;&quot;primary&quot;] Ipsum [&#x2F;button]
  [&#x2F;modal-footer]
[&#x2F;modal]

[button data&#x3D;&quot;toggle,modal|target,#example-modal&quot;] Launch Modal [&#x2F;button]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Large example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Use the <code>size="large"</code> attribute for a larger modal</p>
			<pre><code class="d-block p-4">[modal size&#x3D;&quot;lg&quot; fade id&#x3D;&quot;example-modal-lg&quot;]
  [modal-header]&lt;h5&gt;Example Header&lt;&#x2F;h5&gt;[&#x2F;modal-header]
  [modal-body]
    Lorem ipsum dolor sit.
  [&#x2F;modal-body]
  [modal-footer]
    [button type&#x3D;&quot;secondary&quot;] Lorem [&#x2F;button]
    [button type&#x3D;&quot;primary&quot;] Ipsum [&#x2F;button]
  [&#x2F;modal-footer]
[&#x2F;modal]

[button data&#x3D;&quot;toggle,modal|target,#example-modal-lg&quot;] Launch Large Modal [&#x2F;button]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Small example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Use the <code>size="small"</code> attribute for a smaller modal</p>
			<pre><code class="d-block p-4">[modal size&#x3D;&quot;sm&quot; fade id&#x3D;&quot;example-modal-sm&quot;]
  [modal-header]&lt;h5&gt;Example Header&lt;&#x2F;h5&gt;[&#x2F;modal-header]
  [modal-body]
    Lorem ipsum dolor sit.
  [&#x2F;modal-body]
  [modal-footer]
    [button type&#x3D;&quot;secondary&quot;] Lorem [&#x2F;button]
    [button type&#x3D;&quot;primary&quot;] Ipsum [&#x2F;button]
  [&#x2F;modal-footer]
[&#x2F;modal]

[button data&#x3D;&quot;toggle,modal|target,#example-modal-sm&quot;] Launch Small Modal [&#x2F;button]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Vertically centered', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Use the <code>centered</code> flag to vertically center the modal</p>
			<pre><code class="d-block p-4">[modal fade centered id&#x3D;&quot;centered-modal&quot;]
  [modal-header]&lt;h5&gt;Example Header&lt;&#x2F;h5&gt;[&#x2F;modal-header]
  [modal-body]
    Lorem ipsum dolor sit.
  [&#x2F;modal-body]
  [modal-footer]
    [button type&#x3D;&quot;secondary&quot;] Lorem [&#x2F;button]
    [button type&#x3D;&quot;primary&quot;] Ipsum [&#x2F;button]
  [&#x2F;modal-footer]
[&#x2F;modal]

[button data&#x3D;&quot;toggle,modal|target,#centered-modal&quot;] Launch Centered Modal [&#x2F;button]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[modal] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>size</td>
			<td><?php _e('Size of the modal (optional)', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>lg, sm</td>
			<td>none</td>
		</tr>
		<tr>
			<td>id</td>
			<td><?php _e('ID of the modal (optional)', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>any text</td>
			<td>none</td>
		</tr>
		<tr>
			<td>fade</td>
			<td><?php _e('Flag whether modal should use fade animation.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>centered</td>
			<td><?php _e('Flag whether modal be vertically centered.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[modal-header] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[modal-body] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
<h3 class="mt-5">[modal-footer] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="navs" role="tabpanel">
<h2><?php _e('Navs', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Remember that <code>[nav]</code> must wrap a set of links and list items inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[nav]
  &lt;ul&gt;
    &lt;li&gt;[active]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;active]&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;Dapibus ac facilisis in&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link3&quot;&gt;Morbi leo risus&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link4&quot;&gt;Porta ac consectetur ac&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;nav]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Vertical example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Set the <code>vertical</code> flag to make a vertical nav.</p>
			<pre><code class="d-block p-4">[nav vertical]
  &lt;ul&gt;
    &lt;li&gt;[active]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;active]&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;Dapibus ac facilisis in&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link3&quot;&gt;Morbi leo risus&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link4&quot;&gt;Porta ac consectetur ac&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;nav]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Fill example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Set the <code>fill</code> flag to force navs to the full available width.</p>
			<pre><code class="d-block p-4">[nav fill]
  &lt;ul&gt;
    &lt;li&gt;[active]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;active]&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;Dapibus ac facilisis in&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link3&quot;&gt;Morbi leo risus&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link4&quot;&gt;Porta ac consectetur ac&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;nav]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Fill example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Set the <code>justified</code> flag to force nav-items to have equal widths.</p>
			<pre><code class="d-block p-4">[nav fill]
  &lt;ul&gt;
    &lt;li&gt;[active]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;active]&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;Dapibus ac facilisis in&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link3&quot;&gt;Morbi leo risus&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link4&quot;&gt;Porta ac consectetur ac&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;nav]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Tabs example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Set the <code>tabs</code> flag to make an tab-styled nav.</p>
			<pre><code class="d-block p-4">[nav tabs]
  &lt;ul&gt;
    &lt;li&gt;[active]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;active]&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;Dapibus ac facilisis in&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link3&quot;&gt;Morbi leo risus&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link4&quot;&gt;Porta ac consectetur ac&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;nav]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Pills example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Set the <code>pills</code> flag to make an pills-styled nav.</p>
			<pre><code class="d-block p-4">[nav pills]
  &lt;ul&gt;
    &lt;li&gt;[active]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;active]&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;Dapibus ac facilisis in&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link3&quot;&gt;Morbi leo risus&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link4&quot;&gt;Porta ac consectetur ac&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;nav]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Stacked pills example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Pills-styled navs can also be stacked with the <code>stacked</code> flag.</p>
			<pre><code class="d-block p-4">[nav pills stacked]
  &lt;ul&gt;
    &lt;li&gt;[active]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;active]&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;Dapibus ac facilisis in&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link3&quot;&gt;Morbi leo risus&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link4&quot;&gt;Porta ac consectetur ac&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;nav]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[nav] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Remember that <code>[nav]</code> must wrap a set of links and list items inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>inline</td>
			<td><?php _e('Flag whether nav should be inline.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>tabs</td>
			<td><?php _e('Flag whether nav should be styled as tabs.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>pills</td>
			<td><?php _e('Flag whether nav should be styled as pills.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>stacked</td>
			<td><?php _e('Flag whether nav should be stacked.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="pagination" role="tabpanel">
<h2><?php _e('Pagination', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Remember that <code>[pagination]</code> must wrap a set of list items and links inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[pagination]
  &lt;ul&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#prev&quot;&gt;&amp;laquo;&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link1&quot;&gt;1&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;2&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link3&quot;&gt;3&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#next&quot;&gt;&amp;raquo;&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;pagination]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Large example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[pagination size&#x3D;&quot;lg&quot;]
  &lt;ul&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#prev&quot;&gt;&amp;laquo;&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link1&quot;&gt;1&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;2&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link3&quot;&gt;3&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#next&quot;&gt;&amp;raquo;&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;pagination]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Small example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[pagination size&#x3D;&quot;sm&quot;]
  &lt;ul&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#prev&quot;&gt;&amp;laquo;&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link1&quot;&gt;1&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;2&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link3&quot;&gt;3&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#next&quot;&gt;&amp;raquo;&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;pagination]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Active and disabled states', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[pagination]
  &lt;ul&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#prev&quot;&gt;&amp;laquo;&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;[active]&lt;a href&#x3D;&quot;#link1&quot;&gt;1&lt;&#x2F;a&gt;[&#x2F;active]&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#link2&quot;&gt;2&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
    &lt;li&gt;[disabled]&lt;a href&#x3D;&quot;#link3&quot;&gt;3&lt;&#x2F;a&gt;[&#x2F;disabled]&lt;&#x2F;li&gt;
    &lt;li&gt;&lt;a href&#x3D;&quot;#next&quot;&gt;&amp;raquo;&lt;&#x2F;a&gt;&lt;&#x2F;li&gt;
  &lt;&#x2F;ul&gt;
[&#x2F;pagination]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[pagination] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Remember that <code>[pagination]</code> must wrap a set of list items and links inserted via the WordPress editor.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>size</td>
			<td><?php _e('Optional size of the pagination.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>none, sm, lg</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="popovers" role="tabpanel">
<h2><?php _e('Popovers', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Wrap any element in a the <code>[popover]</code> shortcode to give it a popover. This may not work well on all elements depending on styling and other factors.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[popover title&#x3D;&quot;Popover title&quot; content&#x3D;&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; ]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;popover]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Dismiss on next click', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Use the focus trigger to dismiss popovers on the next click that the user makes.</p>
			<pre><code class="d-block p-4">[popover trigger&#x3D;&quot;focus&quot; title&#x3D;&quot;Popover title&quot; content&#x3D;&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; ]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;popover]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[popover] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Wrap any element in a the <code>[popover]</code> shortcode to give it a popover. This may not work well on all elements depending on styling and other factors.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>title</td>
			<td><?php _e('The title of the popover.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>any text</td>
			<td></td>
		</tr>
		<tr>
			<td>content</td>
			<td><?php _e('The content of the popover.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>any text</td>
			<td></td>
		</tr>
		<tr>
			<td>placement</td>
			<td><?php _e('Placement of the popover.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>top, bottom, left, right</td>
			<td>top</td>
		</tr>
		<tr>
			<td>trigger</td>
			<td><?php _e('The popover trigger (use &lt;code&gt;focus&lt;&#x2F;code&gt; to dismiss popover on next click).', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>any text</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="progress" role="tabpanel">
<h2><?php _e('Progress', 'bootstrap-4-shortcodes'); ?></h2>

	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[progress type&#x3D;&quot;primary&quot; value&#x3D;&quot;50&quot;]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Striped example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Use the <code>striped</code> flag to produce a striped progress bar.</p>
			<pre><code class="d-block p-4">[progress type&#x3D;&quot;primary&quot; value&#x3D;&quot;50&quot; striped]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[progress] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>type</td>
			<td><?php _e('The type of the progress bar.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>primary, success, info, warning, danger</td>
			<td>primary</td>
		</tr>
		<tr>
			<td>striped</td>
			<td><?php _e('Flag whether progress bar should be striped.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>animated</td>
			<td><?php _e('Flag whether progress bar should be animated.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="tooltips" role="tabpanel">
<h2><?php _e('Tooltips', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Wrap any element in a the <code>[tooltip]</code> shortcode to give it a tooltip. This may not work well on all elements depending on styling and other factors.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[tooltip title&#x3D;&quot;Tooltip text&quot;]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;tooltip]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('HTML tooltip', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text">Use the <code>html</code> flag to allow HTML in the tooltip</p>
			<pre><code class="d-block p-4">[tooltip title&#x3D;&quot;&lt;em&gt;Tooltip&lt;&#x2F;em&gt; &lt;u&gt;with&lt;&#x2F;u&gt; &lt;b&gt;HTML&lt;&#x2F;b&gt;&quot; tooltip]&lt;a href&#x3D;&quot;#link1&quot;&gt;Cras justo odio&lt;&#x2F;a&gt;[&#x2F;tooltip]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[tooltip] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Wrap any element in a the <code>[tooltip]</code> shortcode to give it a tooltip. This may not work well on all elements depending on styling and other factors.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>title</td>
			<td><?php _e('The content of the tooltip.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>any text</td>
			<td></td>
		</tr>
		<tr>
			<td>placement</td>
			<td><?php _e('Placement of the tooltip.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>top, bottom, left, right</td>
			<td>top</td>
		</tr>
		<tr>
			<td>html</td>
			<td><?php _e('Flag whether content should be parsed for HTML.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<h1 class="sr-only"><?php _e('Utilities', 'bootstrap-4-shortcodes'); ?></h1>
<div class="tab-pane" id="borders" role="tabpanel">
<h2><?php _e('Borders', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Use border utilities to quickly style the <code>border</code> and <code>border-radius</code> of an element. Great for images, buttons, or any other element.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[border rounded]&lt;img src&#x3D;&quot;placeholder-path&#x2F;placeholder.png&quot;&gt;[&#x2F;border]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[border] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Use border utilities to quickly style the <code>border</code> and <code>border-radius</code> of an element. Great for images, buttons, or any other element.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>rounded</td>
			<td><?php _e('Flag whether border style should be rounded.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>top</td>
			<td><?php _e('Flag whether border style should be rounded-top.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>right</td>
			<td><?php _e('Flag whether border style should be rounded-right.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>bottom</td>
			<td><?php _e('Flag whether border style should be rounded-bottom.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>left</td>
			<td><?php _e('Flag whether border style should be rounded-left.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>circle</td>
			<td><?php _e('Flag whether border style should be a circle.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>🚩 (flag)</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
<div class="tab-pane" id="colors" role="tabpanel">
<h2><?php _e('Colors', 'bootstrap-4-shortcodes'); ?></h2>
<p><?php _e('Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.', 'bootstrap-4-shortcodes'); ?></p>
	<div class="card">
		<div class="card-body">
      <h5 class="card-title">
        <?php _e('Basic example', 'bootstrap-4-shortcodes'); ?>
      </h5>
      <p class="card-text"></p>
			<pre><code class="d-block p-4">[color type&#x3D;&quot;primary&quot;]Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.[&#x2F;color]</code></pre>
		</div>
		<div class="card-footer text-left">
			<button data-path="placeholder" data-dismiss="modal" class="btn btn-primary btn-sm float-xs-right insert-code"><?php _e('Insert Example', 'bootstrap-4-shortcodes'); ?></button>
		</div>
	</div> <!--/card -->

<h3 class="mt-5">[color] <?php _e('parameters', 'bootstrap-4-shortcodes'); ?></h3>
<div class="alert alert-warning"><strong><?php _e('Note:', 'bootstrap-4-shortcodes'); ?></strong> <?php _e('Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.', 'bootstrap-4-shortcodes'); ?></div>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php _e('Parameter', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Description', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Required', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Values', 'bootstrap-4-shortcodes'); ?></th>
			<th><?php _e('Default', 'bootstrap-4-shortcodes'); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>type</td>
			<td><?php _e('The type of the color to be applied.', 'bootstrap-4-shortcodes'); ?></td>
			<td>0</td>
			<td>muted, primary, success, info, warning, danger, white</td>
			<td></td>
		</tr>
		<tr>
			<td>class</td>
			<td><?php _e('Any extra classes you want to add.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td>data</td>
			<td><?php _e('Data attribute and value pairs separated by a comma. Pairs separated by pipe.', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('optional', 'bootstrap-4-shortcodes'); ?></td>
			<td><?php _e('any text', 'bootstrap-4-shortcodes'); ?></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
</div>
