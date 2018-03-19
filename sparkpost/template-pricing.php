<?php
/**
 Template Name: Pricing
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkpost
 */

get_header(); ?>
<div class="container center">
    <table cellspacing="0">
    <?php if(have_rows('features')):?>
    <?php while(have_rows('features')): the_row();?>
    <?php $al_bg = get_sub_field('background_colour');?>
         <?php if($al_bg):?>
         	<tr class="alternate-bg">
         <?php else:?>
         	<tr>
         <?php endif;?>
            <td><?php the_sub_field('featured_text');?></td>
            <?php $true = get_sub_field('checked');?>
            <?php if($true):?>
            <td>yes</td>
            <?php else:?>
            <td>no</td>
            <?php endif;?>
        </tr>
      <?php endwhile;?>
      <?php endif;?>  
    </table>
</div>

<div class="container center add-on-table">
 <table cellspacing="0">
        <tr>
            <th>Features</th>
            <th>Priority</th>
            <th>Premium</th>
            <th>Enterprise</th>
        </tr>
	<?php if(have_rows('add_on_features')):?>
    <?php while(have_rows('add_on_features')): the_row();?>
    <?php $priority = get_sub_field('priority');?>
    <?php $premium = get_sub_field('premium');?>
    <?php $enterprise = get_sub_field('enterprise');?>
    <?php $a_bg = get_sub_field('alternate_backgraound');?>
         <?php if($a_bg):?>
         	<tr class="alternate-bg">
         <?php else:?>
         	<tr>
         <?php endif;?>
         
            <td><?php the_sub_field('title_add_on');?></td>
            <?php if ($priority):?>
            <td>yes</td>
            <?php else:?>
            <td>no</td>
            <?php endif;?>
            <?php if ($premium):?>
            <td>yes</td>
            <?php else:?>
            <td>no</td>
            <?php endif;?>
              <?php if ($enterprise):?>
            <td>yes</td>
            <?php else:?>
            <td>no</td>
            <?php endif;?>
        </tr>
	<?php endwhile;?>
    <?php endif;?>
</div>

<?php
get_footer();
