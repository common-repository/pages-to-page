=== Pages to Page ===
Contributors: obaq
Tags: menu, pages, recent, posts, comments, calendar, archives, categories, sidebar, navigation
Requires at least: 2.7
Tested up to: 2.9.2
Stable tag: 1.1.1

== Description ==
This is a simple plugin to create the contents of Recent Comments, Pages, Categories, Archives, Recent Posts and Calendar which are usually shown in the sidebar and insert them onto a post or page. Maybe useful when you want to make the destination links for your own navigation bar or menu.
Please visit the below site for the details:
http://obaqblog.blogspot.com/2010/06/pages-to-page-plugin-for-wordpress.html

*Now, you can insert the contents of other posts or pages.

Please leave a commment at the below site if you have any problem, questions and suggestions.
http://obaqblog.blogspot.com/2010/06/pages-to-page-plugin-for-wordpress.html#comment-form

== Installation ==
Extract all folder and files.
Upload the 'pages-to-page' folder and its contents to '/wp-content/plugins/'.
Go to the 'Plugins' menu of your admin area and activate the plugin.

== Frequently Asked Questions ==
= How to insert pages into the post? =
You insert the below tagged code onto a post or page to get the contents.

Recent Posts:
[PTP]posts[/PTP]

Categories:
[PTP]categories[/PTP]

Pages:
[PTP]pages[/PTP]

Archives:
[PTP]archives[/PTP]

Links:
[PTP]links[/PTP]

Recent Comments:
[PTP]comments[/PTP]

Calendar:
[PTP]calendar[/PTP]


or you could get all of them by pasting the below code;
[PTP]pages,categories,posts,archives,links,comments,calendar[/PTP]


= How to insert the contents of other posts or pages? =
If your 'About Me' page has page ID '2', then the insertion code will be
[PTP]page:2[/PTP]
If it is a post, then
[PTP]post:2[/PTP]

You can insert the contents from multiple posts or pages separating IDs by a comma(',').
[PTP]post:259,240[/PTP]
[PTP]page:2,258,276[/PTP]

* Password protected posts and pages are won't be displayed at this moment.

== Changelog ==
= 1.1.1 =
* disabled for protected posts and pages

= 1.1 =
* a feature to insert the contents of other posts or pages

= 1.0 =
* 1.0 is the beginning of the version.

== Upgrade Notice ==
= 1.1.1 =
* upload all files to the current folder.

= 1.1 =
* upload all files to the current folder.

= 1.0 =
* 1.0 is the beginning of the version.
