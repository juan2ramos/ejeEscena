<section class="<?php echo($url) ?>">
    <h2>Contacto</h2>

    <form action="" id="form-contact" method="post">
        <div class="input-contend">

            <label for="name">Dirigido : </label>
            <select name="dirigido" id="dirigido">
                <option value="info@circulart.org">Coordinación - Milena García</option>

            </select>
        </div>
        <div class="input-contend">
            <label for="name-user">nombre : </label>
            <input type="text" id="name-user" name="name-user"/>
        </div>
        <div class="input-contend">
            <label for="company">Empresa : </label>
            <input type="text" id="company" name="company"/>
        </div>
        <div class="input-contend">
            <label for="email">E-mail : </label>
            <input type="email" id="email" name="email"/>
        </div>
        <div class="input-contend">
            <label for="phone">Telefono : </label>
            <input type="tel" id="phone" name="phone"/>
        </div>
        <div class="input-contend">
            <label for="comment">Comentario : </label>
            <textarea name="comment" id="comment"></textarea>
        </div>

        <input type="submit" class="submit"/>
    </form>

</section>
