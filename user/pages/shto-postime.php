<?php include "../../includes/header-user.php" ?>
<div class="container-fluid">
    <div class="mt-5">
        <h5>Postim i ri</h5>
    </div>
    <form action="" class="row mt-5 input-addpost">
        <div class="col-lg-6 col-md-6 ">
            <div class="form-group">
                <label>Titulli</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Qyteti</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Nr. Telefoni</label>
                <input type="text" class="form-control" id="">
            </div>
            <label>Kuadrati(m2)</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">m2</span>
                </div>
            </div>
            <label class="mb-3">Mobilimi</label>
            <div class="row">
                <div class="col-lg-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="pmobilim">
                        <label class="custom-control-label" for="pmobilim">Posedon mobilim</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="npmobilim">
                        <label class="custom-control-label" for="npmobilim">Nuk posedon mobilim</label>
                    </div>
                </div>
            </div>
            <label class="mb-3 mt-3">Targeti</label>
            <div class="row">
                <div class="col-lg-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="studentet">
                        <label class="custom-control-label" for="studentet">Studentet</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="tegjitha">
                        <label class="custom-control-label" for="tegjitha">Te gjitha</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>Kategoria</label>
                <select class="form-control" id="">
                    <option>Shtepi</option>
                    <option>Banese</option>
                </select>
            </div>
            <div class="form-group">
                <label>Adresa(Rruga,Nr)</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Kategoria</label>
                <select class="form-control" id="">
                    <option>Me Qera</option>
                    <option>Shitje</option>
                </select>
            </div>
            <label>Nr. Katit</label>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" min="1" class="form-control" id="" placeholder="1">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="number" min="1" class="form-control" id="" placeholder="10">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label>Qmimi</label>
                    <div class="form-group">
                        <input type="number" min="1" class="form-control" id="" placeholder="1">
                    </div>
                </div>
                <div class="col-lg-6">
                    <label>Nr. Dhomave</label>
                    <div class="form-group">
                        <input type="number" min="1" class="form-control" id="" placeholder="10">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="form-group mt-3">
                <label>Pershkrimi</label>
                <textarea class="form-control" id="" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label class="mt-3">Ngarko fotografit(max 6 deri ne 1 mb)</label>
                <input type="file" name="files">
            </div>
            <div class="form-group">
                <label class="mt-1">Ngarko foto te planit te dhomes,baneses</label>
                <input type="file" name="files">
            </div>
            <button class="btn button-btn btn-cms">SHTO POSTIN</button>
        </div>
    </form>
</div>
<?php include "../../includes/footer-user.php" ?>