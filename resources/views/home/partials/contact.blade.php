<!-- BEGIN CONTACTS SECTION -->
<section id="rsvp" class="section-bg-color extra-padding-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">

                <div class="form-wrapper flowers neela-style">
                    <h1 class="section-title">Confirma tu asistencia</h1>

                    <form id="form-rsvp" method="post" action="#">

                        <div class="form-floating">
                            <input type="text" name="Name" id="name" placeholder="Nombre*" class="form-control required fromName">
                            <label for="name">Nombre*</label>
                        </div>

                        <div class="form-floating">
                            <input type="email" name="E-mail" id="email" placeholder="E-mail*" class="form-control required fromEmail">
                            <label for="email">E-mail*</label>
                        </div>

                        <div class="form-check-wrapper">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input required" type="radio" name="Attend wedding" id="attend_wedding_yes">
                                <label for="attend_wedding_yes">Sí, asistiré.</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input required" type="radio" name="Attend wedding" id="attend_wedding_no">
                                <label for="attend_wedding_no">Lo siento, no podré acompañarlos.</label>
                            </div>
                        </div>

                        <div class="form-floating">
                            <select class="form-select" aria-label="Número de invitados" name="Número de invitados" id="num_guests">
                                <option value="1">Sólo yo</option>
                                <option value="2">LLevaré a una persona</option>
                            </select>

                            <label for="num_guests">Número de invitados</label>
                        </div>



                        <div class="form-floating">
                            <textarea id="message" name="Message" placeholder="Mensaje" class="form-control" rows="4"></textarea>
                            <label for="message">Mensaje</label>
                        </div>

                        <div class="form_status_message"></div>

                        <div class="center">
                            <button type="submit" class="btn btn-primary submit_form">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACTS SECTION -->
