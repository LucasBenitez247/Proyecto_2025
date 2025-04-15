<link rel="stylesheet" href="<?= base_url('assets/css/estilo_contacto.css') ?>">

<div class="container py-5">
  <div class="row">
    <div class="col-md-6">
      <h1 class="titulo">Contacto</h1>
      <p>Horarios en la tienda: Lunes a viernes de 9 a 20 hs de corrido.</p>
      <p><strong>Whatsapp:</strong><br>379-4123456</p>
      <p><strong>Email:</strong><br>tiendaf1natic@gmail.com</p>
      <p><strong>Dirección:</strong></p>
      <ul>
        <li>En Corrientes Capital: 9 de julio 1449</li>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.091455101435!2d-58.83485642553354!3d-27.466412016564362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca6d0e7a999%3A0x3efbeb84abc975f9!2s9%20de%20Julio%201449%2C%20W3400AZB%20Corrientes!5e0!3m2!1ses!2sar!4v1744726592680!5m2!1ses!2sar" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </ul>
    </div>

    


    <div class="col-md-6">
      <div class="contact-form">
        <form>
          <label form="nombre">Nombre Completo:</label>
          <input type="text" class="form-control custom-input" placeholder="Ej. María" name="nombre">
          <label form="email">Email:</label>
          <input type="email" class="form-control custom-input" placeholder="Ej: tuemail@gmail.com" name="email">
          <label form="telefono">Telefono:</label>
          <input type="number" class="form-control custom-input" placeholder="Ej: 379-11111" name="telefono">
          <label form="mensaje">Mensaje:</label>
          <textarea class="form-control custom-input" rows="3" placeholder="Ej: Quiero más info sobre..." name="mensaje"></textarea>
          <button type="submit" class="btn btn-danger mt-2">Enviar</button>
        </form>
      </div>
    </div>

  </div>
</div>
