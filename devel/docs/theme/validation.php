<?php
include("header.php");
?>

  <h2>Validation Methodology</h2>

  <p>Now that you have a functioning "style.css", "template.html" and "theme.php" you should verify that it is generating valid output.</p>

  <ol>
    <li>
      Suggestions to help you bring the theme you are editing up to XHTML 1.0 Transitional HTML 

      <ul>
        <li>All ampersands that form part of a <u><b>URL</b></u> are to be coded '&amp;amp;'. There are quite a few of these in the functions of theme.php.</li>

        <li>All images to have the 'alt' attribute, and be closed ' /&gt;'.</li>

        <li>All meta tags should be closed ' /&gt;'</li>

        <li>All &lt;hr&gt; and &lt;br&gt; tags should be closed &lt;hr /&gt;&lt;br /&gt;</li>

        <li>All background images/colors to be changed to css or style attributes. This depends on the layout.</li>

        <li>Any existing tags or attributes in uppercase (such as onClick) to be changed to lowercase.</li>
      </ul>
    </li>

    <li>Save all your open files and upload them to your webserver; test-drive both as admin and as "regular" user.</li>

    <li>
      Use the following methodology to confirm that your theme generates valid XHTML 1.0 Transitional HTML. 

      <p>Each of the following pages needs to be <a href="http://validator.w3.org/">validated</a> as an anonymous user, registered user, and in admin mode:</p>

      <ul>
        <li>index.php</li>

        <li>thumbnails.php</li>

        <li>displayimage.php</li>

        <li>search.php</li>

        <li>emailed HTML E-card.</li>
      </ul>

      <p>The following toolbars can assist you in validating the resulting output of your theme:</p>

      <p>Internet Explorer:</p>

      <ul>
        <li><a href="http://www.nils.org.au/ais/web/resources/toolbar/index.html">Web Accessibility Toolbar</a> (Creative Commons License)</li>
      </ul>

      <p>Mozilla Firefox:</p>

      <ul>
        <li><a href="http://www.chrispederick.com/work/firefox/webdeveloper/">Web Developer Extension</a> (GPL)</li>
      </ul>
    </li>
  </ol>

  <h2>Congratulations</h2>

  <p>Your theme should now be ready to use with Coppermine 1.4.1</p>
<?php
include("footer.php");
?>