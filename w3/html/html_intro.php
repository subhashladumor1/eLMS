
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from www.w3schools.com/html/html_intro.asp by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 13:03:44 GMT -->
<head>
<title>Introduction to HTML</title>
<meta charset="utf-8">

<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.">
<meta property="og:image" content="https://www.w3schools.com/images/w3schools_logo_436_2.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="436">
<meta property="og:image:height" content="228">
<meta property="og:description" content="W3Schools offers free online tutorials, references and exercises in all the major languages of the web. Covering popular subjects like HTML, CSS, JavaScript, Python, SQL, Java, and many, many more.">
<link rel="stylesheet" type="text/css" href="../css/style.css">

<link rel="icon" href="../favicon.ico" type="image/x-icon">
<link rel="preload" href="../lib/fonts/fontawesome8deb.woff2?14663396" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="../lib/fonts/source-code-pro-v14-latin-regular.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="../lib/fonts/roboto-mono-v13-latin-500.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="../lib/fonts/source-sans-pro-v14-latin-700.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="../lib/fonts/source-sans-pro-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="preload" href="../lib/fonts/freckle-face-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin> 
<link rel="stylesheet" href="../lib/w3schools30.css">



<script data-cfasync="false" type="text/javascript">
var k42 = false;

k42 = true;

</script>
<!-- <script data-cfasync="false" type="text/javascript">
    window.snigelPubConf = {
    "adengine": {

      "activeAdUnits": ["main_leaderboard", "sidebar_top", "bottom_left", "bottom_right"]

  }
}
</script> -->
<script async data-cfasync="false" src="../../cdn.snigelweb.com/adengine/w3schools.com/loader.js" type="text/javascript"></script>
<script src="../lib/my-learning3447.js?v=1.0.5"></script>
<script type='text/javascript'>
var stickyadstatus = "";
function fix_stickyad() {
  document.getElementById("stickypos").style.position = "sticky";
  var elem = document.getElementById("stickyadcontainer");
  if (!elem) {return false;}
  if (document.getElementById("skyscraper")) {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("skyscraper"), "width").replace("px", ""));  
    }
  else {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("right"), "width").replace("px", ""));  
  }
  elem.style.width = skyWidth + "px";
  if (window.innerWidth <= 992) {
    elem.style.position = "";
    elem.style.top = stickypos + "px";
    return false;
  }
  var stickypos = document.getElementById("stickypos").offsetTop;
  var docTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
  var adHeight = Number(w3_getStyleValue(elem, "height").replace("px", ""));
  if (stickyadstatus == "") {
    if ((stickypos - docTop) < 60) {
      elem.style.position = "fixed";
      elem.style.top = "60px";
      stickyadstatus = "sticky";
      document.getElementById("stickypos").style.position = "sticky";

    }
  } else {
    if ((docTop + 60) - stickypos < 0) {  
      elem.style.position = "";
      elem.style.top = stickypos + "px";
      stickyadstatus = "";
      document.getElementById("stickypos").style.position = "static";
    }
  }
  if (stickyadstatus == "sticky") {
    if ((docTop + adHeight + 60) > document.getElementById("footer").offsetTop) {
      elem.style.position = "absolute";
      elem.style.top = (document.getElementById("footer").offsetTop - adHeight) + "px";
      document.getElementById("stickypos").style.position = "static";
    } else {
        elem.style.position = "fixed";
        elem.style.top = "60px";
        stickyadstatus = "sticky";
        document.getElementById("stickypos").style.position = "sticky";
    }
  }
}
function w3_getStyleValue(elmnt,style) {
  if (window.getComputedStyle) {
    return window.getComputedStyle(elmnt,null).getPropertyValue(style);
  } else {
    return elmnt.currentStyle[style];
  }
}
</script>

</head>
<body>
<?php include 'htincludes/htheader.php' ?>

