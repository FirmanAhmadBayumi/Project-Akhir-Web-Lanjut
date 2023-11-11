<?= $this->extend("layouts/app") ?>

<?= $this->section("content") ?>
    <!-- ======= Hero Section ======= -->
   <br><br><br><br><br><br><br>
    <main id="main">
        <div class="container d-flex justify-content-center">
                <div class="d-flex" style="width:80%;height:30vh;background:white;position:relative;padding-left:10%;padding-top:1%;padding-bottom:1%;border-radius:50px;border:1px solid black;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <img src="/assets/img/motor-matic.jpeg"/>
                    <div class="title-card d-flex justify-content-center align-items-center flex-column text-dark" style="background-color: none;width:20%;height:100%;">
                    <h1>Scooter</h1>
                    <h1>20.000</h1>
                    </div>
                    <style>
                    .btn-custom{
                        background:black;
                    }
                    </style>
                    <div class="button-group position-absolute d-flex flex-column justify-content-around" style="height:80%;right:10%;">
                        <a class="btn btn-custom" href="#" style="background:#BCBCBC;color:white;">EDIT</a>
                        <a class="btn btn-danger" href="#">HAPUS</a>
                    </div>
                </div>
        </div>
</main>


<?= $this->endSection() ?>