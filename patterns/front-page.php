<?php
/**
 * Title: front-page
 * Slug: fullstack/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"color":{"background":"#13203c"}},"className":"presentation","layout":{"type":"constrained"}} -->
<div class="wp-block-group presentation has-background" style="background-color:#13203c;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":1,"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontStyle":"italic","fontWeight":"800","fontSize":"5rem"}},"textColor":"luminous-vivid-amber","fontFamily":"michroma"} -->
<h1 class="wp-block-heading has-text-align-left has-luminous-vivid-amber-color has-text-color has-michroma-font-family" style="margin-bottom:0px;font-size:5rem;font-style:italic;font-weight:800">FULLSTACK</h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":1,"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontStyle":"italic","fontWeight":"800","fontSize":"3.5rem"}},"textColor":"base","fontFamily":"michroma"} -->
<h1 class="wp-block-heading has-text-align-left has-base-color has-text-color has-michroma-font-family" style="margin-bottom:0px;font-size:3.5rem;font-style:italic;font-weight:800">WORDPRESS</h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":1,"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontStyle":"italic","fontWeight":"800","fontSize":"3rem"}},"textColor":"luminous-vivid-amber","fontFamily":"michroma"} -->
<h1 class="wp-block-heading has-text-align-left has-luminous-vivid-amber-color has-text-color has-michroma-font-family" style="margin-bottom:0px;font-size:3rem;font-style:italic;font-weight:800">DEVELOPER</h1>
<!-- /wp:heading -->

<!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"luminous-vivid-amber","fontSize":"x-large","fontFamily":"sofia-sans-extra-condensed"} -->
<h5 class="wp-block-heading has-luminous-vivid-amber-color has-text-color has-sofia-sans-extra-condensed-font-family has-x-large-font-size" style="font-style:normal;font-weight:600"><em>Benedict Example</em></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}},"textColor":"luminous-vivid-amber"} -->
<p class="has-luminous-vivid-amber-color has-text-color" style="font-size:1rem"><em>Wordpress | Node | React | PHP | Laravel | MySql</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"fullstack/about-card"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}},"color":{"background":"#13203c"}},"textColor":"base","className":"projects-element","layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group projects-element has-base-color has-text-color has-background" style="background-color:#13203c;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:heading {"textColor":"luminous-vivid-amber","fontFamily":"michroma"} -->
<h2 class="wp-block-heading has-luminous-vivid-amber-color has-text-color has-michroma-font-family">Projects         </h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A selection of recent works that showcase my expertise in fullstack software development and Wordpress. Explore to see my experience in action.</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:columns {"verticalAlignment":"center","className":"are-horizontally-aligned-center"} -->
<div class="wp-block-columns are-vertically-aligned-center are-horizontally-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"12px"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlights"}}},"typography":{"fontSize":"1.5rem"}},"textColor":"highlights"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|highlights"}}}},"textColor":"highlights","fontSize":"small"} -->
<p class="has-text-align-right has-highlights-color has-text-color has-link-color has-small-font-size">
            <a href="http://localhost:10068/projects/" data-type="page" data-id="55">Browse projects</a>
        </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"color":{"background":"#13203c"}},"textColor":"base","layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group has-base-color has-text-color has-background" style="background-color:#13203c;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"right","textColor":"luminous-vivid-amber","fontFamily":"michroma"} -->
<h2 class="wp-block-heading has-text-align-right has-luminous-vivid-amber-color has-text-color has-michroma-font-family">Services</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"right","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<p class="has-text-align-right" style="padding-bottom:var(--wp--preset--spacing--40)">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"services"} -->
<div class="wp-block-columns services"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"}},"color":{"background":"#ffffff14"},"border":{"radius":"12px"}},"className":"service"} -->
<div class="wp-block-column service has-background" style="border-radius:12px;background-color:#ffffff14;padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:image {"align":"center","id":256,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/display-solid.png" alt="" class="wp-image-256" style="object-fit:contain;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"luminous-vivid-amber"} -->
<h5 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color">Website<br>Development</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Creating websites from scratch or customizing existing themes according to the client's needs. This involves designing layouts, selecting plugins, and making visual adjustments.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"}},"color":{"background":"#ffffff14"},"border":{"radius":"12px"}},"className":"service"} -->
<div class="wp-block-column service has-background" style="border-radius:12px;background-color:#ffffff14;padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:image {"align":"center","id":257,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/file-pen-solid.png" alt="" class="wp-image-257" style="object-fit:contain;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"luminous-vivid-amber"} -->
<h5 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color">Content<br>Management</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Adding, editing, and formatting content, such as text, images, videos, and other multimedia elements, to ensure the website is current and relevant.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"}},"color":{"background":"#ffffff14"},"border":{"radius":"12px"}},"className":"service"} -->
<div class="wp-block-column service has-background" style="border-radius:12px;background-color:#ffffff14;padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:image {"align":"center","id":258,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/gears-solid.png" alt="" class="wp-image-258" style="object-fit:contain;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"luminous-vivid-amber"} -->
<h5 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color">Maintenence and configuration</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Setting up and maintaining the website's functionality, including installing and updating plugins, ensuring that the site functions properly and is secure.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"services"} -->
<div class="wp-block-columns services"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"}},"color":{"background":"#ffffff14"},"border":{"radius":"12px"}},"className":"service"} -->
<div class="wp-block-column service has-background" style="border-radius:12px;background-color:#ffffff14;padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:image {"align":"center","id":259,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/gauge-high-solid.png" alt="" class="wp-image-259" style="object-fit:contain;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"luminous-vivid-amber"} -->
<h5 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color">Optimization and Performance</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Enhancing the speed and performance of the site by optimizing images, minifying scripts, and implementing other techniques to ensure a fast user experience.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"}},"color":{"background":"#ffffff14"},"border":{"radius":"12px"}},"className":"service"} -->
<div class="wp-block-column service has-background" style="border-radius:12px;background-color:#ffffff14;padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:image {"align":"center","id":260,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shop-lock-solid.png" alt="" class="wp-image-260" style="object-fit:contain;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"luminous-vivid-amber"} -->
<h5 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color">Security<br>measures</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Implementing security measures to protect the website against online threats, such as hacker attacks and malware.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"}},"color":{"background":"#ffffff14"},"border":{"radius":"12px"}},"className":"service"} -->
<div class="wp-block-column service has-background" style="border-radius:12px;background-color:#ffffff14;padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:image {"align":"center","id":261,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/globe-solid.png" alt="" class="wp-image-261" style="object-fit:contain;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"luminous-vivid-amber"} -->
<h5 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color">search engine optimization</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Optimizing the site to improve its ranking in search engines, ensuring that the content is SEO-friendly.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"services"} -->
<div class="wp-block-columns services"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"}},"color":{"background":"#ffffff14"},"border":{"radius":"12px"}},"className":"service"} -->
<div class="wp-block-column service has-background" style="border-radius:12px;background-color:#ffffff14;padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:image {"align":"center","id":263,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/clipboard-solid.png" alt="" class="wp-image-263" style="object-fit:contain;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"luminous-vivid-amber"} -->
<h5 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color">Budget and Project Management</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Managing your own business, which includes setting prices, establishing deadlines, communicating with clients, and handling finances.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"}},"color":{"background":"#ffffff14"},"border":{"radius":"12px"}},"className":"service"} -->
<div class="wp-block-column service has-background" style="border-radius:12px;background-color:#ffffff14;padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:image {"align":"center","id":262,"width":"50px","height":"50px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/user-graduate-solid.png" alt="" class="wp-image-262" style="object-fit:contain;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"textColor":"luminous-vivid-amber"} -->
<h5 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color">Support<br>and Training</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Providing customer support, including resolving technical issues and offering training on how to use and manage the website.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"color":{"background":"#13203c"}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group has-background" style="background-color:#13203c;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","textColor":"luminous-vivid-amber","fontFamily":"michroma"} -->
<h2 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color has-michroma-font-family">
        Skills
    </h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"skills"} -->
<div class="wp-block-columns skills"><!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"0"}},"color":{"background":"#ffffff08"},"border":{"radius":"12px"}},"className":"skill"} -->
<div class="wp-block-column skill has-background" style="border-radius:12px;background-color:#ffffff08;padding-right:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontSize":"1em"}},"backgroundColor":"luminous-vivid-amber","textColor":"contrast","className":"skill-title"} -->
<h5 class="wp-block-heading has-text-align-center skill-title has-contrast-color has-luminous-vivid-amber-background-color has-text-color has-background" style="font-size:1em">
                Wordpress
            </h5>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"textColor":"base","className":"skill-wp","fontSize":"small"} -->
<ul style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)" class="skill-wp has-base-color has-text-color has-small-font-size"><!-- wp:list-item -->
<li>Theme development</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Child theme creation</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Personalization</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Block development</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Plugin development</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Custom posts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Custom roles</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>E-commerce</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ACF</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"color":{"background":"#ffffff08"},"border":{"radius":"12px"}},"className":"skill"} -->
<div class="wp-block-column skill has-background" style="border-radius:12px;background-color:#ffffff08"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontSize":"1em"}},"backgroundColor":"luminous-vivid-amber","textColor":"contrast","className":"skill-title"} -->
<h5 class="wp-block-heading has-text-align-center skill-title has-contrast-color has-luminous-vivid-amber-background-color has-text-color has-background" style="font-size:1em">
                backend
            </h5>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"textColor":"base","className":"skill-backend","fontSize":"small"} -->
<ul style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)" class="skill-backend has-base-color has-text-color has-small-font-size"><!-- wp:list-item -->
<li>PHP</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>NodeJs</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ORM</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Express</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Laravel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>MySql</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>API REST</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>AJAX</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"color":{"background":"#ffffff08"},"border":{"radius":"12px"}},"className":"skill"} -->
<div class="wp-block-column skill has-background" style="border-radius:12px;background-color:#ffffff08"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontSize":"1em"}},"backgroundColor":"luminous-vivid-amber","textColor":"contrast","className":"skill-title"} -->
<h5 class="wp-block-heading has-text-align-center skill-title has-contrast-color has-luminous-vivid-amber-background-color has-text-color has-background" style="font-size:1em">
                frontend
            </h5>
<!-- /wp:heading -->

<!-- wp:list {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"textColor":"base","className":"skill-frontend","fontSize":"small"} -->
<ul style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)" class="skill-frontend has-base-color has-text-color has-small-font-size"><!-- wp:list-item -->
<li>HTML, CSS, JS</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>jQuery</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>React</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bootstrap</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>SASS</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Figma</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Responsive Design</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"color":{"background":"#13203c"}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group has-background" style="background-color:#13203c;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textColor":"luminous-vivid-amber","fontFamily":"michroma"} -->
<h2 class="wp-block-heading has-luminous-vivid-amber-color has-text-color has-michroma-font-family">Blog         </h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":53,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"border":{"radius":"8px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"1.3rem"},"elements":{"link":{"color":{"text":"var:preset|color|highlights"}}}},"className":"query-title"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":25,"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlights"}}}},"textColor":"base","fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"color":{"background":"#13203c"}},"textColor":"luminous-vivid-amber","className":"contact-element","layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group contact-element has-luminous-vivid-amber-color has-text-color has-background" style="background-color:#13203c;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","textColor":"luminous-vivid-amber","fontFamily":"michroma"} -->
<h2 class="wp-block-heading has-text-align-center has-luminous-vivid-amber-color has-text-color has-michroma-font-family">
        Contact
    </h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"className":"contact-form"} -->
<div class="wp-block-column contact-form"><!-- wp:html -->
<form action="#">
    <p>
        <label> <span class="contact-text">Name: *</span><br>
            <span data-name="your-name">
                <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text" name="your-name">
            </span>
        </label>
    </p>
    <p>
        <label> <span class="contact-text">E-mail: *</span><br>
            <span data-name="your-email">
                <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" value="" type="email" name="your-email">
            </span>
        </label>
    </p>
    <p>
        <label> <span class="contact-text">Subject: *</span><br>
            <span data-name="your-subject">
                <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" value="" type="text" name="your-subject">
            </span>
        </label>
    </p>
    <p>
        <label> <span class="contact-text">Message: *</span><br>
            <span data-name="your-message">
                <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" name="your-message"></textarea>
            </span>
        </label>
    </p>
    <p>
        <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Send">
    </p>
</form>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"textColor":"base"} -->
<p class="has-base-color has-text-color">The form beside is styled based on WP Contact Form 7 (WPCF7), with comprehensive documentation included for easy reproduction. Get the same sleek design and functionality hassle-free!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->