<div class='w3-card-2 topnav notranslate' id='topnav'>
  <div style="overflow:auto;">
    <div class="w3-bar w3-left" style="width:100%;overflow:hidden;height:44px">
      <a href='javascript:void(0);' class='topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button' onclick='open_menu()' title='Menu'></a>
      <a href='../default.html' class='topnav-icons fa fa-home w3-left w3-bar-item w3-button' title='Home'></a>
      <a class="w3-bar-item w3-button" href='default.html' title='HTML Tutorial' style="padding-left:18px!important;padding-right:18px!important;">HTML</a>
      <a class="w3-bar-item w3-button" href='../css/default.html' title='CSS Tutorial'>CSS</a>
      <a class="w3-bar-item w3-button" href='../js/default.html' title='JavaScript Tutorial'>JAVASCRIPT</a>
      <a class="w3-bar-item w3-button" href='../sql/default.html' title='SQL Tutorial'>SQL</a>
      <a class="w3-bar-item w3-button" href='../python/default.html' title='Python Tutorial'>PYTHON</a>
      <a class="w3-bar-item w3-button" href='../php/default.html' title='PHP Tutorial'>PHP</a>
      <a class="w3-bar-item w3-button" href='../bootstrap/bootstrap_ver.html' title='Bootstrap Tutorial'>BOOTSTRAP</a>
      <a class="w3-bar-item w3-button" href='../howto/default.html' title='How To'>HOW TO</a>
      <a class="w3-bar-item w3-button" href='../w3css/default.html' title='W3.CSS Tutorial'>W3.CSS</a>
      <a class="w3-bar-item w3-button" href='../java/default.html' title='Java Tutorial'>JAVA</a>
      <a class="w3-bar-item w3-button" href='../jquery/default.html' title='jQuery Tutorial'>JQUERY</a>
      <a class="w3-bar-item w3-button" href='../cpp/default.html' title='C++ Tutorial'>C++</a>
      <a class="w3-bar-item w3-button" href='../cs/index.html' title='C# Tutorial'>C#</a>
      
      <a class="w3-bar-item w3-button" href='../r/default.html' title='R Tutorial'>aR</a>
      <a class="w3-bar-item w3-button" href='../react/default.html' title='React Tutorial'>React</a>
      <a class="w3-bar-item w3-button" href='../kotlin/index.html' title='Kotlin Tutorial'>Koin</a>
     
     
    

      <!--
      <a class="w3-bar-item w3-button w3-right" id='topnavbtn_exercises' href='javascript:void(0);' onclick='w3_open_nav("exercises")' title='Exercises'>EXERCISES <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a>
      -->
      
    </div>
    


<nav id="nav_tutorials" class="w3-hide-small" style="position:absolute;padding-bottom:60px;">
 <div class="w3-content" style="max-width:1100px;font-size:18px">
 <span onclick="w3_close_nav('tutorials')" class="w3-button w3-xxxlarge w3-display-topright w3-hover-white sectionxsclosenavspan" style="padding-right:30px;padding-left:30px;">&times;</span><br>
 
 </div>
 <br class="hidesm">
</nav>

<nav id="nav_references" class="w3-hide-small" style="position:absolute;padding-bottom:60px;">
 
</nav>

<nav id="nav_exercises" class="w3-hide-small" style="position:absolute;padding-bottom:60px;">

</nav>


  </div>
</div>

<div id='myAccordion' class="w3-card-2 w3-center w3-hide-large w3-hide-medium" style="width:100%;position:absolute;display:none;background-color:#E7E9EB">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-xxlarge w3-right">&times;</a><br>
  <div class="w3-container w3-padding-32">
    <a class="w3-button w3-block" style="font-size:22px;" onclick="open_xs_menu('tutorials');" href="javascript:void(0);">Tutorials <i class='fa fa-caret-down'></i></a>
    <div id="sectionxs_tutorials" class="w3-left-align w3-show" style="background-color:#282A35;color:white;"></div>
    <a class="w3-button w3-block" style="font-size:22px;" onclick="open_xs_menu('references')" href="javascript:void(0);">References <i class='fa fa-caret-down'></i></a>
    <div id="sectionxs_references" class="w3-left-align w3-show" style="background-color:#282A35;color:white;"></div>
    <a class="w3-button w3-block" style="font-size:22px;" onclick="open_xs_menu('exercises')" href="javascript:void(0);">Exercises <i class='fa fa-caret-down'></i></a>
    <div id="sectionxs_exercises" class="w3-left-align w3-show" style="background-color:#282A35;color:white;"></div>
    <a class="w3-button w3-block" style="font-size:22px;" href="https://courses.w3schools.com/" target="_blank">Paid Courses</a>
    <a class="w3-button w3-block" style="font-size:22px;" href="../spaces/index.html" target="_blank" onclick="ga('send', 'event', 'spacesFromTutorialsAcc', 'click');" title="Get Your Own Website With W3schools Spaces">Spaces</a>
    <a class="w3-button w3-block" style="font-size:22px;" target="_blank"href="../videos/index.html" onclick="ga('send', 'event', 'Videos' , 'fromTopnavMain')" title="Video Tutorials">Videos</a>
    <a class="w3-button w3-block" style="font-size:22px;" href="https://shop.w3schools.com/" target="_blank">Shop</a>
  </div>
