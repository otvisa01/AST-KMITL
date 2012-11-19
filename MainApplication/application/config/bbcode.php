<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| BBCODE
| -------------------------------------------------------------------
| This file contains two arrays of bbcode for use with the bbcode helper.
| The first array is for buttons and the second is for parsing.
|
*/

//	name => onClick
$config['bbcode'] = array(
	"b"			=>		"[removed]insert_bbcode('**', '**');return(false)",
	"i"				=>		"[removed]insert_bbcode('*', '*');return(false)",
	"u"			=>		"[removed]insert_bbcode('[u]', '[/u]');return(false)",
	"center"	  	=>		"[removed]insert_bbcode('[center]', '[/center]');return(false)",
	"right"		=>		"[removed]insert_bbcode('[right]', '[/right]');return(false)",
	"justify"	  	=>		"[removed]insert_bbcode('[justify]', '[/justify]');return(false)",
	"quote"		=>		"[removed]insert_bbcode('[q=AUTHOR]', '[/q]');return(false)",
	"img"		  	=>		"[removed]insert_bbcode('[img]', '[/img]');return(false)",
	"url"		  	=>		"[removed]insert_bbcode('[', ']()');return(false)",
	"email"		=>		"[removed]insert_bbcode('[email=]', '[/email]');return(false)"
		);
		
//	regex => replacement, clean, loop	
$config['bbcode_to_parse'] = array(
	"#\[base_url\]#i"								=>		array(base_url(), base_url(), 1),
	"#\[/\]#"											=>		array("<hr width=9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;100%9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot; size=9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;19fca15935b2fd148a6e5c58e46c7e1ed09d03216quot; />", "", 1),
	"#\[hr\]i#"											=>		array("<hr width=9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;100%9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot; size=9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;19fca15935b2fd148a6e5c58e46c7e1ed09d03216quot; />", "", 1),
	"#\[b\](.+)\[/b\]#isU"							=>		array("<strong>$1</strong>", "", 1),
	"#\[i\](.+)\[/i\]#isU"							=>		array("<em>$1</em>",	 "", 1),
	"#\[u\](.+)\[/u\]#isU"							=>		array("<u>$1</u>", "", 1),
	"#\[center\](.+)\[/center\]#isU"			=>		array("<div style=9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;text-align: center9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;>$1</div>", "", 1),
	"#\[right\](.+)\[/right\]#isU"				=>		array("<div style=9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;text-align: right9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;>$1</div>", "",	 1),
	"#\[justify\](.+)\[/justify\]#isU"			=>		array("<div style=9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;text-align: justify9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;>$1</div>", "", 1),
	"#\[color=(.+)\](.+)\[/color\]#isU"		=>		array("<span style=9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;color:$19fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;>$2</span>",	 "",	 1),
	"#\[size=([0-9]+)\](.+)\[/size\]#isU"	=>		array("<span style=9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;font-size:$1px9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;>$2</span>", "", 1),
	"#\[img\](.+)\[/img\]#isU"					=>		array("<img  />", "", 1),
	"#\[img=(.+)\]#isU"							=>		array("<img  />", "", 1),
	"#\[email\](.+)\[/email\]#isU"				=>		array("<a >$1</a>", "$1", 1),
	"#\[email=(.+)\](.+)\[/email\]#isU"		=>		array("<a >$2</a>", "$1 ($2)", 1),
	"#\[url\](.+)\[/url\]#isU"						=>		array("<a >$1</a>", "$1", 1),
	"#\[url=(.+)\](.+)\[/url\]#isU"				=>		array("<a >$2</a>", "$1 ($2)", 1),
	"#\[list\](.+)\[/list\]#isU"					=>		array("<ul>$1</ul>", "\n$1\n", 1),
	"#\[\*\](.+)\[/\*\]#isU"						=>		array("<li>$1</li>", " - $1\n", 1),
	"#\[q\](.+)\[/q\]#isU"							=>		array("<blockquote>$1</blockquote>", "9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;$19fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;", 5),
	"#\[q=(.+)\](.+)\[/q\]#isU"					=>		array("<blockquote cite=9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;$19fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;>$2</blockquote>", "9fca15935b2fd148a6e5c58e46c7e1ed09d03216quot;$29fca15935b2fd148a6e5c58e46c7e1ed09d03216quot; ($1)", 5),
		);

/* End of file bbcode.php */
/* Location: ./application/config/bbocde.php */
