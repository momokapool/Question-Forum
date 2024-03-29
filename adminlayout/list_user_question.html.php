<?php
foreach ($questions as $q) : ?>
    <blockquote>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-3">
                        <ul class="list list-inline">
                            <li class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center"><i class="fa fa-check-circle checkicon"></i>
                                    <div class="ml-2">
                                        <?= htmlspecialchars($q['question_text'], ENT_QUOTES, 'UTF-8') ?>
                                        <br>
                                        

                                        <img src="../upload/<?= $q['questionimage'] ?>" width="250" height="180">

                                        <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                            <div><i class="fa fa-calendar-o"></i><span class="ml-2">
                                                    <?= htmlspecialchars($q['question_date'], ENT_QUOTES, 'UTF-8') ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        
    </blockquote>
<?php endforeach; ?>