</div>

<script>

</script>


<div class='w3-sidebar w3-collapse' id='sidenav'>
  <div id='leftmenuinner'>
    <div id='leftmenuinnerinner'>
<!--  <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
<h2 class="left"><span class="left_h2">HTML</span> Tutorial</h2>
<a target="_top" href="default.html">HTML HOME</a>
<a target="_top" href="html_intro.html">HTML Introduction</a>
<a target="_top" href="html_editors.html">HTML Editors</a>
<a target="_top" href="html_basic.html">HTML Basic</a>
<a target="_top" href="html_elements.html">HTML Elements</a>
<a target="_top" href="html_attributes.html">HTML Attributes</a>
<a target="_top" href="html_headings.html">HTML Headings</a>
<a target="_top" href="html_paragraphs.html">HTML Paragraphs</a>
<a target="_top" href="html_styles.html">HTML Styles</a>
<a target="_top" href="html_formatting.html">HTML Formatting</a>
<a target="_top" href="html_quotation_elements.html">HTML Quotations</a>
<a target="_top" href="html_comments.html">HTML Comments</a>
<a target="_top" href="html_colors.html">HTML Colors</a>
<div class="tut_overview">
  <a target="_top" href="html_colors.html">Colors</a>
  <a target="_top" href="html_colors_rgb.html">RGB</a>
  <a target="_top" href="html_colors_hex.html">HEX</a>
  <a target="_top" href="html_colors_hsl.html">HSL</a>
</div>
<a target="_top" href="html_css.html">HTML CSS</a>
<a target="_top" href="html_links.html">HTML Links</a>
<div class="tut_overview">
  <a target="_top" href="html_links.html">Links</a>
  <a target="_top" href="html_links_colors.html">Link Colors</a>
  <a target="_top" href="html_links_bookmarks.html">Link Bookmarks</a>
</div>
<a target="_top" href="html_images.html">HTML Images</a>
<div class="tut_overview">
  <a target="_top" href="html_images.html">Images</a>
  <a target="_top" href="html_images_imagemap.html">Image Map</a>
  <a target="_top" href="html_images_background.html">Background Images</a>
  <a target="_top" href="html_images_picture.html">The Picture Element</a>
</div>
<a target="_top" href="html_favicon.html">HTML Favicon</a>
<a target="_top" href="html_tables.html">HTML Tables</a>
<div class="tut_overview">
  <a target="_top" href="html_tables.html">HTML Tables</a>
  <a target="_top" href="html_table_borders.html">Table Borders</a>
  <a target="_top" href="html_table_sizes.html">Table Sizes</a>
  <a target="_top" href="html_table_headers.html">Table Headers</a>
  <a target="_top" href="html_table_padding_spacing.html">Padding &amp; Spacing</a>
  <a target="_top" href="html_table_colspan_rowspan.html">Colspan &amp; Rowspan</a>
  <a target="_top" href="html_table_styling.html">Table Styling</a>
  <a target="_top" href="html_table_colgroup.html">Table Colgroup</a>
</div>



