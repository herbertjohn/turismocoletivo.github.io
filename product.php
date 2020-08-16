<?php
// Prevent direct access to file
defined('shoppingcart') or exit;
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([ $_GET['id'] ]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        $error = 'Product does not exist!';
    }
    // Select the product images (if any) from the products_images table
    $stmt = $pdo->prepare('SELECT * FROM products_images WHERE product_id = ?');
    $stmt->execute([ $_GET['id'] ]);
    // Fetch the product images from the database and return the result as an Array
    $product_imgs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Select the product options (if any) from the products_options table
    $stmt = $pdo->prepare('SELECT title, GROUP_CONCAT(name) AS options FROM products_options WHERE product_id = ? GROUP BY title');
    $stmt->execute([ $_GET['id'] ]);
    // Fetch the product options from the database and return the result as an Array
    $product_options = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Simple error to display if the id wasn't specified
    $error = 'Product does not exist!';
}
?>

<?=template_header(isset($product) && $product ? $product['name'] : 'Error')?>
<br><br><br>
<?php if ($error): ?>

<p class="content-wrapper error"><?=$error?></p>

<?php else: ?>

<div class="product content-wrapper">

    <div class="product-imgs">

        <img class="product-img-large" src="imgs/<?=$product['img']?>" width="500" alt="<?=$product['name']?>">

        <div class="product-small-imgs">
            <?php foreach ($product_imgs as $product_img): ?>
            <img class="product-img-small<?=$product_img['img']==$product['img']?' selected':''?>" src="imgs/<?=$product_img['img']?>" width="150" height="150" alt="<?=$product['name']?>">
            <?php endforeach; ?>
        </div>

    </div>

    <div class="product-wrapper">

        <h1 class="name"><?=$product['name']?></h1>

        <span class="price">
            <?=currency_code?><?=number_format($product['price'],2)?>
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp"><?=currency_code?><?=number_format($product['rrp'],2)?></span>
            <?php endif; ?>
        </span>

        <form action="index.php?page=cart" method="post">
            <?php foreach ($product_options as $option): ?>
            <select name="option-<?=$option['title']?>" required>
                <option value="" selected disabled style="display:none"><?=$option['title']?></option>
                <?php foreach (explode(',', $option['options']) as $name): ?>
                <option value="<?=$name?>"><?=$name?></option>
                <?php endforeach; ?>
            </select>
            <?php endforeach; ?>
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantidade" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" value="Adicionar no Carrinho">
        </form>

        <div class="description">
            <?=$product['desc']?>
        </div>

    </div>

</div>

<?php endif; ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?=template_footer()?>
