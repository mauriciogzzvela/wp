<?php
/**
 * Created by PhpStorm.
 * User: mauriciovela
 * Date: 4/17/21
 * Time: 3:18 PM
 */


$className = 'toaster';
if (!empty($block['classNanme'])){
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])){
    $className .= ' align' . $block['align'];

}
?>

<div class="<?php echo esc_attr($className); ?>">
    <div class="grid-x grid-margin-x">
        <div class="cell">
            <?php if (have_rows('toasters')) : ?>
            <table>
                <thead>
                <th></th>
                <th>Price</th>
                <th>Our Rating</th>
                <th>Cust. Rating</th>
                <th>Dimensions</th>
                <th>Weight</th>
                <th>Watss</th>
                </thead>
                <tbody>
                <?php while (have_rows('toasters')) :  the_row(); ?>
                <tr>
                    <td class="text-center">
                        <img src="<?= get_sub_field('image')['sizes']['thumbnail']; ?>"><br />
                        <strong><?php the_sub_field('name'); ?></strong>

                    </td>
                    <td><?php the_sub_field('price'); ?></td>
                    <td><?php the_sub_field('our_rating'); ?></td>
                    <td><?php the_sub_field('average_customer_rating'); ?></td>
                    <td><?php the_sub_field('dimensions'); ?></td>
                    <td><?php the_sub_field('weight'); ?></td>
                    <td><?php the_sub_field('watts'); ?></td>
                </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
</div>
