<!doctype html>
<html>
<head>
	<title>Base Template</title>
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/js/ui-lightness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	<script src="assets/js/app.js"></script>
</head>
<body>
<!--
<div id="container">

<?php include 'header.php'; ?>

<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <h1>Spacelab</h1>
  <p class="lead">A preview of changes in this swatch.</p>
  <div class="subnav">
    <ul class="nav nav-pills">
      <li><a href="#typography">Typography</a></li>
      <li><a href="#navbar">Navbar</a></li>
      <li><a href="#buttons">Buttons</a></li>
      <li><a href="#forms">Forms</a></li>
      <li><a href="#miscellaneous">Miscellaneous</a></li>
    </ul>
  </div>
</header>


<!-- Typography
================================================== -->
<section id="typography">
  <div class="page-header">
    <h1>Typography</h1>
  </div>

  <!-- Headings & Paragraph Copy -->
  <div class="row">
	  
    <div class="span4">
      <div class="well">
        <h1>h1. Heading 1</h1>
        <h2>h2. Heading 2</h2>
        <h3>h3. Heading 3</h3>
        <h4>h4. Heading 4</h4>
        <h5>h5. Heading 5</h5>
        <h6>h6. Heading 6</h6>
      </div>
    </div>
	  
    <div class="span4">
      <h3>Example body text</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
    </div>
	
    <div class="span4">
      <h3>Example addresses</h3>
      <address>
        <strong>Twitter, Inc.</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <address>
        <strong>Full Name</strong><br>
        <a href="mailto:#">first.last@gmail.com</a>
      </address>
    </div>

  </div>

</section>



<!-- Navbar
================================================== -->
<section id="navbar">
  <div class="page-header">
    <h1>Navbar</h1>
  </div>
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Project name</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Search">
          </form>
          <ul class="nav pull-right">
            <li><a href="#">Link</a></li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

</section>



<!-- Buttons
================================================== -->
<section id="buttons">
  <div class="page-header">
    <h1>Buttons</h1>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Button</th>
        <th>Large Button</th>
        <th>Small Button</th>
        <th>Disabled Button</th>
		<th>Button with Icon</th>
		<th>Split Button</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a class="btn" href="#">Default</a></td>
        <td><a class="btn btn-large" href="#">Default</a></td>
        <td><a class="btn btn-small" href="#">Default</a></td>
        <td><a class="btn disabled" href="#">Default</a></td>
        <td><a class="btn" href="#"><i class="icon-cog"></i> Default</a></td>
		<td>
	        <div class="btn-group">
	          <a class="btn" href="#">Default</a>
	          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
      <tr>
        <td><a class="btn btn-primary" href="#">Primary</a></td>
        <td><a class="btn btn-primary btn-large" href="#">Primary</a></td>
        <td><a class="btn btn-primary btn-small" href="#">Primary</a></td>
        <td><a class="btn btn-primary disabled" href="#">Primary</a></td>
        <td><a class="btn btn-primary" href="#"><i class="icon-shopping-cart icon-white"></i> Primary</a></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-primary" href="#">Primary</a>
	          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
      <tr>
        <td><a class="btn btn-info" href="#">Info</a></td>
        <td><a class="btn btn-info btn-large" href="#">Info</a></td>
        <td><a class="btn btn-info btn-small" href="#">Info</a></td>
        <td><a class="btn btn-info disabled" href="#">Info</a></td>
        <td><a class="btn btn-info" href="#"><i class="icon-exclamation-sign icon-white"></i> Info</a></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-info" href="#">Info</a>
	          <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
      <tr>
        <td><a class="btn btn-success" href="#">Success</a></td>
        <td><a class="btn btn-success btn-large" href="#">Success</a></td>
        <td><a class="btn btn-success btn-small" href="#">Success</a></td>
        <td><a class="btn btn-success disabled" href="#">Success</a></td>
        <td><a class="btn btn-success" href="#"><i class="icon-ok icon-white"></i> Success</a></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-success" href="#">Success</a>
	          <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
      <tr>
        <td><a class="btn btn-warning" href="#">Warning</a></td>
        <td><a class="btn btn-warning btn-large" href="#">Warning</a></td>
        <td><a class="btn btn-warning btn-small" href="#">Warning</a></td>
        <td><a class="btn btn-warning disabled" href="#">Warning</a></td>
        <td><a class="btn btn-warning" href="#"><i class="icon-warning-sign icon-white"></i> Warning</a></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-warning" href="#">Warning</a>
	          <a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
      <tr>
        <td><a class="btn btn-danger" href="#">Danger</a></td>
        <td><a class="btn btn-danger btn-large" href="#">Danger</a></td>
        <td><a class="btn btn-danger btn-small" href="#">Danger</a></td>
        <td><a class="btn btn-danger disabled" href="#">Danger</a></td>
        <td><a class="btn btn-danger" href="#"><i class="icon-remove icon-white"></i> Danger</a></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-danger" href="#">Danger</a>
	          <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
    </tbody>
  </table>

