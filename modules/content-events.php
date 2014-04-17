<div class="row">

	<?php /* the_post_thumbnail(); */ ?>
	<?php the_content(); ?>
</div>


<?php /* 
	Event Manager Configuration 
	------------------------------------------------------------------------------------------
	CATEGORIES Settings
	
	GENERAL TAB
	------------
	General Options
	- NO: Disable Thumbnail
	- YES: Enable recurrence
	- NO: Enable Bookings
	- YES: Enable Tag/Categories
	- YES: Enable event attributes
	- Set default category
	- NO: Enable event Attributes / Custom fields
	- NO Default Location
	- Default location country - USA
	- YES: Enable locaions
	- NO: Require locations
	- NO: drop down for locations
	- NO: Enable location attributes
	- NO: Show some love

	Image Size
	- MAX width x height: 2000 x 2000
	- MIN width x height: 10 x 10
	- MAX size: 204800

	User Capabilities
	- Admin/Editor: 
		- all checked
	- Author/Contributor/Subscriber: 
		- uncheck - publish, delete other, edit other, delete location, delete category, edit category, manage other bookings

	Event Submission Forms
	- YES: Visual Editor
	- YES: Show form again
	- YES: Allow anonymous event submissions?
	- ID user #(198) for incognito/guest - Guest Default User
	
	Peformance Optimzation
	- Leave as default

	Styling Options
	- YES: Search forms
	- NO: Event/Location admin
	- NO: Booking admin
	- YES: Event Listing
	- YES: Locations list page
	- NO: Event booking forms
	- YES: Tag and Categories List page

	Admin tool
	- leave as default



	PAGE TAB
	------------
	Permalink Slugs
	- Leave as default

	Event Pages
	- Display event as POSTS
	- Body class: activities
	- Post class: activities-single
	- YES: Override with format
	- YES: Enable comment

	Event List/Archives
	- Event Page: Events
	- NO: Show event search
	- NO: Display calendar
	- NO: Disable title rewriting
	- YES: Enable Archives
	- Default event archive ordering: Default
	- Event archives scope: All events
	- YES: override with format
	- NO: Current event past events
	- YES: Include wordpress search
	- Event Listing Ordering: Start date, Start Time, Event name | All Descending
	- Event List Scope: All events
	- Event List Limit: 40

	Location Page AND Location List/Archives
	- leave as default

	Event Categories
	- Category Page: Categories
	- YES: Override with formats
	- List Limit: 50
	- Event Limit List: 40

	Event Tags | Other pages
	- leave as default


	FORMAT TAB = http://wp-events-plugin.com/documentation/placeholders/
	------------
	Default Event List Format (Remove header and footer format)
	//if category needs to be linkable use: #_CATEGORIES
	------
	<div class="relatedthumb box-post col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail"> 

			<header class="box-entry-header hidden-xs">
				#_CATEGORYNAME 
			</header><!-- .entry-header -->

			<div class="box-entry-title">
				<p>#_EVENTLINK</p>
				<p>#_EVENTDATES<br/>
				#_EVENTTIMES</p>
			</div>

			<footer class="box-entry-meta hidden-xs">		
				<a href="mailto:#_CONTACTEMAIL">#_CONTACTNAME</a>
				<a href="#_CONTACTURL" target="_blank" class="box-entry-meta-date pull-right">#_CONTACTURL</a>
			</footer><!-- .box-entry-meta -->

		</div>
	</div> 


	Default Single Event Format 
	------
	#_EVENTIMAGE{150,0}
	#_EVENTNOTES

	<div class="panel panel-default">
	  <div class="panel-body">
	    <div class="pull-right">#_LOCATIONMAP</div>
		<p>
			<strong>WHEN</strong><br/>
			#_EVENTDATES<br />
			#_EVENTTIMES
		</p>

		{has_location}
		<p>
			<strong>WHERE</strong><br/>
			#_LOCATIONNAME<br/>
			#_LOCATIONADDRESS<br/>
			#_LOCATIONTOWN, #_LOCATIONSTATE<br/>
			#_LOCATIONPOSTCODE
		</p>
		{/has_location}

		<p>
			<strong>CONTACT</strong><br/>
			<a href="mailto:#_CONTACTEMAIL">#_CONTACTEMAIL</a>

		</p>
	  </div>
	</div>



	Search Form & Location & Calendar
	------
	Leave as Default


	Date/Time
	------
	- m/d/y
	- mm/dd/yy

	
	Event Categories
	------
	- Categories list header format: <ul class="em-category-list list-unstyled">
	- Categories list item format: <li class="btn btn-default" style="margin:0 5px;">#_CATEGORYLINK</li>
	- Categories list footer format: </ul>
	- Default event list format header: <div class="row">
	- Default events list format
		<div class="relatedthumb box-post col-sm-6 col-md-4">
			<div class="thumbnail"> 

				<header class="box-entry-header hidden-xs">
					#_CATEGORIES 
				</header><!-- .entry-header -->

				<div class="box-entry-title">
					<p>#_EVENTLINK</p>
					<p>#_EVENTDATES<br/>
					#_EVENTTIMES</p>
				</div>

				<footer class="box-entry-meta hidden-xs">		
					<a href="mailto:#_CONTACTEMAIL">#_CONTACTNAME</a>
					<a href="#_CONTACTURL" target="_blank" class="box-entry-meta-date pull-right">#_CONTACTURL</a>
				</footer><!-- .box-entry-meta -->

			</div>
		</div> 
	- Default event list format footer: </div>

	Map Configuration
	-------
	- YES: enable google maps
	- 350px: Map width
	- 250px: Map height
	- #_LOCATIONMAP - Location balloon format
		<strong>#_LOCATIONNAME</strong>
		<p>
			#_LOCATIONADDRESS<br/>
			#_LOCATIONTOWN, #_LOCATIONSTATE<br/>
			#_LOCATIONPOSTCODE
		</p>


*/ ?>