<?php include "../../includes/header.php" ?>
<div class="container-fluid">
    <div class="mt-5">
        <h5>Veshtrimi i Posteve</h5>
    </div>
    <div class="col-lg-12 px-0">
        <nav class="mt-5">
            <div class="nav buton-a nav-justified input-addpost col-lg-4 col-md-6" id="nav-tab" role="tablist">
                <!-- nav-tabs -->
                <a class="nav-item nav-link lang active" key="Vehicle" id="nav-home-tab" data-toggle="tab"
                    href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                    <label>Bizneset</label>
                </a>
                <a class="nav-item nav-link lang" key="Technical" id="nav-profile-tab" data-toggle="tab"
                    href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                    <label>Individed</label>
                </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="search-table input-group col-lg-4 col-md-6 col-12 mt-5 ml-auto">
                    <div class="search input-group-prepend ">
                        <span class="input-group-text">
                            <img src="../../assets/images/Group 54.png" class="ml-3" alt="">
                        </span>
                    </div>
                    <input class="form-control search f-focus" type="text" placeholder="Filtro postet"
                        aria-label="Search" id="searchInput">
                </div>
                <div class="t-table mt-2">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th scope="col">Nr</th>
                                <th scope="col">Emri mbiemri</th>
                                <th scope="col">Fotografia</th>
                                <th scope="col">Titulli</th>
                                <th scope="col">Qyteti</th>
                                <th scope="col">Rruga</th>
                                <th scope="col">Telefoni</th>
                                <th scope="col">Kuadrati</th>
                                <th scope="col">Qmimi</th>
                                <th scope="col">Data</th>
                                <th scope="col">Statusi</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Filan Fisteku</td>
                                <td>
                                    <img src="../../assets/images/mikita-yo-HupLwltbW3k-unsplash.jpg"
                                        class="rounded-circle ml-2" height="30px" width="30px" alt="">
                                </td>
                                <td>Banesa ne shitje</td>
                                <td>Ferizaj</td>
                                <td>12 Qershori</td>
                                <td>049049045</td>
                                <td>102 m2</td>
                                <td>200 E</td>
                                <td>11/11/202</td>
                                <td>Me qera</td>
                                <td class="o-option">
                                    <a href="">
                                        <img src="../../assets/images/Group 53.png" height="15px" alt="">
                                    </a>
                                    <a href="">
                                        <img src="../../assets/images/Icon feather-trash.png" class="ml-lg-1"
                                            height="20px" alt="">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="search-table input-group col-lg-4 col-md-6 col-12 mt-5 ml-auto">
                    <div class="search input-group-prepend ">
                        <span class="input-group-text">
                            <img src="../../assets/images/Group 54.png" class="ml-3" alt="">
                        </span>
                    </div>
                    <input class="form-control search f-focus" type="text" placeholder="Filtro postet"
                        aria-label="Search" id="searchInput">
                </div>
                <div class="t-table mt-2">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th scope="col">Nr</th>
                                <th scope="col">Emri mbiemri</th>
                                <th scope="col">Fotografia</th>
                                <th scope="col">Titulli</th>
                                <th scope="col">Qyteti</th>
                                <th scope="col">Rruga</th>
                                <th scope="col">Telefoni</th>
                                <th scope="col">Kuadrati</th>
                                <th scope="col">Qmimi</th>
                                <th scope="col">Data</th>
                                <th scope="col">Statusi</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Filan Fisteku</td>
                                <td>
                                    <img src="../../assets/images/mikita-yo-HupLwltbW3k-unsplash.jpg"
                                        class="rounded-circle ml-2" height="30px" width="30px" alt="">
                                </td>
                                <td>Banesa ne shitje</td>
                                <td>Ferizaj</td>
                                <td>12 Qershori</td>
                                <td>049049045</td>
                                <td>102 m2</td>
                                <td>200 E</td>
                                <td>11/11/202</td>
                                <td>Me qera</td>
                                <td class="o-option">
                                    <a href="">
                                        <img src="../../assets/images/Group 53.png" height="15px" alt="">
                                    </a>
                                    <a href="">
                                        <img src="../../assets/images/Icon feather-trash.png" class="ml-lg-1"
                                            height="20px" alt="">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../../includes/footer.php" ?>