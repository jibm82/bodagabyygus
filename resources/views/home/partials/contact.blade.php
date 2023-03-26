<!-- BEGIN CONTACTS SECTION -->
<section id="rsvp" class="section-bg-color extra-padding-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">

                <div class="form-wrapper flowers neela-style">
                    <h1 class="section-title">Confirma tu asistencia</h1>

                    <form id="phone-validation-form" method="post" action="/validate">
                        <div class="form-field form-floating flex-1">
                            <input type="tel" id="phone_validation" placeholder="Celular* (10 dígitos)"
                                class="form-control required">
                            <label for="phone_validation">Celular*</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="center" id="validate-phone-container">
                            <button type="submit" class="btn btn-primary" id="validate-phone">Validar</button>
                        </div>
                    </form>

                    <form id="form-rsvp" method="post" action="#" x-data="{ isAttending: null }" class="hidden">
                        <input type="hidden" name="phone" id="phone" value="">

                        <div class="form-field form-floating">
                            <input type="text" name="name" id="name" placeholder="Nombre*"
                                class="form-control" readonly>
                            <label for="name">Nombre*</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-field form-floating">
                            <input type="text" name="people" id="people" placeholder=""
                                class="form-control required" readonly>

                            <label for="people">Número de invitados</label>
                        </div>

                        <div class="form-field form-check-wrapper">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input required" type="radio" name="is_attending"
                                    id="is_attending_yes" value="1" x-on:click="isAttending = true">
                                <label for="is_attending_yes">Sí, asistiré.</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input required" type="radio" name="is_attending"
                                    id="is_attending_no" value="0" x-on:click="isAttending = false">
                                <label for="is_attending_no">Lo siento, no podré acompañarlos.</label>
                            </div>
                        </div>

                        <fieldset class="form-field form-check-wrapper" x-show="isAttending == true">
                            <label>¿A qué eventos asistirás?</label>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="icebreaker" value="1"
                                    id="icebreacker-check">
                                <label for="icebreacker-check">
                                    Ice breaker - Viernes 15
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="wedding" id="wedding-check"
                                    checked readonly disabled>
                                <label for="wedding-check">
                                    Boda - Sábado 16
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="after_wedding" value="1"
                                    id="after-wedding-check">
                                <label for="after-wedding-check">
                                    Tornaboda - Domingo 17
                                </label>
                            </div>
                        </fieldset>

                        <div class="form-field form-floating">
                            <textarea id="message" name="message" placeholder="Mensaje" class="form-control" rows="4"></textarea>
                            <label for="message">Mensaje</label>
                        </div>

                        <div class="form_status_message"></div>

                        <div class="center" x-show="isAttending !== null">
                            <button type="submit" class="btn btn-primary submit_form btn-fixed">Enviar</button>
                        </div>

                    </form>

                    <div id="attending-message" class="confirmation-message d-none">
                        <div>
                            <i class="fa-regular fa-face-smile"></i>
                        </div>
                        <div class="text-center fs-5">
                            Gracias por confirmar tu asistencia. Más adelante nuestra wedding planner se pondrá en
                            contacto contigo
                        </div>
                    </div>

                    <div id="not-attending-message" class="confirmation-message d-none">
                        <div>
                            <i class="fa-regular fa-face-sad-tear"></i>
                        </div>
                        <div class="text-center fs-5">
                            Sentimos mucho que no puedas acompañarnos. Si cambias de opinión avísanos lo antes posible.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACTS SECTION -->
