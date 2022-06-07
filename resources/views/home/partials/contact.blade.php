<!-- BEGIN CONTACTS SECTION -->
<section id="rsvp" class="section-bg-color extra-padding-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">

                <div class="form-wrapper flowers neela-style">
                    <h1 class="section-title">Confirma tu asistencia</h1>

                    <form id="form-rsvp" method="post" action="#" x-data="{ isAttending: null }">

                        <div class="form-field form-floating">
                            <input type="text" name="name" id="name" placeholder="Nombre*" class="form-control required">
                            <label for="name">Nombre*</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-field form-floating">
                            <input type="email" name="email" id="email" placeholder="E-mail*" class="form-control required">
                            <label for="email">E-mail*</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-field form-floating">
                            <input type="tel" name="phone" id="phone" placeholder="Celular* (10 dígitos)" class="form-control required">
                            <label for="phone">Celular*</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-field form-check-wrapper">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input required" type="radio" name="is_attending" id="is_attending_yes" value="1" x-on:click="isAttending = true">
                                <label for="is_attending_yes">Sí, asistiré.</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input required" type="radio" name="is_attending" id="is_attending_no" value="0" x-on:click="isAttending = false">
                                <label for="is_attending_no">Lo siento, no podré acompañarlos.</label>
                            </div>
                        </div>

                        <fieldset class="form-field form-check-wrapper" x-show="isAttending == true">
                            <label>¿A qué eventos asistirás?</label>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="icebreaker" value="1" id="icebreacker-check">
                                <label for="icebreacker-check">
                                    Ice breaker - Viernes 18
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="wedding" id="wedding-check" checked readonly disabled>
                                <label for="wedding-check">
                                    Boda - Sábado 19
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="after_wedding" value="1" id="after-wedding-check">
                                <label for="after-wedding-check">
                                    Tornaboda - Domingo 20
                                </label>
                            </div>
                        </fieldset>

                        <div class="form-field form-floating" x-show="isAttending == true">
                            <select class="form-select" aria-label="Número de invitados" name="guests_count" id="num_guests">
                                <option value="1">Solo yo</option>
                                <option value="2">LLevaré a una persona</option>
                            </select>

                            <label for="num_guests">Número de invitados</label>
                        </div>


                        <div class="form-field form-floating">
                            <textarea id="message" name="message" placeholder="Mensaje" class="form-control" rows="4"></textarea>
                            <label for="message">Mensaje</label>
                        </div>

                        <div class="form_status_message"></div>

                        <div class="center" x-show="isAttending !== null">
                            <button type="submit" class="btn btn-primary submit_form">Enviar</button>
                        </div>
                    </form>

                    <div id="attending-message" class="confirmation-message invisible">
                        <div>
                            <i class="fa-regular fa-face-smile"></i>
                        </div>
                        <div class="text-center">
                            Gracias por confirmar tu asistencia. Nuestra wedding planner se pondrá en contacto contigo.
                        </div>
                    </div>

                    <div id="not-attending-message" class="confirmation-message">
                        <div>
                            <i class="fa-regular fa-face-smile"></i>
                        </div>
                        <div class="text-center">
                            Gracias por confirmar tu asistencia. Nuestra wedding planner se pondrá en contacto contigo.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACTS SECTION -->