</section>


<!-- Forms
================================================== -->
<section id="forms">
  <div class="page-header">
    <h1>Forms</h1>
  </div>
  
  <div class="row">
    <div class="span7 offset1">
		
	    <form class="well form-search">
	      <input type="text" class="input-medium search-query">
	      <button type="submit" class="btn">Search</button>
	    </form>
		
        <form class="well form-search">
          <input type="text" class="input-small" placeholder="Email">
          <input type="password" class="input-small" placeholder="Password">
          <button type="submit" class="btn">Go</button>
        </form>
		
		
      <form class="form-horizontal well">
        <fieldset>
          <legend>Controls Bootstrap supports</legend>
          <div class="control-group">
            <label class="control-label" for="input01">Text input</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="input01">
              <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="optionsCheckbox">Checkbox</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="optionsCheckbox" value="option1">
                Option one is this and that&mdash;be sure to include why it's great
              </label>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="select01">Select list</label>
            <div class="controls">
              <select id="select01">
                <option>something</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="multiSelect">Multicon-select</label>
            <div class="controls">
              <select multiple="multiple" id="multiSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="fileInput">File input</label>
            <div class="controls">
              <input class="input-file" id="fileInput" type="file">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="textarea">Textarea</label>
            <div class="controls">
              <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="focusedInput">Focused input</label>
            <div class="controls">
              <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused�">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Uneditable input</label>
            <div class="controls">
              <span class="input-xlarge uneditable-input">Some value here</span>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="disabledInput">Disabled input</label>
            <div class="controls">
              <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Disabled input here�" disabled>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="optionsCheckbox2">Disabled checkbox</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="optionsCheckbox2" value="option1" disabled>
                This is a disabled checkbox
              </label>
            </div>
          </div>
          <div class="control-group warning">
            <label class="control-label" for="inputWarning">Input with warning</label>
            <div class="controls">
              <input type="text" id="inputWarning">
              <span class="help-inline">Something may have gone wrong</span>
            </div>
          </div>
          <div class="control-group error">
            <label class="control-label" for="inputError">Input with error</label>
            <div class="controls">
              <input type="text" id="inputError">
              <span class="help-inline">Please correct the error</span>
            </div>
          </div>
          <div class="control-group success">
            <label class="control-label" for="inputSuccess">Input with success</label>
            <div class="controls">
              <input type="text" id="inputSuccess">
              <span class="help-inline">Woohoo!</span>
            </div>
          </div>
          <div class="control-group success">
            <label class="control-label" for="selectError">Select with success</label>
            <div class="controls">
              <select id="selectError">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <span class="help-inline">Woohoo!</span>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="reset" class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>

</section>


<!-- Miscellaneous
================================================== -->
<section id="miscellaneous">
  <div class="page-header">
    <h1>Miscellaneous</h1>
  </div>

  <div class="row">
    <div class="span5">

      <h3 id="breadcrumbs">Breadcrumbs</h3>
      <ul class="breadcrumb">
        <li class="active">Home</li>
      </ul>
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li class="active">Library</li>
      </ul>
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Library</a> <span class="divider">/</span></li>
        <li class="active">Data</li>
      </ul>
    </div>
    <div class="span6 offset1">
      <h3 id="pagination">Pagination</h3>
      <div class="pagination">
        <ul>
          <li class="disabled"><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
      <div class="pagination">
        <ul>
          <li><a href="#">&larr;</a></li>
          <li class="active"><a href="#">10</a></li>
          <li class="disabled"><a href="#">...</a></li>
          <li><a href="#">20</a></li>
          <li><a href="#">&rarr;</a></li>
        </ul>
      </div>
      <div class="pagination pagination-centered">
        <ul>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
      </div>
    </div>
  </div>



