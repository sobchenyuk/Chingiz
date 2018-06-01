

</div>


<?php wp_footer(); ?>

<div id="modal-ter" class="modal modal_call">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <button class="delete">X</button>
        </header>
        <section class="modal-card-body">
            <p class="has-text-centered">
                <b>
                    Здравствуйте! Мы можем перезвонить Вам <br>
                    в течение 30 минут <br>
                    и ответить на интересующие вопросы. <br>
                </b>
            </p>
            <div class="modal_call_form">
                <?php echo do_shortcode( '[contact-form-7 id="71" title="modal_call"]' ); ?>
            </div>

        </section>
    </div>
</div>

</body>
</html>