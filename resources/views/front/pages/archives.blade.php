
@extends('layouts.front')

@section('title','archives')


@section('content')
    <!-- Content
    ================================================== -->
    <div class="s-content">

        <div class="row">

            <div id="main" class="s-content__main large-8 column">

                <section class="page-content">

                    <h2 class="page-content__title h1">Archives.</h2>
                    
                    <p class="lead">
                    Lorem ipsum Nisi enim est proident est magna occaecat dolore 
                    proident eu ex sunt consectetur consectetur dolore enim nisi exercitation 
                    adipisicing magna culpa commodo deserunt ut do Ut occaecat. Lorem ipsum Veniam 
                    consequat quis.
                    </p>	
                    
                    <h4>Last 10 Posts.</h4>
                    <ul>
                        <li><a href="#0">Dolor irure velit commodo cillum sit nulla</a></li>
                        <li><a href="#0">laborum mollit quis nostrud sed</a></li>
                        <li><a href="#0">consequat occaecat fugiat in adipisicing</a></li>
                        <li><a href="#0">qui labore cillum sit in tempor veniam consequat</a></li>
                        <li><a href="#0">quis nostrud sed sed</a></li>
                        <li><a href="#0">quis proident ullamco ut dolore</a></li>
                        <li><a href="#0">Dolor irure velit commodo cillum sit nulla</a></li>
                        <li><a href="#0">veniam dolor dolor irure velit commodo cillum</a></li>
                        <li><a href="#0">Dolor irure velit commodo cillum sit nulla</a></li>
                        <li><a href="#0">voluptate enim veniam consequat occaecat</a></li>
                    </ul>

                    <h4>Archives By Month.</h4>
                    <ul>
                        <li><a href="#0">July 2019</a></li>
                        <li><a href="#0">August 2019</a></li>
                        <li><a href="#0">September 2019</a></li>
                        <li><a href="#0">October 2019</a></li>
                        <li><a href="#0">November 2019</a></li>
                        <li><a href="#0">December 2019</a></li>
                    </ul>

                    <h4>Archives By Category.</h4>
                    <ul>
                        <li><a href="#0">Wordpress</a></li>
                        <li><a href="#0">Ghost</a></li>
                        <li><a href="#0">Joomla</a></li>
                        <li><a href="#0">Drupal</a></li>
                        <li><a href="#0">Magento</a></li>
                        <li><a href="#0">Uncategorized</a></li>
                    </ul>

                    <h4>Site Map.</h4>

                    <ul>
                        <li><a href="#0">Archives</a></li>
                        <li><a href="#0">Home</a></li>
                        <li><a href="#0">About Us</a></li>
                        <li><a href="#0">Blog</a></li>
                        <li><a href="#0">Demo</a></li>
                        <li><a href="#0">Other Stuff</a></li>
                    </ul>

                </section> <!-- end page -->

           </div> <!-- end main -->


           <div id="sidebar" class="s-content__sidebar large-4 column">

               <div class="widget widget--search">
                  <h3 class="h6">Search</h3> 
                  <form action="#0">
                     <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                     <input type="submit" value="" class="submit-search">
                  </form>
               </div>

               <div class="widget widget--categories">
                   <h3 class="h6">Categories.</h3> 
                   <ul>
                        <li><a href="#0" title="">Wordpress</a> (2)</li>
                        <li><a href="#0" title="">Ghost</a> (14)</li>
                        <li><a href="#0" title="">Joomla</a> (5)</li>
                        <li><a href="#0" title="">Drupal</a> (3)</li>
                        <li><a href="#0" title="">Magento</a> (2)</li>
                        <li><a href="#0" title="">Uncategorized</a> (9)</li>
                    </ul>
                </div>

                <div class="widget widget_text group">
                    <h3 class="h6">Widget Text.</h3>

                    <p>
                    Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor 
                    aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur 
                    sint cillum sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.
                    </p>
                </div>

                <div class="widget widget_tags">
                    <h3 class="h6">Post Tags.</h3>

                    <div class="tagcloud group">
                        <a href="#0">Corporate</a>
                        <a href="#0">Onepage</a>
                        <a href="#0">Agency</a>
                        <a href="#0">Multipurpose</a>
                        <a href="#0">Blog</a>
                        <a href="#0">Landing Page</a>
                        <a href="#0">Resume</a>0
                    </div>
                </div>

                <div class="widget widget_popular">
                    <h3 class="h6">Popular Post.</h3>

                    <ul class="link-list">
                        <li><a href="#0">Sint cillum consectetur voluptate.</a></li>
                        <li><a href="#0">Lorem ipsum Ullamco commodo.</a></li>
                        <li><a href="#0">Fugiat minim eiusmod do.</a></li>
                    </ul>
                </div>
               
           </div> <!-- end sidebar -->

       </div> <!-- end row -->

   </div> <!-- end content-wrap -->
   @endsection




 