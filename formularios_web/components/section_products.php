

<section class="productos border rounded-3">

    <div class="formularios">

        <div>
            <form>
                <label for="estado">
                    <select class="rounded-3" name="estado" id="estado">
                        <option value="" selected>Estado</option>
                        <option value="">Estado 1</option>
                        <option value="">Estado 2</option>
                    </select>
                </label>
            </form>
            <form>
                <label for="categoria">
                    <select class="rounded-3" name="categoria" id="categoria">
                        <option value="" selected>Categoría</option>
                        <option value="">Cat. 1</option>
                        <option value="">Cat. 2</option>
                    </select>
                </label>
            </form>
        </div>

        <div class="add-product">
            <button type="button" class="rounded-3 btn btn-primary">+ Añadir producto</button>
        </div>

    </div>

    <div class="productos-container">


        <?php
        if (count($_SESSION["productos"]) > 0):
        foreach ($_SESSION["productos"] as $producto):
        ?>
        <div class="item border rounded-3">
            <img src="https://store.codervent.com/aeropanel/demo/assets/images/products/01.png" alt="">
            <h3><?= $producto["name"]; ?></h3>
            <p class="small text-muted">
                Outerwear
            </p>
            <ul class="features">
                <li><span class="fw-bolder">SKU:</span> <?= $producto["SKU"]; ?></li>
                <li><span class="fw-bolder">Stock:</span> <?= $producto["stock"]; ?></li>
                <li><span class="fw-bolder">Price:</span> $<?= $producto["price"]; ?></li>
            </ul>
            <?php if  ($producto["is_published"] == true): ?>
                <span class="budge rounded-3 bg-success text-white small fw-bolder">Published</span>
            <?php else: ?>
                <span class="budge rounded-3 bg-warning text-white small fw-bolder">Draft</span>
            <?php endif; ?>
        </div>

        <?php
        endforeach;
        else:
        ?>
        No tienes productos
        <?php
        endif;
        ?>


    </div>

</section>