<!-- Labels
================================================== -->

  <div class="row">
    <div class="span12">

      <h3 id="labels">Labels</h3>
	  

      <span class="label">Default</span>
      <span class="label label-success">Success</span>
	  <span class="label label-warning">Warning</span>
	  <span class="label label-important">Important</span>
	  <span class="label label-info">Info</span>
  
	</div>
  </div>
	<br />

<!-- Progress bars
================================================== -->


  <h3 id="progressbars">Progress bars</h3>
	  
  <div class="row">
    <div class="span4">
      <div class="progress">
        <div class="bar" style="width: 60%;"></div>
      </div>
    </div>
    <div class="span4">
      <div class="progress progress-info progress-striped">
        <div class="bar" style="width: 20%;"></div>
      </div>
    </div>
    <div class="span4">
      <div class="progress progress-danger progress-striped active">
        <div class="bar" style="width: 45%"></div>
      </div>
    </div>
  </div>
	<br />


<!-- Alerts & Messages
================================================== -->


  <h3 id="alerts">Alerts</h3>

  <div class="row">
	  <div class="span12">
	      <div class="alert alert-block">
	        <a class="close">&times;</a>
	        <h4 class="alert-heading">Alert block</h4>
	        <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
	      </div>
	  </div>
  </div>
  <div class="row">
    <div class="span4">
      <div class="alert alert-error">
        <a class="close">&times;</a>
        <strong>Error</strong> Change a few things up and try submitting again.
      </div>
    </div>
    <div class="span4">
      <div class="alert alert-success">
        <a class="close">&times;</a>
        <strong>Success</strong> You successfully read this important alert message.
      </div>
    </div>
    <div class="span4">
      <div class="alert alert-info">
        <a class="close">&times;</a>
        <strong>Information</strong> This alert needs your attention, but it's not super important.
      </div>
    </div>
  </div>


</section>

<br><br><br><br>

     <!-- Footer
      ================================================== -->
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
      </footer>

    </div><!-- /container -->

<article>

<h1>h1 Heading</h1>
<p>
Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis. Commodo enim aliquam suspendisse tortor cum diam, commodo facilisis, rutrum et duis nisl porttitor, vel eleifend odio ultricies ut, orci in adipiscing felis velit nibh. Consectetuer porttitor feugiat vestibulum sit feugiat, voluptates dui eros libero. Etiam vestibulum at lectus.
Donec vivamus. Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent, pede etiam. Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio. Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed, dapibus magna nulla nonummy commodo accumsan morbi, praesent volutpat vel id maecenas, morbi habitant sem in adipiscing mi erat, malesuada pretium tortor rutrum eu eros vel. Donec molestie, faucibus a amet commodo scelerisque libero massa. Sapien quam in eu vel nulla.</p>
<p>Iaculis et dui ullamcorper, non egestas condimentum dui phasellus. Sit non mattis a, leo in imperdiet erat nec pulvinar. Ornare massa justo cursus, convallis mauris interdum felis. Felis posuere metus, ornare pede montes, morbi urna sed temporibus non, nibh inceptos enim turpis natoque ac praesent. Litora vivamus veritatis vel nonummy, ut qui est pellentesque at alias, sed condimentum dapibus.
Rhoncus lacinia. Imperdiet nulla sem fringilla, purus enim amet, nascetur faucibus, adipiscing neque ut bibendum, at felis nec in. Mauris ultricies, et pede id potenti in nec, mi elit rhoncus ligula, mollis lacus congue scelerisque magna. Ultrices risus elit lectus nunc blandit quis, magna enim ipsum, nostra leo vestibulum quis nibh arcu sed. Amet a sagittis fringilla, massa vitae rhoncus, a magna curabitur in.
</p>


<h2>Form thing</h2>

<form>
	<label>You Name it</label><input type="text" /><br />
	<label>Name this too</label><input type="text" /><br />
	<label>Message this</label><textarea></textarea><br />
	<label></label><input type="submit" />
</form>
</article>

<?php include 'footer.php'; ?>

</div>
</body>-->
</html>