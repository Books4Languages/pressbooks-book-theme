# pressbooks-book-theme

Contributors: @colomet,  @nicoleacuna

Tags: pressbooks, theme

Tested up to: [![WordPress](https://img.shields.io/wordpress/v/akismet.svg)](https://wordpress.org/download/)


Stable tag: [![Current Release](https://img.shields.io/github/release/Books4Languages/pressbooks-books4languages.svg)](https://github.com/Books4Languages/pressbooks-books4languages/releases/latest/)

License:  [![License](https://img.shields.io/badge/license-GPL--2.0%2B-red.svg)](https://github.com/Books4Languages/pressbooks-books4languages/blob/master/license.txt)

License URI: http://www.gnu.org/licenses/gpl-2.0.html

## Description  

Austen is a child theme of pressbooks Luther theme. This theme has been modificated and print the multiples fields that are create in pressbooks-metadata-related-content plugin in the frontend. 

## Installation 
1. Clone (or copy) this repository to the /wp-content/themes/ directory.
2. Activate the theme through the 'Themes' screen in WordPress.

## Frequently Asked Questions 


## Requirements 
Theme works with:

- ![PHP](https://img.shields.io/badge/PHP-5.6.X-blue.svg)

- [![Pressbooks](https://img.shields.io/badge/Pressbooks-V%203.9.9-red.svg)](https://github.com/pressbooks/pressbooks/releases/tag/3.9.9)

- This theme needs the pressbooks-metadata-related-content plugin activated to show the fields in frontend.

- Luther theme (pressbooks-book).

## Disclaimers 
The modificated Pressbooks theme is supplied "as is" and all use is at your own risk.

## Screenshots 
You can see all of the screenshots of the theme [here](https://github.com/Books4Languages/pressbooks-books4languages-child/blob/master/books4languages/screenshots/screenshots.md).
## Roadmap


## Changelogs 
### 0.2
* **ADDITONS**
	* New footer

		* New file: **footer.php** this file contains the copy of footer.php Luther but it has been modified. New parts are added to the footer. It shows the list of resources links, also shows the link with a image of the book on which it is based and also shows the related books information. For this it calls the respective shortcodes: **related_content** , **related_based** and **related_books** that are in **pressbooks-related-content** plugin.

	* In functions.php

		* New function: **is_post_type($type)** that returns true if $type is a post type part and if the function are_related_books_enabled($post->ID) return true. The **are_related_books_enabled** function is in **pressbooks-related-content** plugin and is in charge of seeing if the checkbox is activated or not.
	


* **ENHANCEMENTS**
	* Remove the sidebar.php file.

		

* **List of files revised**

	* functions.php
	* footer.php


### 0.1
* **ADDITONS**
	* New sidebar.php
 	
 		* New file: **sidebar.php** this file contains the copy of sidebar.php Luther but it has been modified. In this file are added new buttons for the new sidebar and new divs that are the pop out for the new buttons. This file contains the called to print_chapter_r_fields. This function is in  pressbooks-metadata-related-content  plugin and  prints all the information about the resources links that are in pressbooks-metadata-related-content plugin.
 		* New file: **pop-out.js**  that contains the function **click**.
 		* New function: **click** that add or remove the pop-out this function is called by all the buttoms that are in sidebar.  

	* In functions.php
	
 		* New function: **pm_enqueue_scripts**: this function fixes pop-out for  extra sidebar buttons and is in functions.php
 		* New action:**wp_enqueue_scripts**: call a theme_enqueue_styles function and is in functions.php
 		* New action: **wp_enqueue_scripts**: call a pm_enqueue_scripts function and is in functions.php
 	
 	* In style.css
 		* New style: this new styles add styles to new buttons in sidebar and add style to pop-out.

		

* **List of files revised**

	* functions.php
	* sidebar.php
	* style.css
	* pop-out.js


## Upgrade Notice 

### 0.2
To use the last version of this theme.

### 0.1
To use the version 0.1 of  Austen theme.

## Credits 
Here's a link to [WordPress Plugin Boilerplate](http://wppb.io/).

Here's a link to [WordPress](https://wordpress.org/)

Here's a llink to [PressBooks](https://pressbooks.org/get-involved/)

Here's a link to [Dilinger](http://dillinger.io/)

Here's a link to [Markdown's Syntax Documentation](https://daringfireball.net/projects/markdown/syntax)



