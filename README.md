# Divi-Acf-CPT
Snippet to integrate a CustomPost Type into Divi with ACF

What is this? 

A snippet that goes into your custom post type single.php template that will pull in a Divi builder layout and do variable substitution for any Advanced Custom Fields

Why is this needed?

Divi (Builder) is a useful plugin to allow those with limited HTML/PHP/WordPress knowledge the ability to generate fairly complex page layouts in a visual point and click way

What Divi does badly is lack of support for custom post types and Advanced Custom Fields, meaning it's pretty much useless for any serious developer to use in bespoke projects

How does it work?

1. Enable Divi on your CPT
2. Create a draft post in your CPT with the Divi Builder, make a note of the post_id
3. Put into content areas in the Divi Builder 'tags' for your ACF field substitution, e.g. {job_position}
4. Copy and paste this snippet into your CPT single.php template
5. In the snippet, get your relevant ACF fields and update $vars_subs with your custom tags from above. Also change the page_id in WP_Query to the draft post from above
