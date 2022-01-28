<?php ob_start() ?>
    <div class="container p-3">
        <div class="row">
            <div class="col col-12 col-md-6 h-50 mb-2">
                <div class="card text-center">
                <div class="card-title">
                        <h2>Consultation</h2>
                    </div>
                    <div class="card-body p-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sint, praesentium laudantium architecto fugiat accusantium quae nesciunt veritatis eius unde atque dicta, consequatur illo deleniti quibusdam cum pariatur necessitatibus quasi.</p>
                        <a href="" class="btn btn-warning text-white">Voir</a>
                    </div>
                </div>
            </div>

            <div class="col col-12 col-md-6 h-50 mb-2">
                <div class="card text-center">
                    <div class="card-title">
                        <h2>Rechercher un médicaments</h2>
                    </div>
                    <div class="card-body p-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sint, praesentium laudantium architecto fugiat accusantium quae nesciunt veritatis eius unde atque dicta, consequatur illo deleniti quibusdam cum pariatur necessitatibus quasi.</p>
                        <a href="" class="btn btn-primary">Voir</a>
                    </div>
                </div>
            </div>

            <div class="col col-12 col-md-6 h-50 mb-2">
                <div class="card text-center">
                    <div class="card-title">
                        <h2>Manger, bouger... Ca fait du bien</h2>
                    </div>
                    <div class="card-body p-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sint, praesentium laudantium architecto fugiat accusantium quae nesciunt veritatis eius unde atque dicta, consequatur illo deleniti quibusdam cum pariatur necessitatibus quasi.</p>
                        <a href="" class="btn btn-primary">Voir</a>
                    </div>
                </div>
            </div>

            <div class="col col-12 col-md-6 h-50 mb-2">
                <div class="card text-center">
                    <div class="card-title">
                        <h2>La santé autour de nous</h2>
                    </div>
                    <div class="card-body p-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sint, praesentium laudantium architecto fugiat accusantium quae nesciunt veritatis eius unde atque dicta, consequatur illo deleniti quibusdam cum pariatur necessitatibus quasi.</p>
                        <a href="" class="btn btn-primary">Voir</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid mt-2 pt-2 bg-white">
        <div class="row">
            <div class="col-12 col-lg-6">

                <h1 class="text-center">Contact Us</h1>
                <hr class="bg-success" style="width:70px; height:3px;">
                <form action="" class="form p-3" id="contactUs">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Your name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Your mail" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" placeholder="A little message (if you want)"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-success">Send <img src="../assets/css/bootstrap/icons/envelope-check-fill.svg" alt="activity.svg" width="32" height="20"></button>
                    </div>
                </form>

            </div>

            <div class="col-lg-6 d-none d-md-block">
            <img src="../assets/img/1.jpg" alt="img" class="d-block w-100">
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); 
$title = "HOME";
require 'layout/template.php';
?>