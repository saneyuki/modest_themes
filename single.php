<?php
/**
 * @package WordPress
 * @subpackage modest3
 */
get_header();
?>

<article id="content"
         role="main">

	<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
	?>

	<?php
		$the_id = get_the_ID();
	?>
	<header class="entry-header">
		<div class="breadcrumbs">
			<?php breadcrumbs($the_id); ?>
		</div>

		<?php
			post_icon($the_id,array(120,120));
		?>

		<h1><?php the_title(); ?></h1>

		<dl class="postmeta">
			<dt>投稿日時</dt>
			<dd>
				<?php
					$datetime = get_the_time('Y-m-d H:i:s');
					$date = get_the_time('Y年n月d日 G:i:s');
					echo('<time datetime="' . $datetime . '">'. $date . '</time>');
				?>
			</dd>
			<dt>プロジェクト</dt>
			<dd>
				<?php
					echo get_the_specified_project_page();
				?>
			</dd>
		</dl>

		<div id="edit_post button-blue">
			<?php
				edit_post_link("編集する","","");
			?>
		</div>
	</header>

	<div class="entry-body">
		<?php
			the_content('続きを読む');
		?>
	</div>

	<footer class="entry-footer">
		<?php
			//wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'kubrick') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));

			//$post_type = get_post_type($the_id);
			//the_tags_post_type( '<p>' . __('Tags:', 'kubrick') . ' ', ', ', '</p>', $post_type);
		?>
	</footer>

	<?php comments_template(); ?>

	<?php
			endwhile;
		else:
	?>
		<p><?php _e('Sorry, no posts matched your criteria.', 'kubrick'); ?></p>
	<?php
		endif;
	?>

</article>

<?php get_footer(); ?>
