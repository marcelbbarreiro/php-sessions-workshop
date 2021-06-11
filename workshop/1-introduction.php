<div>
    <div class="bd-example">
        <div class="accordion" id="introductionAccordion">
            <div class="accordion-item">
                <h4 class="accordion-header" id="introductionHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIntro" aria-expanded="false" aria-controls="collapseIntro">
                        What are Sessions?
                    </button>
                </h4>
                <div id="collapseIntro" class="accordion-collapse collapse" aria-labelledby="introductionHeading" data-bs-parent="#introductionHeading">
                    <div class="accordion-body">
                        <p>Web servers doesn't keep any info. HTTP adresses don't mantain states. Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, theme color, etc). By default, session variables last until the user closes the browser.</p>
                        <p>Session variables hold information about one single user, and are available to all pages in one application.</p>

                        <div class="alert alert-warning" role="alert">
                            <h6 class="alert-heading">Be careful when ...!</h6>
                            <p class="mb-0">If you need a permanent storage you should use a database. PHP Sessions are not meant for that. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>