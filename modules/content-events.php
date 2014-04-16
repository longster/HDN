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
	- NO: Enable event custom fields
	- NO Default Location
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
	- Leave as default

	Event List/Archives
	- Event Page: EVents
	- NO: Show event search
	- NO: Display calendar
	- NO: Disable title rewriting
	- YES: Enable Archives
	- Event archives scope: All events
	- YES: override with format
	- YES: Current event past events
	- YES: Include wordpress search
	- Event Listing Ordering: Start date, Start Time, Event name | All Descending
	- Event List Scope: All events
	- Event List Limit: 30

	Location Page AND Location List/Archives
	- leave as default

	Event Categories
	- Category Page: Categories
	- YES: Override with formats
	- List Limit: 10?
	- Event Limit List: 20?

	Event Tags | Other pages
	- leave as default


	FORMAT TAB
	------------
	Default Event List Format (Remove header and footer format)
	------
	<div class="relatedthumb box-post col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail"> 

			<header class="box-entry-header hidden-xs">
				#_CATEGORIES 
			</header><!-- .entry-header -->

			<div class="box-entry-title">
				<p>#_EVENTLINK</p>
				<p>#_EVENTDATES<br/>
				#_EVENTTIMES<br/>
				{has_location}<br/><i>#_LOCATIONNAME, #_LOCATIONTOWN #_LOCATIONSTATE</i>{/has_location}</p>
			</div>

			<footer class="box-entry-meta hidden-xs">		
				<a href="mailto:#_CONTACTEMAIL">#_CONTACTNAME</a>
				<a href="#_CONTACTURL" target="_blank" class="box-entry-meta-date pull-right">#_CONTACTURL</a>
			</footer><!-- .box-entry-meta -->

		</div>
	</div> 


	Default Single Event Format
	------
	#_EVENTNOTES
	<div style="float:right; margin:0px 0px 15px 15px;">#_LOCATIONMAP</div>

	<p>
		<strong>Date/Time</strong><br/>
		Date(s) - #_EVENTDATES<br /><i>#_EVENTTIMES</i>
	</p>

	{has_location}
	<p>
		<strong>Location</strong><br/>
		#_LOCATIONLINK
	</p>
	{/has_location}

	<p>
		<strong>Categories</strong>
		#_CATEGORIES
	</p>

*/ ?>