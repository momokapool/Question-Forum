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
                                        (by <a href="mailto:<?= htmlspecialchars($q['email'], ENT_QUOTES, 'UTF-8'); ?>">
                                            <?= htmlspecialchars($q['username'], ENT_QUOTES, 'UTF-8'); ?></a>)

                                        <form action="list_user_question.php" method="post">
                                            <input type="hidden" name="id" value="<?= $q['user_id']?>">    
                                            <button type="submit" value="submit">See this user's question</button>
                                        </form>

                                        <img src="../upload/<?= $q['questionimage'] ?>" width="250" height="180">

                                        <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                            <div><i class="fa fa-calendar-o"></i><span class="ml-2">
                                                    <?= htmlspecialchars($q['question_date'], ENT_QUOTES, 'UTF-8') ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <a href="edit.php?id=<?= $q['id'] ?>">Edit</a>

                            <form action="../answer/list_answer.php" method="post">
                                <input type="hidden" name="id" value="<?= $q['id'] ?>">
                                <button type="submit" value="Delete" class="btn btn-primary btn-lg">View answer for this question </button>
                            </form>
                            <br>

                            <form action="../answer/insert_answer.php" method="post">

                                <label for="exampleInputanswer">Answer this question</label>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputquestion">Type your answer here</label>
                                    <input type="text" name="answer_text" class="form-control" placeholder="Enter your answer">
                                    <input type="hidden" name="id" value="<?= $q['id'] ?>">

                                </div>
                                <br>
                                <button type="submit" name="submit" value="Add" class="btn btn-primary btn-lg">Post your answer</button>
                                <br>
                            </form>

                            <br><br>

                            <form action="delete.php" method="post">
                                <input type="hidden" name="id" value="<?= $q['id'] ?>">
                                <button type="submit" value="Delete" class="btn btn-primary btn-lg">Delete</button>
                            </form>
    </blockquote>
<?php endforeach; ?>