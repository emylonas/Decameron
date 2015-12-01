<?php
	$selected = "the_project";
	require '../header.php';
?>

<ul id="breadcrumbs">
	<li><a href="../dweb.shtml">Main</a></li>
	<li><a href="index.php">The Project</a></li>	
	<li>Contributions to the Decameron Web</li>	
</ul>
<h2>Contributions to the <i>Decameron</i> Web</h2>
<div>
							<div align="center">
									<table border="0" width="300">
										<tr>
											<th colspan="3">
												<p class="h"><a name="top">Index</p>
											</th>
										</tr>

										<tr>
											<td>
												<p class="bodynoindent"><a href="#top">What is HTML Code?</a></p>
											</td>
											<td width="10"></td>
											<td>
												<p class="bodynoindent"><a href="#other">Other Tags</a></p>
											</td>

										</tr>
										<tr>
											<td>
												<p class="bodynoindent"><a href="#how">How do I write in HTML?</a></p>
											</td>
											<td width="10"></td>
											<td>
												<p class="bodynoindent"><a href="#special">Special Characters</a></p>

											</td>
										</tr>
										<tr>
											<td>
												<p class="bodynoindent"><a href="#phrase">Phrase Level Markers</a></p>
											</td>
											<td width="10"></td>
											<td>

												<p class="bodynoindent"><a href="#example">Sample HTML Document</a></p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="bodynoindent"><a href="#anchors">Anchors (Links)</a></p>
											</td>
											<td width="10"></td>

											<td>
												<p class="bodynoindent"><a href="#style">Style Conventions</a></p>
											</td>
										</tr>
										<tr>
											<td>
												<p class="bodynoindent"><a href="#images">Inserting Images</a></p>
											</td>

											<td width="10"></td>
											<td>
												<p class="bodynoindent"><a href="links.php">Useful WWW Resources</a></p>
											</td>
										</tr>
									</table>
								</div>
								<p class="b"></p>

								<p class="b">This document was prepared as a quick reference tool for students in IT 102 and presupposes no previous knowledge of HTML (Hypertext Mark-up Language). A conscientious effort must be made to ensure that each student's contributions adhere to a certain format in order to maintain consistency of appearance and content; it is imperative that, as you prepare your research for inclusion in the Web, you follow the basic guidelines below. If you prefer to have a hard copy of this page, select &quot;Print&quot; on your browser.</p>
								<p class="h"><b><a name="what"></a>What is HTML code?</b></p>
								<p class="b">If you have ever accidentally opened a Word document in a simpler program such as Write or Teach Text, you will have noticed that word processors include a large amount of &quot;code&quot; in and around the text itself which normally remains invisible. These symbols and numbers tell the word processing program how the text is to be displayed on the screen and when printed. World Wide Web documents too contain encoded information that is &quot;read&quot; by Internet browsers (such as Netscape and Internet Explorer) and translated into formatting (italics, images, paragraph returns, links to other documents and so on). Although HTML code is not normally visible when you look at Internet documents, you can indeed see it by selecting VIEW and SOURCE on browsers. Try this - both out of curiosity and as a reference in case you leave your notes at home.</p>

								<div align="center">
									<p class="b"><a href="#top">top</a></p>
								</div>
								<p class="h"><b><a name="how"> </a>How do I write in HTML?</b></p>
								<p class="b">While there is a very large selection of different formatting &quot;tags&quot; (the specific characters that indicate to the browsers how the document should be displayed) available in the most recent version of HTML, in this course you will have at your disposal a limited set (as described below). Each document you write will be composed with a regular word processing program and saved as <b>text only</b> with a name which ends in &quot;.html&quot; (e.g. &quot;document.html&quot;). Use only lower case letters in document names. <i>Note:</i> because word processing programs now attempt to help you to compose code, you may think that such help is a good idea. In reality, programs like Word often write pretty awful html. You will have much greater success using uncomplicated text editing programs such as Simple Text or WordPad. The whole process is really quite simple once you've learned the contents of this document. Keep it handy and refer to it often. Time invested now is time saved later. HTML code is composed by setting a string of elements within angular brackets into your document. These brackets (&quot;&lt;&quot; and &quot;&gt;&quot;) contain the instructions the browser uses to insert images, links and text formatting. They become invisible, when done properly, when your work is viewed by someone following regular links.</p>

								<div align="center">
									<p class="b"><a href="#top">top</a></p>
								</div>
								<p class="h"><b><a name="phrase"></a>Phrase Level Markers:</b></p>
								<p class="b">These tags are placed around text to produce bold (<b>&lt;b&gt;</b>) or italicized (<b>&lt;i&gt;</b>) characters and to set text into centered (<b>&lt;center&gt;</b>) or double-indent format (<b>&lt;blockquote&gt;</b>). Note that there are no spaces between the tags and the formatted text. Note too that the end tag is identical to the beginning tag with a single exception: it is preceded by a front-slash (&quot;/&quot;). Contributors to the <i>Decameron Web</i> are to use bold for document-internal titles and italics for foreign words and titles of books. Use double indentation only for citing more than five contiguous lines of text. Though you may use the tags together, you must nest them (e.g. it is okay to write <b>&lt;center&gt;&lt;i&gt;Decameron&lt;/i&gt;&lt;/center&gt;</b> but not <b>&lt;center&gt;&lt;i&gt;Decameron&lt;/center&gt;&lt;/i&gt;</b>).</p>

								<p class="bodynoindent"><b>&lt;b&gt;</b>Sample Text<b>&lt;/b&gt;</b> produces: <b>Sample Text</b><br>
									<b>&lt;i&gt;</b>Sample Text<b>&lt;/i&gt;</b> produces: <i>Sample Text</i><br>
									<b>&lt;blockquote&gt;</b>Text<b>&lt;/blockquote&gt;</b> creates double indentation.<br>

									<b>&lt;center&gt;</b>Text<b>&lt;/center&gt;</b> centers the text.</p>
								<div align="center">
									<p class="b"><a href="#top">top</a></p>
								</div>
								<p class="h"><b><a name="anchors"></a>Anchors (Links):</b></p>

								<p class="b">The greatest advantage of hypertext &quot;webs&quot; is their ability to allow users to control their own sequence of readings. This, naturally, is achieved through links &quot;anchored&quot; into a text which, when activated, carry the reader to another document. A single word or phrase may be turned into an active link by setting &quot;anchor&quot; tags around it just as we set phrase level tags around words in the examples above. The beginning tag, however, contains the Internet address that belongs to the destination document or image. In order to maximize the value and usefulness of the <i>Decameron Web</i>, all intuitively productive connections from elements in your document to an existing document should possess a link. In other words, when someone reading your document would benefit from another related document, be sure to provide a link for him or her to get there easily. Resist, however, the tendency to make &quot;Click Here&quot; links: instead, set the link around a key word or phrase. Obviously, you must keep up and be familiar with the documents already contained in the Web in order to know where to send your reader.</p>

								<p class="b">An anchored link is composed in two parts. In the first, you supply the destination address, which is known as a URL and is displayed by the browser at the top of the destination page (in the Location field, NETSCAPE, or Address field, IE): <b>&lt;a href</b>=&quot;http://www.brown.edu/destination.html&quot;<b>&gt;</b>. Be careful to set the Internet address into quotation marks exactly as you see it as documents' addresses are commonly case sensitive (since they usually reside on UNIX machines). The text that will be &quot;clicked&quot; goes immediately afterwards and is followed by the second part of the link: <b>&lt;/a&gt;</b>. You will recognize the front-slash and angled brackets, characteristic of HTML tags, from the other tags discussed above. Example: During the 14th century, the people of Florence were forced to deal with the disastrous effects of <b>&lt;a href=&quot;http://www.brown.edu/Departments/Italian_Studies/dweb/plague/plague.html&quot;&gt;</b>the plague<b>&lt;/a&gt;</b>.</p>

								<div align="center">
									<p class="b"><a href="#top">top</a></p>
								</div>
								<p class="h"><b><a name="images"></a>Inserting Images:</b></p>
								<p class="b">Given that the WWW provides for multimedia, you can also insert images and other media into your documents. Each of your documents will eventually contain all the regular images and links that you see on a formatted page. Until your projects are incorporated into the web, however, you are responsible only for those images that are specific to your documents. Although you are encouraged to make use of the ability to illustrate your research, you must keep in mind the fact that users outside of this course (indeed all over the world) will have access to it. This is of the utmost importance as any insertion of an image into the Web would be prohibited should it still be protected under copyright. For this reason, all scanned images must be out of copyright. What is more, not all images found on the Internet are free to use. Be sure to watch for copyright notices wherever you look for images. If you cannot find a suitable image, you may use a scanner to create one, always mindful of copyright restrictions. A word of caution: do not use very large images as they slow down your page's loading. There are a number of ways to get around this. Try cropping the image or, if you really need to use a large image file, reduce it to a thumbnail and link that image to the larger version. For the convenience of our users, it is helpful to include in parentheses the size of big images (larger than 150K). Your image size, however, should be possibly below 150K and its resolution not more than 100 pixels/inch. The HTML tags for images are, unlike those mentioned above, not composed of a beginning and ending part. It is a single, self-contained code element in which your image's name and complete address are identified. In the example below, we are inserting a GIF image named &quot;picture.gif&quot; and including a brief description for those who do not autoload images when exploring the WWW:</p>
								<p class="b"><b>&lt;img src=&quot;http://www.sample_univ.edu/picture.gif&quot; alt=&quot;A photo of Boccaccio's dog&quot; height=&quot;100&quot; width=&quot;100&quot;&gt;.</b></p>

								<p class="b">When you turn in a document which will contain an embedded image, it is sufficient for now simply to put the image's name in quotation marks after <b>src=</b> and to include the image itself on your disk. The height and width of your image are measured in pixels. To find the proper dimensions, use Photoshop or another image editor. You may also make use of Image Maps (images that contain various &quot;hot areas&quot; which take users to different documents depending on where they click) after consulting with your professor. If you plan on scanning slides for your work, do also consult your professors.</p>
								<div align="center">
									<p class="b"><a href="#top">top</a></p>
								</div>
								<p class="h"><b><a name="other"></a>Other Tags:</b></p>

								<p class="b">In addition to the tags discussed above, you may use others as well. Among these are the Horizontal Rule (<b>&lt;hr&gt;</b>, a horizontal shaded line), Line Break (<b>&lt;br&gt;</b>, which ends a line of text but does not add a space), and Paragraph Break (<b>&lt;p&gt;</b>, which is used between paragraphs and adds an empty line). The first two are &quot;stand-alone&quot; tags: they have no corresponding &quot;end tags.&quot; The <b>&lt;p&gt;</b> tag is complemented by the <b>&lt;/p&gt;</b> at the end of the paragraph.</p>

								<div align="center">
									<p class="b"><a href="#top">top</a></p>
								</div>
								<p class="h"><b><a name="special"></a>Special Characters:</b></p>
								<p class="b">Inevitably, you will eventually want to use foreign characters when writing your documents. &quot;Text only&quot; documents do not, however, allow you to use accents properly. Instead, you have to use an HTML character entity. An entity is a sequence of letters between an ampersand and a semicolon. Some of the most common of these are listed below:</p>
								<p class="bodynoindent">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;agrave;</b> produces &agrave;<br>

									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;egrave;</b> produces &egrave;<br>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;igrave;</b> produces &igrave;<br>

									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;ograve;</b> produces &ograve;<br>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;ugrave;</b> produces &ugrave;<br>

									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;Agrave;</b> produces &Agrave;<br>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;Egrave;</b> produces &Egrave;<br>

									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;Igrave;</b> produces &Igrave;<br>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;Ograve;</b> produces &Ograve;<br>

									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;Ugrave;</b> produces &Ugrave;<br>
									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;aacute;</b> produces &aacute;<br>

									&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>&amp;Aacute;</b> produces &Aacute; and so on.</p>
								<div align="center">
									<p class="b"><a href="#top">top</a></p>

								</div>
								<p class="h"><b><a name="example"></a>A sample HTML document:</b></p>
								<p class="b">In order to get you started, we've decided to provide you with a template that contains all the special code you need to begin work destined for the Web. The text of your work will be inserted into the middle of the template where you see &quot;Your text goes here.&quot; You do not need to know much about what is going on in the template. Indeed, your main concern should be with the quality of your content rather than the attractiveness of your web page.</p>
								<p class="b">After deciding what you wish to write about (don't forget to consult the <a href="../pedagogy/index.php">Pedagogy</a> section for ideas on successful research strategies and methods of presentation), you may turn your attention to formatting your document for the Internet. Once you think that you have done everything properly, consult this checklist to be sure that you've left nothing out:</p>

								<p class="b">Formatting:</p>
								<ol>
									<li class="b">Did you give the document an appropriate title?
									<li class="b">Did you put your name in the document?
									<li class="b">Are all instances of bold type set into the proper phrase-level markers?
									<li class="b">Are all titles of books in italics?
									<li class="b">Are all foreign words in italics (with the proper special characters)?
									<li class="b">Are all paragraphs surrounded by the proper <b>&lt;p&gt;</b> and <b>&lt;/p&gt;</b> tags?
									<li class="b">Are all citations of more than five contiguous lines of text double-indented?
								</ol>

								<p class="b">Images:</p>
								<ol>
									<li class="b">Is each image cropped to an appropriate size?
									<li class="b">Is the size in memory and resolution respecting the guidelines?
									<li class="b">Is each image appropriate in terms of content?
									<li class="b">Is the code correct?
									<li class="b">Does it look good in a browser?
								</ol>
								<p class="b">Anchors (links):</p>
								<ol>

									<li class="b">Are <i>all</i> pertinent links inserted into the document? (Remember that you must add links to already existing pages in the <i>Decameron Web</i> if the relationship is at all substantive.)
									<li class="b">Have you avoided &quot;click here&quot; links?
									<li class="b">Do all links work properly in a browser?
								</ol>
								<p class="b">Content:</p>

								<ol>
									<li class="b">Is the style appropriate?
									<li class="b">Do you do more &quot;explaining&quot; than &quot;telling&quot;?
									<li class="b">Will your reader understand the <i>Decameron</i> better after reading your work?
									<li class="b">Did you avoid truisms, oversimplification, excessive praise (or blame), spelling and grammatical errors, and run-on sentences?
									<li class="b">Did you eliminate the confusing, redundant and unfounded statements?
								</ol>

								<p class="b">Bibliography:</p>
								<ol>
									<li class="b">Did you cite all sources appropriately?
									<li class="b">Did you provide all necessary bibliographical information (including page numbers)?
									<li class="b">Does the format of your sources conform to the models in the Bibliography section of the Web?
								</ol>
								<p class="b">Remember: <b>ALL works cited must contain ALL essential data including the page numbers.</b></p>
								<p class="b">If you use an HTML editor, be sure to check the source when you are finished. Indeed, once you think you have finished composing a document, be sure to use a validator <b>before</b> handing in your diskette. The most easily accessible validator for our purposes is that provided to us by Brown (see <a href="links.php">Related Links</a>); make use of it often! Lastly, be sure that you've opened your documents in a browser and looked at them carefully. If there are errors in formatting, image presentation or linking, you must repair them <b>before</b> turning your work in.</p>

								<div align="center">
									<p class="b"><a href="#top">top</a></p>
								</div>
								<p class="h"><b><a name="style"></a>Style Conventions</b></p>
								<p class="b"></p>
								<p class="b">As you become more expert in the use of HTML (some of you doubtlessly have already mastered the basics), you will be tempted to make use of more advanced types of styles and tags. After a considerable amount of thought - and trial and error - we have made some features &quot;off limits&quot; to web contributors, largely in order to keep all aspects of the project accessible to the widest possible audience. Among these are frames, Java applets (Java scripts are permitted provided you can rationalize the necessity of including them in your documents), embedded objects, VRML (unless you plan to use it in creating an entire sub-web), backgrounds (other than the one specified above), and CGI scripts of any kind. As a general rule of thumb, if you want to do something not explained here, talk to the professor about it.</p>

								<p class="b">In light of the fact that there are so many possible types of media, we have made the choice easier for you. For images, use only GIF (type 89a interlaced) or regular JPEG (not &quot;Progressive JPEG&quot;); for audio and video, speak to the professor.</p>
								<div align="center">
									<p class="b"><a href="#top">top</a></p>
								</div>
</div>

<h3>The Project</h3>
<ul class="links">
	<li><a href="about.php">About the Project</a></li>
	<li><a href="project2.php">More About the Project</a></li>
	<li><a href="credits.php">Who Created the <i>Decameron</i> Web?</a></li>
	<li><a href="staff.php">Advisory Board</a></li>
	<li><a href="initials.php">Contributors</a></li>
	<li><a href="staff.php">Editorial Board</a></li>
	<li>HTML Guide</li>
	<li><a href="syllabus.php">Electronic Syllabus</a></li>
	<li><a href="links.php">Related Links</a></li>
	<li>The most recent <a href="newsletter/spring2000.php">Newsletter</a> (Spring 2000)</li>
</ul>	
	
<?php	include '../footer.php'; ?>