<a target="_top" href="html_lists.html">HTML Lists</a>
<div class="tut_overview">
<a target="_top" href="html_lists.html">Lists</a>
<a target="_top" href="html_lists_unordered.html">Unordered Lists</a>
<a target="_top" href="html_lists_ordered.html">Ordered Lists</a>
<a target="_top" href="html_lists_other.html">Other Lists</a>
</div>
<a target="_top" href="html_blocks.html">HTML Block &amp; Inline</a>
<a target="_top" href="html_classes.html">HTML Classes</a>
<a target="_top" href="html_id.html">HTML Id</a>
<a target="_top" href="html_iframe.html">HTML Iframes</a>
<a target="_top" href="html_scripts.html">HTML JavaScript</a>
<a target="_top" href="html_filepaths.html">HTML File Paths</a>
<a target="_top" href="html_head.html">HTML Head</a>
<a target="_top" href="html_layout.html">HTML Layout</a>
<a target="_top" href="html_responsive.html">HTML Responsive</a>
<a target="_top" href="html_computercode_elements.html">HTML Computercode</a>
<a target="_top" href="html5_semantic_elements.html">HTML Semantics</a>
<a target="_top" href="html5_syntax.html">HTML Style Guide</a>
<a target="_top" href="html_entities.html">HTML Entities</a>
<a target="_top" href="html_symbols.html">HTML Symbols</a>
<a target="_top" href="html_emojis.html">HTML Emojis</a>
<a target="_top" href="html_charset.html">HTML Charset</a>
<a target="_top" href="html_urlencode.html">HTML URL Encode</a>
<a target="_top" href="html_xhtml.html">HTML vs. XHTML</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> Forms</h2>
<a target="_top" href="html_forms.html">HTML Forms</a>
<a target="_top" href="html_forms_attributes.html">HTML Form Attributes</a>
<a target="_top" href="html_form_elements.html">HTML Form Elements</a>
<a target="_top" href="html_form_input_types.html">HTML Input Types</a>
<a target="_top" href="html_form_attributes.html">HTML Input Attributes</a>
<a target="_top" href="html_form_attributes_form.html">HTML Input Form Attributes</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> Graphics</h2>
<a target="_top" href="html5_canvas.html">HTML Canvas</a>
<a target="_top" href="html5_svg.html">HTML SVG</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> Media</h2>
<a target="_top" href="html_media.html">HTML Media</a>
<a target="_top" href="html5_video.html">HTML Video</a>
<a target="_top" href="html5_audio.html">HTML Audio</a>
<a target="_top" href="html_object.html">HTML Plug-ins</a>
<a target="_top" href="html_youtube.html">HTML YouTube</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> APIs</h2>
<a target="_top" href="html5_geolocation.html">HTML Geolocation</a>
<a target="_top" href="html5_draganddrop.html">HTML Drag/Drop</a>
<a target="_top" href="html5_webstorage.html">HTML Web Storage</a>
<a target="_top" href="html5_webworkers.html">HTML Web Workers</a>
<a target="_top" href="html5_serversentevents.html">HTML SSE</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> Examples</h2>
<a target="_top" href="html_examples.html">HTML Examples</a>
<a target="_top" href="html_quiz.html">HTML Quiz</a>
<a target="_top" href="html_exercises.html">HTML Exercises</a>
<a target="_top" href="html_exam.html">HTML Certificate</a>
<a target="_top" href="html_summary.html">HTML Summary</a>
<a target="_top" href="html_accessibility.html">HTML Accessibility</a>
<br>
<h2 class="left"><span class="left_h2">HTML</span> References</h2>
<a target="_top" href="../tags/default.html">HTML Tag List</a>
<a target="_top" href="../tags/ref_attributes.html">HTML Attributes</a>
<a target="_top" href="../tags/ref_standardattributes.html">HTML Global Attributes</a>
<a target="_top" href="../tags/ref_html_browsersupport.html">HTML Browser Support</a>
<a target="_top" href="../tags/ref_eventattributes.html">HTML Events</a>
<a target="_top" href="../tags/ref_colornames.html">HTML Colors</a>
<a target="_top" href="../tags/ref_canvas.html">HTML Canvas</a>
<a target="_top" href="../tags/ref_av_dom.html">HTML Audio/Video</a>
<a target="_top" href="../tags/ref_html_dtd.html">HTML Doctypes</a>
<a target="_top" href="../tags/ref_charactersets.html">HTML Character Sets</a>
<a target="_top" href="../tags/ref_urlencode.html">HTML URL Encode</a>
<a target="_top" href="../tags/ref_language_codes.html">HTML Lang Codes</a>
<a target="_top" href="../tags/ref_httpmessages.html">HTTP Messages</a>
<a target="_top" href="../tags/ref_httpmethods.html">HTTP Methods</a>
<a target="_top" href="../tags/ref_pxtoemconversion.html">PX to EM Converter</a>
<a target="_top" href="../tags/ref_keyboardshortcuts.html">Keyboard Shortcuts</a>
      <br><br>
    </div>
  </div>
