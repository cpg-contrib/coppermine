<?php
include("header.php");
?>
  <h2>Edit style.css</h2>

  <ol>
    <li>
      Create a new ID for the "#admin_menu_anim object" 

      <h6>Find:</h6>
      <pre>
.admin_menu a:hover {
        color: #000000;
        text-decoration: underline;
}
</pre>

      <h6>Add after it:</h6>
      <pre>
td #admin_menu_anim {
        background-image : url(images/button_bg_anim.gif);
}
</pre>
    </li>

    <li>Copy the file "button_bg_anim.gif" from "themes/classic/images" to the theme's "images" directory.</li>
    <li>Create a new class for the "thumb_filename" class.
    <h6>Find:</h6>
    <pre>
.thumb_title {
        font-weight &#58; bold&#59;
        font-size&#58; 80%&#59;
        padding&#58; 2px&#59;
        display &#58; block&#59;
}
    </pre>
    <h6>Add before it:</h6>
    <pre>
.thumb_filename {
        font-size: 80%;
        display: block;
}
    </pre>
    </li>

    <li>
      Remove the proprietary value "hand" for class ".clickable_option" 

      <h6>Find:</h6>
      <pre>
.clickable_option {
        border-bottom : 1px dotted blue;
        cursor : hand;
}
</pre>

      <h6>Replace with:</h6>
      <pre>
.clickable_option {
        border-bottom : 1px dotted blue;
        cursor : default;
}
</pre>
    </li>

    <li>
      Add the style information for the vanity roll-over graphics 

      <h6>Insert at the bottom of style.css</h6>
      <pre>
#vanity a {
        display:block;
        width:57px;
        height:20px;
        margin: 3px 20px;
}
#vanity img {border:0}
#v_php {float:left;background-image:url(../../images/powered-php.gif);}
#v_php:hover {background-image:url(../../images/h_powered-php.gif);}
#v_mysql {float:left;background-image:url(../../images/powered-mysql.gif);}
#v_mysql:hover  {background-image:url(../../images/h_powered-mysql.gif);}
#v_xhtml {float:right;background-image:url(../../images/valid-xhtml10.gif);}
#v_xhtml:hover {background-image:url(../../images/h_valid-xhtml10.gif);}
#v_css {float:right;background-image:url(../../images/valid-css.gif);}
#v_css:hover{background-image:url(../../images/h_valid-css.gif);}
</pre>
    </li>

    <li>
      Validate the style sheet: <a href="http://jigsaw.w3.org/css-validator/">http://jigsaw.w3.org/css-validator</a> 

      <h6>Make changes as necessary.</h6>
    </li>
		
		<li>
			Add a new class for the background color of the image in displayimage. The class is based on tableb. 
			It was added to give the designer more flexibility in styling that element without affecting other elements that used tableb.
			If you want to use the same attributes as you current have for tableb, you can copy the tableb block and name it:
			display_media.
			<p>
			For example, in the classic theme:
			</p>
			<h6>copy and paste after the .imageborder block (You can paste it anywhere but that placement helps to keep things organized)</h6>
			<pre>
			.tableb {
        background: #EFEFEF ;
        padding-top: 3px;
        padding-right: 10px;
        padding-bottom: 3px;
        padding-left: 10px;
				}
			</pre>
			<p>
			Replace &quot;tableb" with "display_media"
			</p>
		</li>
		<li>
			&quot;catrow&quot; and &quot;catrow_noalb&quot; were added for the same reasons
			as above for &quot;display_media&quot;. They style the category rows on the index
			page. &quot;catrow_noalb&quot; is used for rows that do not contain albums, at least
			in the first level of the category. &quot;catrow&quot; is based on &quot;tableb&quot; so if
			you want to keep the same look, copy and paste the &quot;tableb&quot; block as described
			above and rename it &quot;catrow&quot;. You can paste it anywhere but to keep things
			organized, the recommended placement would be after the table blocks, before
			&quot;album_stat&quot;. &quot;catrow_noalb&quot; is based on &quot;tableh2&quot; so repeat the steps
			as described above.</li>
  </ol>
<?php
include("footer.php");
?>