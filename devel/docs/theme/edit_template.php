<?php
include("header.php");
?>
  <h2>Edit template.html</h2>

  <ol>
    <li>
      Change the <a href="http://www.w3.org/QA/Tips/Doctype">DOCTYPE</a>; Coppermine 1.4.x is XHTML 1.0 Transitional. 

      <h6>Find:</h6>
      <pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"&gt;
</pre>

      <h6>Replace with:</h6> <span>(or insert as the first line of template.html if it is missing)</span>
      <pre>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
</pre>
    </li>

    <li>
      Coppermine 1.4.1 officially split the main menu into two menus: SYS_MENU and SUB_MENU. 

      <h6>If your theme uses a single menu, find:</h6>
      <pre>
{MAIN_MENU}
</pre>

      <h6>Replace with:</h6><span>Note: the "&lt;br /&gt;" is for classic your theme may require a different separator.</span> 
      <pre>
{SYS_MENU}&lt;br /&gt;{SUB_MENU}
</pre>

      <h6>If your theme uses two menus, Find:</h6>
      <pre>
{MAIN_MENU1}
</pre>

      <h6>Replace with:</h6>
      <pre>
{SYS_MENU}
</pre>

      <h6>Then find:</h6>
      <pre>
{MAIN_MENU2}
</pre>

      <h6>Replace with:</h6>
      <pre>
{SUB_MENU}
</pre>
    </li>

    <li>
      Choose a place where the vanity graphics should be located on your Coppermine pages. Vanity graphics display the "Powered by MySQL and PHP, as well as the XHTML and CSS Validation banners and link to their respective parties. 

      <p>It is recommended to do this even if you're not planning to actually use them as they can be enabled or disabled according to whether the theme is defined as XHTML 1.0 Transitional Valid.</p>

      <h6>Below are the vanity icons used in the classic theme:</h6>

      <div class="vanity">
        <img src="../pics/powered-php.gif" width="57" height="20" alt="Powered by PHP" />
				<img src="../pics/powered-mysql.gif" width="57" height="20" alt="Powered by MySQL" />
				<img src="../pics/valid-css.gif" width="57" height="20" alt="Valid CSS" />
				<img src="../pics/valid-xhtml10.gif" width="57" height="20" alt="Valid XHTML 1.0" />
      </div>

      <p>Find a place anywhere between &lt;body&gt; and &lt;/body&gt; where you want the vanity icons to appear. Usually this should go at the bottom of the page right before the &lt;/body&gt; tag.</p>

      <h6>Insert the vanity graphics:</h6>
      <pre>
{VANITY}
</pre>
    </li>

    <li>
      Choose a place where the custom header and custom footer should be located on your Coppermine pages. It is recommended to do this even if you're not planning to actually use them as they can be enabled or disabled at any time in the Coppermine configuration: 

      <ul>
        <li>{CUSTOM_HEADER}: Custom PHP header, like anycontent.php but shown on every page.</li>

        <li>{CUSTOM_FOOTER}: Custom PHP footer, like anycontent.php but shown on every page.</li>
      </ul>

      <p>It's recommended to place the custom header immediately following the &lt;body&gt; tag and the custom footer immediately before the "{VANITY}" token or immediately before the &lt;/body&gt; tag.</p>

      <h6>Insert the custom header:</h6>
      <pre>
{CUSTOM_HEADER}
</pre>

      <h6>Insert the custom footer:</h6>
      <pre>
{CUSTOM_FOOTER}
</pre>
    </li>

    <li>
      Prepare the template.html for validation by itself. 

      <h6>Find:</h6>
      <pre>
&lt;html dir="{LANG_DIR}"&gt;
</pre>

      <h6>Replace with:</h6>
      <pre>
&lt;!-- &lt;html dir="{LANG_DIR}"&gt; --&gt;
&lt;html&gt;
</pre>

      <h6>Find:</h6>
      <pre>
&lt;meta http-equiv="Content-Type" content="text/html; charset={CHARSET}" /&gt;
</pre>

      <h6>Replace with:</h6>
      <pre>
&lt;!-- &lt;meta http-equiv="Content-Type" content="text/html; charset={CHARSET}" /&gt; --&gt;
</pre>

      <h6>Find:</h6>
      <pre>
{META}
</pre>

      <h6>Replace with:</h6>
      <pre>
&lt;!-- {META} --&gt;
</pre>
    </li>

    <li>
      Validate the template.html: <a href="http://validator.w3.org">http://validator.w3.org</a> 

      <h6>Common Errors:</h6>

      <ul>
        <li>Missing &lt;head&gt; or &lt;/head&gt; elements; Insert them in the proper place.</li>

        <li>Tables nested inside of &lt;span&gt;&lt;/span&gt; elements; switch to &lt;div&gt;&lt;/div&gt; instead.</li>

        <li>Table cells using the depreciated background property "&lt;td background="; use inline styles: "&lt;td style="background-image:url(...);"&gt;"</li>

        <li>Duplicate "id=" fields; The "id" field is supposed to be unique because it is used as a javascript selector as well as a CSS selector; Eliminate the duplicate values</li>
      </ul>

      <h6>Make other changes as necessary.</h6>
    </li>

    <li>
      Prepare template.html to be used as a Coppermine template after validation. 

      <h6>Find:</h6>
      <pre>
&lt;!-- &lt;html dir="{LANG_DIR}"&gt; --&gt;
&lt;html&gt;
</pre>

      <h6>Replace with:</h6>
      <pre>
&lt;html dir="{LANG_DIR}"&gt;
</pre>

      <h6>Find:</h6>
      <pre>
&lt;!-- &lt;meta http-equiv="Content-Type" content="text/html; charset={CHARSET}" /&gt; --&gt;
</pre>

      <h6>Replace with:</h6>
      <pre>
 &lt;meta http-equiv="Content-Type" content="text/html; charset={CHARSET}" /&gt;
</pre>

      <h6>Find:</h6>
      <pre>
&lt;!-- {META} --&gt;
</pre>

      <h6>Replace with</h6>
      <pre>
{META}
</pre>
    </li>
  </ol>
<?php
include("footer.php");
?>