</div>
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
  <div class='w3-row w3-white'>
    <div class='w3-col l10 m12' id='main'>
      <div id='mainLeaderboard' style='overflow:hidden;'>
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="adngin-main_leaderboard-0"></div>
        <!-- adspace leaderboard -->

      </div>
<h1>HTML <span class="color_h1">Introduction</span></h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="default.html">&#10094; Previous</a>
<a class="w3-right w3-btn" href="html_editors.html">Next &#10095;</a>
</div>
<hr>
<p class="intro">HTML is the standard markup language for creating Web pages.</p>
<hr>

<h2>What is HTML?</h2>
<ul>
<li>HTML stands for Hyper Text Markup Language</li>
  <li>HTML is the standard markup language for creating Web pages</li>
  <li>HTML describes the structure of a Web page</li>
  <li>HTML consists of a series of elements</li>
  <li>HTML elements tell the browser how to display the content</li>
  <li>HTML elements label pieces of content such as &quot;this is a heading&quot;, &quot;this 
  is a paragraph&quot;, &quot;this is a link&quot;, etc.</li>
</ul>
<hr>

<h2>A Simple HTML Document</h2>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;!DOCTYPE html&gt;<br>
&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;Page Title&lt;/title&gt;<br>
 &lt;/head&gt;<br>
&lt;body&gt;<br><br>&lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>
    &lt;/body&gt;<br>&lt;/html&gt;
</div>
<a target="_blank" href="tryit6a1d.asp?filename=tryhtml_intro" class="w3-btn w3-margin-bottom">Try it Yourself &raquo;</a>
</div>
<h3>Example Explained</h3>
<ul>
<li>The <code class="w3-codespan">&lt;!DOCTYPE html&gt;</code> declaration defines 
that this document is an HTML5 document</li>
<li>The <code class="w3-codespan">&lt;html&gt;</code> element is the root element of an HTML 
page</li>
 <li>The <code class="w3-codespan">&lt;head&gt;</code> element contains meta information about the 
 HTML page</li>
 <li>The <code class="w3-codespan">&lt;title&gt;</code> element specifies a title for the 
 HTML page (which is shown in the browser's title bar or in the page's tab)</li>
 <li>The <code class="w3-codespan">&lt;body&gt;</code> element defines the 
 document's body, and is a container for all the visible contents, such as 
 headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
 <li>The <code class="w3-codespan">&lt;h1&gt;</code> element defines a large heading</li>
 <li>The <code class="w3-codespan">&lt;p&gt;</code> element defines a paragraph</li>
</ul>
<hr>

<h2>What is an HTML Element?</h2>
<p>An HTML element is defined by a start tag, some content, and an end tag:</p>
<div style="font-size:20px;padding:10px;margin-bottom:10px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>tagname<span style="color:mediumblue">&gt;</span></span>Content goes here...<span style="color:brown"><span style="color:mediumblue">&lt;</span>/tagname<span style="color:mediumblue">&gt;</span></span>
</div>

<p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>

<div style="font-size:20px;padding:10px;margin-bottom:10px;">
<span style="color:brown"><span style="color:mediumblue">&lt;<span style="color:brown">h1</span>&gt;</span></span>My 
  First Heading<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span>
</div>

<div style="font-size:20px;padding:10px;margin-bottom:10px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>My first paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span>
</div>

<table class="ws-table-all notranslate">
<tr>
<th>Start tag</th>
<th>Element content</th>
<th>End tag</th>
</tr>
<tr>
<td>&lt;h1&gt;</td>
<td>My First Heading</td>
<td>&lt;/h1&gt;</td>
</tr>
<tr>
<td>&lt;p&gt;</td>
<td>My first paragraph.</td>
<td>&lt;/p&gt;</td>
</tr>
<tr>
<td>&lt;br&gt;</td>
<td><em>none</em></td>
<td><em>none</em></td>
</tr>
</table>

<div class="w3-panel w3-note">
<p><strong>Note:</strong> Some HTML elements have no content (like the &lt;br&gt; 
element). These elements are called empty elements. Empty elements do not have an end tag!</p>
</div>
<hr>

<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <div id="adngin-mid_content-0"></div>
  
</div>
<hr>
<h2>Web Browsers</h2>
<p>The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them 
correctly.</p>
<p>A browser does not display the HTML tags, but uses them to determine how to display the document:</p>
<p><img alt="View in Browser" src="img_chrome.png" class="w3-image"></p>
<hr>

