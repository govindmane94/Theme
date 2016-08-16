<?php get_header(); ?>
<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Excellent Solution</span> For Your Learning</h2>
          <p class="infopost">Posted <span class="date">on 18 aug 2016</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">Admin</a><a href="#" class="com">Comments <span>(11)</span></a></p>
          <div class="clr"></div>
          <div class="img"><img src="http://localhost/website.com/wp-content/themes/wordpress/images/img1.jpg" width="179" height="207" alt="" class="fl" /></div>
          <div class="post_content">
            <p>The academic program covers the design and development of educational materials as well as the necessary  strategies  for  searching,  evaluating  and managing  of  such  materials.  The  subjects  now encompass  the  basic  elements  and  tools  used  for  development,  design  and  management  of cooperative technological  multimedia  environments. 
The  program assigns an  online tutor to  each student  from  the  very  beginning  of  the  course.  Students  have  the  option  of  choosing  a  range  of signatures which either focus on a professional profile or on a researcher profile.</p>
            <p><strong>Among the main difficulties faced  by the program  organizers, professors and students, we would 
highlight the creation of a really interactive and engaging online environment.</strong> Future improvements in the program, on their way right now, aim at overcoming the traditional online materials barrier. We have succeeded in creating a distance learning environment.</p>
            <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
          </div>
          <div class="clr"></div>
        </div>
        <div class="article">
          <h2><span>Class format to e-learning </span> Works For You</h2>
          <p class="infopost">Posted <span class="date">on 16 aug 2016</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">Admin</a><a href="#" class="com">Comments <span>(7)</span></a></p>
          <div class="clr"></div>
          <div class="img"><img src="http://localhost/website.com/wp-content/themes/wordpress/images/img2.jpg" width="179" height="207" alt="" class="fl" /></div>
          <div class="post_content">
            <p>One  of  the  characteristics  of  the  Masters  in  Educational  Technology:  E-LEARNING This factor, which could be considered one of its strong points, presented some difficulties regarding teaching activities for the course organizers when it was first launched. Such difficulties were both practical and theoretical in nature. </p>
            <p><strong>Theoretical content was taught in classroom. These sessions were filmed so that they could be latter 
distributed in digital format .</strong> to students who had not had the chance to attend classes. Hands on contend was organized in workshops, in which students could develop tasks which allowed them to know different software and their application to different contexts and projects Throughout all these  years, the  program  has evolved towards a total virtualization process of its activities, towards a full e-learning program.</p>
            <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
          </div>
          <div class="clr"></div>
        </div>
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
      </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="http://localhost/website.com/wp-content/themes/wordpress/images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>e-Learning Courses</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="">C</a><br />
               </li>
            <li><a href="">C++</a><br />
              </li>
            <li><a href="">Java</a><br />
              </li>
            <li><a href="">DBMS</a><br />
              </li>
            <li><a href="">PHP</a><br />
              </li>
            
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!--<div class="post-header">
					<div class="date"><?php the_time( 'M j y' ); ?></div>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="author"><?php the_author(); ?></div>
				</div>--><!--.post-header-->
			<!--	<div class="entry clear">
					<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
					<?php wp_link_pages(); ?>
				</div> --><!--. entry-->
			<!--	<footer class="post-footer">
					<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
				</footer><!--.post-footer-->
			</div>
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			<nav class="navigation index">
				<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
				<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
			</nav><!--.navigation-->
		<?php else : ?>
	<?php endif; ?>
</div>



<?php get_sidebar(); ?>
<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>
