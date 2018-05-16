### 0.2
* **ADDITONS**
	* New footer

		* New file: **footer.php** Shows the list of resources links,  shows the link with a image of the book on which it is based, shows the related books information and also show the Educational information.

	* In functions.php

		* New function: **is_post_type($type)** returns true if type is a post type part and if  **are_related_books_enabled($post->ID)** return true. 


* **ENHANCEMENTS**
	* Remove the sidebar.php file.

* **List of files revised**

	* functions.php
	* footer.php


### 0.1
* **ADDITONS**
	* New sidebar.php
 	
 		* New file: **sidebar.php** in this file are added new buttons for the new sidebar and new divs that are the pop out for the new buttons. Prints all the information about the resources links that are in pressbooks-metadata-related-content plugin.
 		* New file: **pop-out.js**  that contains the function **click**.
 		* New function: **click** that add or remove the pop-out.  

	* In functions.php
	
 		* New function: **pm_enqueue_scripts**: this function fixes pop-out for  extra sidebar buttons.
 		* New action:**wp_enqueue_scripts**: call a theme_enqueue_styles function.
 		* New action: **wp_enqueue_scripts**: call a pm_enqueue_scripts function.
 	
 	* In style.css
 		* New style: add styles to new buttons in sidebar and add style to pop-out.

		

* **List of files revised**

	* functions.php
	* sidebar.php
	* style.css
	* pop-out.js