<h2>HTML Page Structure</h2>
<p>Below is a visualization of an HTML page structure:</p>
<div style="width:99%;border:1px solid grey;padding:3px;margin:0;background-color:#ddd">&lt;html&gt;
<div style="width:90%;border:1px solid grey;padding:3px;margin:20px">&lt;head&gt;
<div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;title&gt;Page title&lt;/title&gt;
</div>
&lt;/head&gt;
</div>
<div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#ddd">&lt;body&gt;
<div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#fff">
<div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;h1&gt;This is a heading&lt;/h1&gt;</div>
<div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;This is a paragraph.&lt;/p&gt;</div>
<div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;This is another paragraph.&lt;/p&gt;</div>
</div>
&lt;/body&gt;
</div>
&lt;/html&gt;
</div>
<div class="w3-panel w3-note">
<p><strong>Note:</strong> The content inside the &lt;body&gt; section (the white area above) 
will be displayed in a browser. The content inside the &lt;title&gt; element will be 
shown in the browser's title bar or in the page's tab.</p>
</div>
<hr>

<h2>HTML History</h2>
<p>Since the early days of the World Wide Web, there have been many versions of HTML:</p>
<table class="ws-table-all notranslate">
  <tr>
    <th>Year</th>
    <th>Version</th>
  </tr>
  <tr>
    <td>1989</td>
    <td>Tim Berners-Lee invented www</td>
  </tr>
  <tr>
    <td>1991</td>
    <td>Tim Berners-Lee invented HTML</td>
  </tr>
  <tr>
    <td>1993</td>
    <td>Dave Raggett drafted HTML+</td>
  </tr>
  <tr>
    <td>1995</td>
    <td>HTML Working Group defined HTML 2.0</td>
  </tr>
  <tr>
    <td>1997</td>
    <td>W3C Recommendation: HTML 3.2</td>
  </tr>
  <tr>
    <td>1999</td>
    <td>W3C Recommendation: HTML 4.01</td>
  </tr>
  <tr>
    <td>2000</td>
    <td>W3C Recommendation: XHTML 1.0</td>
  </tr>
  <tr>
    <td>2008</td>
    <td>WHATWG HTML5 First Public Draft</td>
  </tr>
  <tr>
    <td>2012</td>
    <td><a href="http://whatwg.org/html/" target="_blank">WHATWG HTML5 Living Standard</a></td>
  </tr>
  <tr>
    <td>2014</td>
    <td><a href="http://www.w3.org/TR/html5/" target="_blank">W3C Recommendation: HTML5</a></td>
  </tr>
  <tr>
    <td>2016</td>
    <td>W3C Candidate Recommendation: HTML 5.1</td>
  </tr>
  <tr>
    <td>2017</td>
    <td><a href="http://www.w3.org/TR/html51/" target="_blank">W3C Recommendation: HTML5.1 2nd Edition</a></td>
  </tr>
  <tr>
    <td>2017</td>
    <td><a href="http://www.w3.org/TR/html52/" target="_blank">W3C Recommendation: HTML5.2</a></td>
  </tr>
</table>

<div class="w3-panel w3-note">
<p>This tutorial follows the latest HTML5 standard.</p>
</div>



<br>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="default.html">&#10094; Previous</a>
<a class="w3-right w3-btn" href="html_editors.html">Next &#10095;</a>
</div>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
<div class="w3-col l2 m12" id="right">

<div class="sidesection">
  <div id="skyscraper">
  
    <div id="adngin-sidebar_top-0"></div>
  
  </div>
</div>
  
<style>
.ribbon-vid {
  font-size:12px;
  font-weight:bold;
  padding: 6px 20px;
  left:-20px;
  top:-10px;
  text-align: center;
  color:black;
  border-radius:25px;
}
</style>



<!-- <div class="sidesection">
<h4><a href="../colors/colors_picker.html">COLOR PICKER</a></h4>
<a href="../colors/colors_picker.html">
<img src="https://www.w3schools.com/images/colorpicker2000.png" alt="colorpicker" loading="lazy"></a>
</div>

