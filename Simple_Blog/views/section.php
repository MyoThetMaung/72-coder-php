
<?php include_once "../sysgem/post_generator.php"; ?>
<?php include_once "../sysgem/dbhacker.php"; ?>
<?php include_once "../sysgem/mysession.php"; ?>

<section class="col-md-9">
            <div class="row">
                <?php
                    if(checkSession("username")){
                        $result = getAllPost(2);
                    }else{
                        $result = getAllPost(1);
                    }
                    $pid = $_POST['id'];
                    foreach ($result as $post) {
                        echo "<div class='col-md-6 mb-3'>
                        <div class='card'>
                            <div class='card-block p-3'>
                                <h2>".$post["title"]."</h2>
                                <p>".substr($post["content"],0,100)."</p>
                                <a href='detail.php?pid='.$pid.' class='btn btn-primary btn-sm float-right'>Detail</a>
                            </div>
                        </div>
                    </div>";
                    }
                ?>
                
            </div>
</section>