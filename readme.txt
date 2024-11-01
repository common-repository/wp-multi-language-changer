=== WPMultiLanguageChanger ===
Contributors: InFog
Donate link: http://infog.casoft.info
Tags: multilanguage
Requires at least: 2.7
Tested up to: 2.9.2
Stable tag: 0.5

This plugin allows you to write and you readers to change between languages in your blog in a easy way.

== Description ==

This plugin allows you to write posts in more than one language, all you have to
do is to add some divs to your posts, each div with a class, that is the
language's name. This way your readers will be able to just click in the flags
and change between languages.
        
== Installation ==

1. Upload wpmultilanguagechanger to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Write some posts using special divs (See FAQ).
4. Enjoy your multi language blog!

== Frequently Asked Questions ==

= How do I define a language? =

Just create a div using a class with the language code, for example:
I write posts in Brazilian Portuguese and English, so what I have to do is write
my Portuguese text inside a div that class is "pt\_br" and my English text
inside a div that class is "en".
Here is an example:
&lt;div class="en"&gt;English&lt;/div&gt; &lt;div class="pt\_br"&gt;Português&lt;/div&gt;.

== Screenshots ==

1. No screenshots yet. 

== Changelog ==

= Version 0.5 =

1. Fixed a bug in flags box's display. Thanks René Kooijman.

= Version 0.4 =

1. Stoped showing the flags div in non multi language posts.
2. Added eight more flags.
3. Added a border to the active flag.

= Version 0.3 =

1. Blog posts where empty for rss readers. 

= Version 0.2 =

1. Fixed the flag's images path problem. (Thanks PotHix)

= Version 0.1 =

1. First release.