<div class="sidesection">-->
<!--<h4>LIKE US</h4>
   <div class="w3-text-grey sharethis">
    <a href="https://www.facebook.com/w3schoolscom/" target="_blank" title="Facebook"><span class="fa fa-facebook-square fa-2x"></span></a>
    <a href="https://www.instagram.com/w3schools.com_official/" target="_blank" title="Instagram"><span class="fa fa-instagram fa-2x"></span></a>
    <a href="https://www.linkedin.com/company/w3schools.com/" target="_blank" title="LinkedIn"><span class="fa fa-linkedin-square fa-2x"></span></a>
    <a href="https://discord.gg/6Z7UaRbUQM" target="_blank" title='Join the W3schools community on Discord'><span class="fa fa-discord fa-2x"></span></a>    
  </div>
</div> -->

<!--
<div class="sidesection" style="border-radius:5px;color:#555;padding-top:1px;padding-bottom:8px;margin-left:auto;margin-right:auto;max-width:230px;background-color:#d4edda">
<p>Get your<br>certification today!</p>
<a href="/cert/default.asp" target="_blank">
<img src="/images/w3certified_logo_250.png" style="margin:0 12px 20px 10px;max-width:80%">
</a>
<a class="w3-btn w3-margin-bottom" style="text-decoration:none;border-radius:5px;"
href="/cert/default.asp" target="_blank">View options</a>
</div>
-->



<!-- <div id="internalCourses"  class="sidesection">
<p style="font-size:18px;padding-left:2px;padding-right:2px;">Get certified<br>by completing<br>a course today!</p>
<a href="https://courses.w3schools.com/" target="_blank" onclick="ga('send', 'event', 'Courses' , 'Clicked on courses banner in ads column');">
<div style="padding:0 20px 20px 20px">
<svg id="w3_cert_badge2" style="margin:auto;width:85%" data-name="w3_cert_badge2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><defs><style>.cls-1{fill:#04aa6b;}.cls-2{font-size:23px;}.cls-2,.cls-3,.cls-4{fill:#fff;}.cls-2,.cls-3{font-family:RobotoMono-Medium, Roboto Mono;font-weight:500;}.cls-3{font-size:20.08px;}</style></defs><circle class="cls-1" cx="150" cy="150" r="146.47" transform="translate(-62.13 150) rotate(-45)"/><text class="cls-2" transform="translate(93.54 63.89) rotate(-29.5)">w</text><text class="cls-2" transform="translate(107.13 56.35) rotate(-20.8)">3</text><text class="cls-2" transform="matrix(0.98, -0.21, 0.21, 0.98, 121.68, 50.97)">s</text><text class="cls-2" transform="translate(136.89 47.84) rotate(-3.47)">c</text><text class="cls-2" transform="translate(152.39 47.03) rotate(5.12)">h</text><text class="cls-2" transform="translate(167.85 48.54) rotate(13.72)">o</text><text class="cls-2" transform="translate(182.89 52.35) rotate(22.34)">o</text><text class="cls-2" transform="matrix(0.86, 0.52, -0.52, 0.86, 197.18, 58.36)">l</text><text class="cls-2" transform="matrix(0.77, 0.64, -0.64, 0.77, 210.4, 66.46)">s</text><text class="cls-3" transform="translate(35.51 186.66) rotate(69.37)"> </text><text class="cls-3" transform="matrix(0.47, 0.88, -0.88, 0.47, 41.27, 201.28)">C</text><text class="cls-3" transform="matrix(0.58, 0.81, -0.81, 0.58, 48.91, 215.03)">E</text><text class="cls-3" transform="matrix(0.67, 0.74, -0.74, 0.67, 58.13, 227.36)">R</text><text class="cls-3" transform="translate(69.16 238.92) rotate(39.44)">T</text><text class="cls-3" transform="matrix(0.85, 0.53, -0.53, 0.85, 81.47, 248.73)">I</text><text class="cls-3" transform="translate(94.94 256.83) rotate(24.36)">F</text><text class="cls-3" transform="translate(109.34 263.09) rotate(16.83)">I</text><text class="cls-3" transform="translate(124.46 267.41) rotate(9.34)">E</text><text class="cls-3" transform="translate(139.99 269.73) rotate(1.88)">D</text><text class="cls-3" transform="translate(155.7 270.01) rotate(-5.58)"> </text><text class="cls-3" transform="translate(171.32 268.24) rotate(-13.06)"> </text><text class="cls-2" transform="translate(187.55 266.81) rotate(-21.04)">.</text><text class="cls-3" transform="translate(203.27 257.7) rotate(-29.24)"> </text><text class="cls-3" transform="translate(216.84 249.83) rotate(-36.75)"> </text><text class="cls-3" transform="translate(229.26 240.26) rotate(-44.15)">2</text><text class="cls-3" transform="translate(240.39 229.13) rotate(-51.62)">0</text><text class="cls-3" transform="translate(249.97 216.63) rotate(-59.17)">2</text><text class="cls-3" transform="matrix(0.4, -0.92, 0.92, 0.4, 257.81, 203.04)">2</text><path class="cls-4" d="M196.64,136.31s3.53,3.8,8.5,3.8c3.9,0,6.75-2.37,6.75-5.59,0-4-3.64-5.81-8-5.81h-2.59l-1.53-3.48,6.86-8.13a34.07,34.07,0,0,1,2.7-2.85s-1.11,0-3.33,0H194.79v-5.86H217.7v4.28l-9.19,10.61c5.18.74,10.24,4.43,10.24,10.92s-4.85,12.3-13.19,12.3a17.36,17.36,0,0,1-12.41-5Z"/><path class="cls-4" d="M152,144.24l30.24,53.86,14.94-26.61L168.6,120.63H135.36l-13.78,24.53-13.77-24.53H77.93l43.5,77.46.15-.28.16.28Z"/></svg>
</div> -->

</a>


<!--
<div class="sidesection" style="margin-left:auto;margin-right:auto;max-width:230px">
<a href="https://shop.w3schools.com/" target="_blank" title="Buy W3Schools Merchandize">
  <img src="/images/tshirt.jpg" style="max-width:100%;">
</a>
</div>
-->

<div class="sidesection" id="moreAboutSubject">
</div>

<!--
<div id="sidesection_exercise" class="sidesection" style="background-color:#555555;max-width:200px;margin:auto;margin-bottom:32px">
  <div class="w3-container w3-text-white">
    <h4>Exercises</h4>
  </div>
  <div>
    <div class="w3-light-grey">
      <a target="_blank" href="/html/exercise.asp" style="padding-top:8px">HTML</a>
      <a target="_blank" href="/css/exercise.asp">CSS</a>
      <a target="_blank" href="/js/exercise_js.asp">JavaScript</a>
      <a target="_blank" href="/sql/exercise.asp">SQL</a>
      <a target="_blank" href="/php/exercise.asp">PHP</a>
      <a target="_blank" href="/python/exercise.asp">Python</a>
      <a target="_blank" href="/bootstrap/exercise_bs3.asp">Bootstrap</a>
      <a target="_blank" href="/jquery/exercise_jq.asp" style="padding-bottom:8px">jQuery</a>
    </div>
  </div>
</div>
-->






<div id="stickypos" class="sidesection" style="text-align:center;position:sticky;top:50px;">
  <div id="stickyadcontainer">
    <div style="position:relative;margin:auto;">
      
      <div id="adngin-sidebar_sticky-0"></div>
        <script>
        window.addEventListener('adnginLoaderReady', function() {
          if (Number(w3_getStyleValue(document.getElementById("main"), "height").replace("px", "")) > 2200) {
            // adspace sticky
            if (document.getElementById("adngin-mid_content-0")) {
              adngin.queue.push(function(){  adngin.cmd.startAuction(["sidebar_sticky", "mid_content" ]); });
            }
            else {
              adngin.queue.push(function(){  adngin.cmd.startAuction(["sidebar_sticky"]); });
            }
          }
          else {
            if (document.getElementById("adngin-mid_content-0")) {
              adngin.queue.push(function(){  adngin.cmd.startAuction(["mid_content"]); });
            }
          }  
        });
      </script>    
      
    </div>
  </div>
</div>

<script>
  window.addEventListener("scroll", fix_stickyad);
  window.addEventListener("resize", fix_stickyad);
</script>

</div>
</div>


</div>
<script src="../lib/w3schools_footerec85.js?update=20210902"></script>

<script>
  MyLearning.loadUser('footer');
</script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
<![endif]-->
<?php include 'htincludes/htfooter.php' ?>
</body>

<!-- Mirrored from www.w3schools.com/html/html_intro.asp by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 13:03:44 GMT -->
</html>